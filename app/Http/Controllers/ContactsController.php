<?php

namespace App\Http\Controllers;

use \App\Http\Requests\StoreContacts;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactRequest;

class ContactsController extends Controller {

  public function show() {
    return view('contacts');
  }

  public function store(StoreContacts $request) {
    $contact = Contact::create($request->validated());

    Mail::to(config('mail.to'))->send(new ContactRequest($contact));

    return response()->json($contact);
  }
}
