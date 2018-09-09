<?php
namespace App\Models;

trait ArrayFieldTrait {
  public function getArrayField($value) {
    return $value;
  }

  public function getArrayKeyField($value) {
    return $value;
  }
}