<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Route;

class Portfolio extends Model {
  use SoftDeletes, ArrayFieldTrait, LocalizeTrait;

  protected $dates = [
    'completion_date',
    'created_at',
    'updated_at',
    'deleted_at'
  ];

  protected $localized_strings = [
    'ru' => ['name', 'facts', 'brief', 'results', 'details']
  ];

  public function resolveRouteBinding($value) {
    return $this->where('page_link', $value)->first() ?? ($this->where('id', $value)->first() ?? abort(404));
  }

  public function getRouteKeyName() {
    if(strpos(Route::currentRouteName(),'admin.') === 0) return 'id';
    return $this->page_link ? 'page_link' : 'id';
  }

  public function getFactsListAttribute() {
    return $this->getArrayKeyField($this->facts);
  }

  public function getFactsListRuAttribute() {
    return $this->getArrayKeyField($this->facts_ru);
  }

  public function getBriefListAttribute() {
    return $this->getArrayField($this->brief);
  }

  public function getBriefListRuAttribute() {
    return $this->getArrayField($this->brief_ru);
  }

  public function getResultsListAttribute() {
    return $this->getArrayField($this->results);
  }

  public function getResultsListRuAttribute() {
    return $this->getArrayField($this->results_ru);
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

  public function photos() {
    return $this->hasMany(PortfolioPhoto::class)->orderBy('order_id');

  }

}

