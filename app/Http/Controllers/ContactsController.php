<?php

namespace App\Http\Controllers;

use \App\Http\Requests\StoreContacts;
use App\Models\Contact;
use App\Models\Action;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactRequest;

class ContactsController extends Controller {

  public function show() {
    return view('contacts');
  }

  public function store(StoreContacts $request) {
    $contact = Contact::create($request->validated());

    if ($request->hasFile('file') && $request->file('file')->isValid()) {
      $name = $request->file('file')->getClientOriginalName();
      $path = $request->file('file')->storeAs('form/' . Str::random(30), Str::random(5). '_' . $name, 'public');
      $contact->file = url('storage/'. $path);
      $contact->path = storage_path($path);
    }

    if ($request->has("action")) {
      foreach ($request->get('action') as $action) {
        $contact->actions()->attach(Action::find($action));
      }
    }

    $mail_to = config('mail.to');
    if (!is_array($mail_to)) {
      $mail_to = [$mail_to];
    }

    foreach ($mail_to as $address) {
      Mail::to($address)->send(new ContactRequest($contact));
    }

    return response()->json($contact);
  }
}
