<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model {
  use SoftDeletes, ArrayFieldTrait;

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

  public function getFactsListAttribute($value) {
    return $this->getArrayKeyField($value);
  }

  public function getBriefListAttribute($value) {
    return $this->getArrayField($value);
  }

  public function getResultsFieldAttribute($value) {
    return $this->getArrayField($value);
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

