<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class NewsController extends Controller {
  use HasResourceActions;

  /**
   * Index interface.
   *
   * @param Content $content
   * @return Content
   */
  public function index(Content $content) {
    return $content
      ->header(__('admin.news.index.header'))
      ->description(__('admin.news.index.description'))
      ->body($this->grid());
  }

  /**
   * Show interface.
   *
   * @param mixed $id
   * @param Content $content
   * @return Content
   */
  public function show($id, Content $content) {
    return $content
      ->header(__('admin.news.show.header'))
      ->description(__('admin.news.show.description'))
      ->body($this->detail($id));
  }

  /**
   * Edit interface.
   *
   * @param mixed $id
   * @param Content $content
   * @return Content
   */
  public function edit($id, Content $content) {
    return $content
      ->header(__('admin.news.edit.header'))
      ->description(__('admin.news.edit.description'))
      ->body($this->form()->edit($id));
  }

  /**
   * Create interface.
   *
   * @param Content $content
   * @return Content
   */
  public function create(Content $content) {
    return $content
      ->header(__('admin.news.create.header'))
      ->description(__('admin.news.create.description'))
      ->body($this->form());
  }

  /**
   * Make a grid builder.
   *
   * @return Grid
   */
  protected function grid() {
    $grid = new Grid(new News);

    $grid->column('date', trans('admin.news.date'))->display(function ($date) {
      return ($date) ? (new \DateTime($date))->format('d F Y') : 'none';
    })->sortable();
    $grid->column('title', trans('admin.news.title'))->sortable();
    $grid->column('description', trans('admin.news.description'));

    $grid->filter(function ($filter) {
      $filter->like('title', trans('admin.news.title'));
    });


    return $grid;
  }

  /**
   * Make a show builder.
   *
   * @param mixed $id
   * @return Show
   */
  protected function detail($id) {
    $show = new Show(News::findOrFail($id));
    $show->id('ID');
    $show->date(trans('admin.news.date'))->as(function ($date) {
      return $date->format('d F Y');
    });

    $show->title(trans('admin.news.title'));
    $show->title_ru(trans('admin.news.title') . '-ru');

    $show->description(trans('admin.news.description'));
    $show->description_ru(trans('admin.news.description') . '-ru');

    $show->cover()->image();

    $show->content();
    $show->content_ru();

    return $show;
  }

  /**
   * Make a form builder.
   *
   * @return Form
   */
  protected function form() {
    $form = new Form(new News);
    $form->display('id', 'ID');

    $form
      ->text('title', trans('admin.news.title'))
      ->rules('required|max:250');

    $form
      ->text('title_ru', trans('admin.news.title') . '-ru')
      ->rules('max:250');


    $form
      ->date('date', trans('admin.news.date'))
      ->rules('required');

    $form
      ->textarea('description', trans('admin.news.description'))
      ->rules('required|max:250');

    $form
      ->textarea('description_ru', trans('admin.news.description') . '-ru')
      ->rules('max:250');

    $form
      ->image('cover', trans('admin.portfolio.cover'))
      ->rules('required')
      ->uniqueName();

    $form->ckeditor('content', trans('admin.news.content'));
    $form->ckeditor('content_ru', trans('admin.news.content') . '-ru');

    $form->display('created_at', __('admin.created_at'));
    $form->display('updated_at', __('admin.updated_at'));

    return $form;
  }
}
