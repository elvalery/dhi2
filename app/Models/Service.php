<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Route;
class Service extends Model {
  use SoftDeletes, LocalizeTrait;

  protected $localized_strings = ['ru' => ['name', 'details', 'description']];

  public function getRouteKeyName() {
    if(strpos(Route::currentRouteName(),'admin.') === 0) return 'id';
    return 'link';
  }

  public function portfolio() {
    return $this->belongsToMany(Portfolio::class);
  }
}
