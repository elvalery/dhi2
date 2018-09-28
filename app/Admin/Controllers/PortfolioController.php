<?php

namespace App\Admin\Controllers;

use App\Models\Portfolio;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
  use HasResourceActions;

  public function formatShowList($list, $show_key = false) {
    if (empty($list)) return '';

    $retVal = '<ul style="list-style-type: circle;margin-bottom: -20px; padding-left: 20px">';
    foreach ($list as $key => $value) {
      if (empty($value)) continue;

      $retVal .= '<li>';
      if ($show_key) $retVal .= '<b>' . $key . '</b>: ';
      $retVal .= $value . '</li>';
    }

    $retVal .= '</ul>';
    return $retVal;
  }

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
    $grid->column('order_id', trans('admin.portfolio.order-id'))->sortable();
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
    $obj = $this;

    $show->id('ID');
    $show->order_id( trans('admin.portfolio.order-id'));
    $show->name( trans('admin.portfolio.name'));
    $show->link( trans('admin.portfolio.link'));
    $show->categoryName(trans('admin.portfolio.category'));
    $show->service(trans('admin.portfolio.services'))
      ->as(function($services) {
        return $services->map(function ($item) { return $item->name;})->implode(', ');
      });
    $show->completion_date(trans('admin.portfolio.completion_date'))->as(function ($date) {
      return $date->format('d F Y');
    });
    $show->factsList(trans('admin.portfolio.facts'))->as(function($list) use ($obj) {
      return $obj->formatShowList($list, true);
    });
    $show->briefList(trans('admin.portfolio.brief'))->as(function ($list) use ($obj) {
      return $obj->formatShowList($list);
    });
    $show->resultsList(trans('admin.portfolio.results'))->as(function ($list) use ($obj) {
      return $obj->formatShowList($list);
    });;
    $show->details(trans('admin.portfolio.details'));
    $show->cover(trans('admin.portfolio.cover'))->image();
    $show->images(trans('admin.portfolio.image'))->as(function ($images) {
      $retVal = '';
      foreach ($images as $image) {
        if (url()->isValidUrl($image)) {
          $src = $image;
        } else {
          $src = Storage::disk(config('admin.upload.disk'))->url($image);
        }

        $retVal .= "<img src='$src' style='max-width:200px;max-height:200px;margin-right:10px ' class='img' />";
      }
      return $retVal;
    });

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

    $form->number('order_id', trans('admin.portfolio.order-id'))->rules('required|integer|max:32767');

    $form
      ->text('name', trans('admin.portfolio.name'))
      ->rules('required|max:250');

    $form
      ->text('link', trans('admin.portfolio.link'))
      ->rules(function ($form) {
        $rules = 'required|min:2|alpha_dash';

        // If it is not an edit state, add field unique verification
        if (!$id = $form->model()->id) {
          $rules .= '|unique:portfolios,link';
        }

        return $rules;
      });

    $form
      ->date('completion_date', trans('admin.portfolio.completion_date'))
      ->rules('required');

    $categories = $this->categoryBuilder();
    $form
      ->select('category', trans('admin.portfolio.category'))
      ->options($categories)
      ->rules('required');

    /*$form
      ->text('services', trans('admin.portfolio.services'));*/
    $form->multipleSelect('service')->options(\App\Models\Service::all()->pluck('name', 'id'));

    $form->textarea('facts', trans('admin.portfolio.facts'))
      ->help(trans('admin.json-complex-fields-help'));
    $form->textarea('brief', trans('admin.portfolio.brief'))
      ->help(trans('admin.json-fields-help'));
    $form->textarea('results', trans('admin.portfolio.results'))
      ->help(trans('admin.json-fields-help'));

    $form->editor('details', trans('admin.portfolio.details'));

    $form
      ->image('cover', trans('admin.portfolio.cover'))
      ->rules('required')
      ->uniqueName();

    $form
      ->multipleImage('images', trans('admin.portfolio.images'))
      ->uniqueName()
      ->removable();

    $form->display('created_at', 'Created time');
    $form->display('updated_at', 'Updated time');

    return $form;
  }
}
