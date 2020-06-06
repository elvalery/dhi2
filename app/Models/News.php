<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model {
  use LocalizeTrait;
  
  protected $dates = [
    'date',
    'created_at',
    'updated_at',
    'deleted_at'
  ];

  protected $localized_strings = ['ru' => ['title', 'description', 'content']];
}
