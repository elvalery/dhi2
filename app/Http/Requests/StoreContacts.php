<?php

namespace App\Http\Requests;

use App\Models\Action;
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
      'phone' => 'sometimes|nullable',
      'email' => 'sometimes|nullable|email',
      'description' => 'sometimes|nullable|string',
      'action' => [
        'sometimes',
        'nullable',
        'array'
      ],
      'file' => 'sometimes|nullable|max:20480'
    ];
  }
}
