<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model {
  protected $dates = [
    'date',
    'created_at',
    'updated_at',
    'deleted_at'
  ];
}
