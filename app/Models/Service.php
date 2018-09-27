<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model {
  use SoftDeletes;

  public function getRouteKeyName() {
    return 'link';
  }

  public function portfolio() {
    return $this->belongsToMany(Portfolio::class);
  }
}
