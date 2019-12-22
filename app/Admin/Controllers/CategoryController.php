<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CategoryController extends AdminController {
  /**
   * Title for current resource.
   *
   * @var string
   */
  protected $title = 'Category';

  /**
   * Make a grid builder.
   *
   * @return Grid
   */
  protected function grid() {
    $grid = new Grid(new Category);

    $grid->column('id', __('Id'));
    $grid->column('slug', __('Slug'));
    $grid->column('name', __('Name'));
    $grid->column('order_id', __('Order id'));

    $grid->actions(function ($actions) {
      $actions->disableDelete();
      $actions->disableView();
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
    $show = new Show(Category::findOrFail($id));

    $show->field('id', __('Id'));
    $show->field('slug', __('Slug'));
    $show->field('name', __('Name'));
    $show->field('name_ru', __('Name') . '-ru');
    $show->field('order_id', __('Order id'));
    $show->field('created_at', __('Created at'));
    $show->field('updated_at', __('Updated at'));

    return $show;
  }

  /**
   * Make a form builder.
   *
   * @return Form
   */
  protected function form() {
    $form = new Form(new Category);

    $form->text('slug', __('Slug'));
    $form->text('name', __('Name'))->required();
    $form->text('name_ru', __('Name') . '-ru');
    $form->number('order_id', __('Order id'));

    return $form;
  }
}
