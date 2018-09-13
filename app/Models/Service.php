<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model {
  use SoftDeletes;

  public function getRouteKeyName() {
    return 'link';
  }

  public function getImageAttribute() {
    if (empty($this->portfolio)) return null;

    $list = $this->portfolio()->inRandomOrder()->get();
    foreach ($list as $portfolio) {
      if ($portfolio->images) return collect($portfolio->images)->random();
    }

    return null;
  }

  public function portfolio() {
    return $this->belongsToMany(Portfolio::class);
  }
}
