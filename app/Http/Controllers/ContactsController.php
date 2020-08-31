<?php

namespace App\Http\Controllers;

use \App\Http\Requests\StoreContacts;
use App\Models\Contact;
use App\Models\Action;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ContactsController extends Controller {

  public function show() {
    return view('contacts');
  }

  public function store(StoreContacts $request) {
    $contact = Contact::create($request->validated());

    if ($request->hasFile('file') && $request->file('file')->isValid()) {
      $name = $request->file('file')->getClientOriginalName();
      $ext = pathinfo($name, PATHINFO_EXTENSION);
      $dir = 'form/' . date('Y-m-d');
      do {
        $filename = $contact->id . '_' . Str::random(5) . '.' . $ext ;
      } while (Storage::disk('public')->exists($dir . '/' . $filename));
      
      $path = $request->file('file')->storeAs($dir, $filename, 'public');
      $contact->file = url('storage/'. $path);
      $contact->path = storage_path($path);
      $contact->save();
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
