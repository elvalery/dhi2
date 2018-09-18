<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Contact;
use Illuminate\Validation\Rule;

class StoreContacts extends FormRequest {
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize() {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules() {
    return [
      'name' => 'required',
      'contacts' => 'required',
      'type' => [
        'required',
        Rule::in(Contact::TYPE_PHONE, Contact::TYPE_MAIL),
      ],
    ];
  }
}
