<?php

namespace App\Admin\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ContactsController extends Controller
{
  use HasResourceActions;

  /**
   * Index interface.
   *
   * @param Content $content
   * @return Content
   */
  public function index(Content $content)
  {
    return $content
      ->header(__('admin.contacts.index.header'))
      ->description(__('admin.contacts.index.description'))
      ->body($this->grid());
  }

  /**
   * Show interface.
   *
   * @param mixed   $id
   * @param Content $content
   * @return Content
   */
  public function show($id, Content $content)
  {
    return $content
      ->header(__('admin.contacts.show.header'))
      ->description(__('admin.contacts.show.description'))
      ->body($this->detail($id));
  }

  /**
   * Make a grid builder.
   *
   * @return Grid
   */
  protected function grid()
  {
    $grid = new Grid(new Contact);
  
    $grid->disableCreateButton();
    $grid->actions(function ($actions) {
      $actions->disableEdit();
    });
  
    $grid->id('Id');
    $grid->email('Email');
    $grid->phone('Phone');
    $grid->description('Description');
    $grid->created_at('Created at');
    $grid->updated_at('Updated at');
  
    return $grid;
  }

  /**
   * Make a show builder.
   *
   * @param mixed   $id
   * @return Show
   */
  protected function detail($id)
  {
    $show = new Show(Contact::findOrFail($id));

    $show->id('Id');
    $show->email('Email');
    $show->phone('Phone');
    $show->file('File')->file();
    $show->description('Description');
    $show->created_at('Created at');
    $show->updated_at('Updated at');
  
  
    return $show;
  }
}
