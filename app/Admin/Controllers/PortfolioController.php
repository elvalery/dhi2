<?php

namespace App\Admin\Controllers;

use App\Models\Portfolio;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class PortfolioController extends Controller
{
  use HasResourceActions;

  private function categoryBuilder() {
    $categories = array_fill_keys(Portfolio::allCategories(), null);

    array_walk($categories, function (&$item, $key) {
      $item = trans('dhi.portfolio.categories.' . $key);
    });

    return $categories;
  }

  /**
   * Index interface.
   *
   * @param Content $content
   * @return Content
   */
  public function index(Content $content)
  {
    return $content
      ->header(trans('admin.portfolio.index.header'))
      ->description(trans('admin.portfolio.index.description'))
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
      ->header(trans('admin.portfolio.show.header'))
      ->description(trans('admin.portfolio.show.description'))
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
      ->header(trans('admin.portfolio.edit.header'))
      ->description(trans('admin.portfolio.edit.description'))
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
      ->header(trans('admin.portfolio.create.header'))
      ->description(trans('admin.portfolio.create.description'))
      ->body($this->form());
  }

  /**
   * Make a grid builder.
   *
   * @return Grid
   */
  protected function grid()
  {
    $grid = new Grid(new Portfolio);

    $grid->id('ID')->sortable();
    $grid->column('name', trans('admin.portfolio.name'))->sortable();
    $grid->column('link', trans('admin.portfolio.link'))->sortable();
    $grid->column('category', trans('admin.portfolio.category'))
      ->display(function ($name) { return trans('dhi.portfolio.categories.' . $name);})
      ->sortable();

    $grid->paginate(20);

    $grid->filter(function($filter){

      // Remove the default id filter
      $filter->disableIdFilter();

      // Add a column filter
      $filter->like('name', trans('admin.portfolio.name'));

      $filter->equal('category')->select($this->categoryBuilder());

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
    $show = new Show(Portfolio::findOrFail($id));



    return $show;
  }

  /**
   * Make a form builder.
   *
   * @return Form
   */
  protected function form()
  {
    $form = (new Form(new Portfolio));

    $form->display('id', 'ID');

    $form
      ->text('name', trans('admin.portfolio.name'))
      ->rules('required|max:250');

    $form
      ->text('link', trans('admin.portfolio.link'))
      ->rules('required|min:2|alpha_dash|unique:portfolio,link');

    $categories = $this->categoryBuilder();
    $form
      ->select('category', trans('admin.portfolio.category'))
      ->options($categories)
      ->rules('required');

    $form->textarea('facts', trans('admin.portfolio.facts'))
      ->help(trans('admin.json-complex-fields-help'));
    $form->textarea('brief', trans('admin.portfolio.brief'))
      ->help(trans('admin.json-fields-help'));
    $form->textarea('results', trans('admin.portfolio.results'))
      ->help(trans('admin.json-fields-help'));

    $form->editor('details', trans('admin.portfolio.details'));

    $form
      ->multipleImage('images', trans('admin.portfolio.images'))
      ->uniqueName()
      ->removable();

    return $form;
  }
}
