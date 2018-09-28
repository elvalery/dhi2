<?php

namespace App\Admin\Controllers;

use App\Models\Job;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class JobController extends Controller
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
      ->header(__('admin.job.index.header'))
      ->description(__('admin.job.index.description'))
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
      ->header(__('admin.job.show.header'))
      ->description(__('admin.job.show.description'))
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
      ->header(__('admin.job.edit.header'))
      ->description(__('admin.job.edit.description'))
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
      ->header(__('admin.job.create.header'))
      ->description(__('admin.job.create.description'))
      ->body($this->form());
  }

  /**
   * Make a grid builder.
   *
   * @return Grid
   */
  protected function grid()
  {
    $grid = new Grid(new Job);

    $grid->id('ID')->sortable();
    $grid->order_id(__('admin.job.order-id'))->sortable();
    $grid->name(__('admin.job.name'))->sortable();
    $grid->details(__('admin.job.details'));
    $grid->created_at(__('admin.created_at'));
    $grid->updated_at(__('admin.updated_at'));

    $grid->filter(function($filter){

      // Remove the default id filter
      $filter->disableIdFilter();

      // Add a column filter
      $filter->like('name', trans('admin.job.name'));
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
    $show = new Show(Job::findOrFail($id));

    $show->id('ID');
    $show->order_id(__('admin.job.order-id'));
    $show->name(__('admin.job.name'));
    $show->cover(__('admin.job.cover'))->image();
    $show->pdf(__('admin.job.pdf'))->file();
    $show->details(__('admin.job.details'));
    $show->created_at(__('admin.created_at'));
    $show->updated_at(__('admin.updated_at'));

    return $show;
  }

  /**
   * Make a form builder.
   *
   * @return Form
   */
  protected function form()
  {
    $form = new Form(new Job);

    $form->number('order_id', trans('admin.job.order-id'))->rules('required|integer|max:32767');

    $form->text('name', __('admin.job.name'))->rules('required');
    $form->image('cover', __('admin.job.cover'))
      ->rules('required')
      ->uniqueName();
    $form->file('pdf', __('admin.job.pdf'))
      ->uniqueName()
      ->removable();;
    $form->textarea('details', __('admin.job.details'))->rules('required');

    return $form;
  }
}
