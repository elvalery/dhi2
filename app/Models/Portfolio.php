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

  const CATEGORY_CONSULTING = 'consulting';
  const CATEGORY_ARCHITECTURE = 'architecture';
  const CATEGORY_INTERIOR = 'interior';
  const CATEGORY_GRAPHIC = 'graphic';
  const CATEGORY_NAVIGATION = 'navigation';
  const CATEGORY_URBAN = 'urban';

  static public function allCategories() {
    return [
      Portfolio::CATEGORY_ARCHITECTURE,
      Portfolio::CATEGORY_CONSULTING,
      Portfolio::CATEGORY_GRAPHIC,
      Portfolio::CATEGORY_INTERIOR,
      Portfolio::CATEGORY_NAVIGATION,
      Portfolio::CATEGORY_URBAN
    ];
  }

  public function getCategoryNameAttribute() {
    return trans('dhi.portfolio.categories.' . $this->category);
  }

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

}

