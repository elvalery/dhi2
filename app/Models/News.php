<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;


class News extends Model {
  use LocalizeTrait;
  
  protected $dates = [
    'date',
    'created_at',
    'updated_at',
    'deleted_at'
  ];

  protected $localized_strings = ['ru' => ['title', 'description', 'content']];
  
  public function resolveRouteBinding($value) {
    return $this->where('page_link', $value)->first() ?? ($this->where('id', $value)->first() ?? abort(404));
  }
  
  public function getRouteKeyName() {
    if(strpos(Route::currentRouteName(),'admin.') === 0) return 'id';
    return $this->page_link ? 'page_link' : 'id';
  }
  
}
