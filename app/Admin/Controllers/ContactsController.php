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

    $grid->id('ID');
    $grid->name(__('admin.contacts.name'));
    $grid->contacts(__('admin.contacts.contacts'));
    $grid->type(__('admin.contacts.type'));
    $grid->created_at(__('admin.created_at'));
    $grid->updated_at(__('admin.updated_at'));

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
    $show->name(__('admin.contacts.name'));
    $show->contacts(__('admin.contacts.contacts'));
    $show->type(__('admin.contacts.type'));
    $show->created_at(__('admin.created_at'));
    $show->updated_at(__('admin.updated_at'));

    return $show;
  }
}
