<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Portfolio;

class Category extends Model {
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'slug'];

  protected $localized_strings = ['ru' => ['name']];

  public function portfolios() {
    return $this->belongsToMany(
      Portfolio::class, 'portfolio_category');
  }
 }
