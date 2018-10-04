<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model {
  use SoftDeletes, ArrayFieldTrait;

  public function getRouteKeyName() {
    return 'link';
  }

  protected $dates = [
    'completion_date',
    'created_at',
    'updated_at',
    'deleted_at'
  ];

  public function getFactsListAttribute() {
    return $this->getArrayKeyField($this->facts);
  }

  public function getBriefListAttribute() {
    return $this->getArrayField($this->brief);
  }

  public function getResultsListAttribute() {
    return $this->getArrayField($this->results);
  }

  public function setImagesAttribute($images) {
    if (is_array($images)) {
      $this->attributes['images'] = json_encode($images);
    }
  }
  public function getImagesAttribute($images) {
    return json_decode($images, true);
  }

  public function service() {
    return $this->belongsToMany(Service::class);
  }

  public function getServiceArrayAttribute() {
    if (empty($this->service)) return [];

    return $this->service->map(function ($item) { return $item->name;})->implode(', ');
  }

  public function categories() {
    return $this->belongsToMany(
      Category::class, 'portfolio_category');
  }


}

