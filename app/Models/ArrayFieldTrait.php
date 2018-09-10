<?php
namespace App\Models;

trait ArrayFieldTrait {
  public function getArrayField($value) {
    if (empty($value)) return [];

    $retArr = explode(';', trim($value, ';'));

    return $retArr;
  }

  public function getArrayKeyField($value) {
    $retArr = [];

    foreach($this->getArrayField($value) as $key => $value) {
      $exploded = explode(':', $value);

      $retArr[$exploded[0]] = empty($exploded[1]) ? '' : $exploded[1];
    }

    return $retArr;
  }
}