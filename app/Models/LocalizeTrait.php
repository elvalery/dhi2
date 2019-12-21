<?php
namespace App\Models;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

trait LocalizeTrait {

  public function getAttributeValue($key) {
    $value = parent::getAttributeValue($key);
    $localized_key = $key . '_' . app()->getLocale();

    if(strpos(Route::currentRouteName(),'admin.') === 0) return $value;

    if(empty($this->localized_strings) ||
       app()->getLocale() == config('app.fallback_locale') ||
       !in_array($key, $this->localized_strings[app()->getLocale()]) ||
       empty($this->attributes[$localized_key])) return $value;

    $localized = parent::getAttributeValue($localized_key);
    if(!empty($localized)) return $localized;

    return $value;
  }
}
