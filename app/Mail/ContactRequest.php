<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Contact;

class ContactRequest extends Mailable
{
  use Queueable, SerializesModels;

  /***
   * @var Contact
   */
  public $contact;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct(Contact $contact)
  {
    $this->contact = $contact;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this->subject( $this->contact->id . ' - New contact request')->view('emails.contact-request');
  }
}
