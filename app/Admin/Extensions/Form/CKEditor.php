<?php

namespace App\Admin\Extensions\Form;

use Encore\Admin\Form\Field;

class CKEditor extends Field
{

  public static $js = [
    '//cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js',
 ];

  protected $view = 'admin.ckeditor';

  public function render()
  {
    //$this->script = "$('textarea.{$this->getElementClassString()}').ckeditor();";
    $this->script = "CKEDITOR.replace('{$this->column}', options);";


    return parent::render();
  }
}
