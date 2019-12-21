<?php
namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

class PortfolioController extends Controller {

  public function index() {
    $list = Portfolio::orderBy('order')->get();
    $categories = Category::orderBy('order_id')->get();

    return view('portfolio.index', compact('list', 'categories'));
  }

  public function show(Portfolio $portfolio) {

    return view('portfolio.show', compact('portfolio'));
  }

}
