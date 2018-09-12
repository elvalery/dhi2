<?php

namespace App\Admin\Controllers;

use App\Models\Service;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ServiceController extends Controller
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
      ->header(trans('admin.service.index.header'))
      ->description(trans('admin.service.index.description'))
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
      ->header(trans('admin.service.show.header'))
      ->description(trans('admin.service.show.description'))
      ->body($this->detail($id));
  }

  /**
   * Edit interface.
   *
   * @param mixed   $id
   * @param Content $content
   * @return Content
   */
  public function edit($id, Content $content)
  {
    return $content
      ->header(trans('admin.service.edit.header'))
      ->description(trans('admin.service.edit.description'))
      ->body($this->form()->edit($id));
  }

  /**
   * Create interface.
   *
   * @param Content $content
   * @return Content
   */
  public function create(Content $content)
  {
    return $content
      ->header(trans('admin.service.create.header'))
      ->description(trans('admin.service.create.description'))
      ->body($this->form());
  }

  /**
   * Make a grid builder.
   *
   * @return Grid
   */
  protected function grid()
  {
    $grid = new Grid(new Service);

    $grid->id('ID')->sortable();
    $grid->column('name', trans('admin.portfolio.name'))->sortable();

    $grid->paginate(20);

    $grid->filter(function($filter){

      // Remove the default id filter
      $filter->disableIdFilter();

      // Add a column filter
      $filter->like('name', trans('admin.service.name'));
    });


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
    $show = new Show(Service::findOrFail($id));

    $show->id('ID');
    $show->name( trans('admin.services.name'));
    $show->link();

    return $show;
  }

  /**
   * Make a form builder.
   *
   * @return Form
   */
  protected function form()
  {
    $form = new Form(new Service);

    $form->display('id', 'ID');

    $form
      ->text('name', trans('admin.portfolio.name'))
      ->rules('required|max:250');

    $form->editor('details', trans('admin.portfolio.details'));

    return $form;
  }
}
