<?php
namespace App\Http\Controllers;

use App\Models\Portfolio;

class PortfolioController extends Controller {

  /**
   * Instantiate a new controller instance.
   *
   * @return void
   */
  public function __construct() {

  }

  public function index() {
    $list = Portfolio::all();
    $categories = array_fill_keys(Portfolio::allCategories(), null);

    array_walk($categories, function (&$item, $key) {
      $item = trans('dhi.portfolio.categories.' . $key);
    });

    return view('portfolio.index', compact('list', 'categories'));
  }

  public function show(Portfolio $portfolio) {

    return view('portfolio.show', compact('portfolio'));
  }

}