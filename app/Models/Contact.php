<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {
  const TYPE_PHONE = 'phone';
  const TYPE_MAIL = 'email';

  protected $fillable = ['name', 'type', 'contacts'];
}
