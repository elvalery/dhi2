<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioPhoto extends Model {
  protected $fillable = ['link', 'order_id'];

  public function portfolio() {
    return $this->belongsTo(Portfolio::class);
  }
}
