<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Contact extends Model {

  protected $fillable = ['email', 'phone', 'description'];
  
  protected static function boot()
  {
    parent::boot();
    
    // before delete() method call this
    static::deleting(function($contact) {
      Storage::disk('public')->delete($contact->path);
    });
  }
  
  public function actions() {
    return $this->belongsToMany(Action::class, 'contact_action');
  }
  
}
