<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller {
  public function index() {
    $list = News::orderBy('date')->get();

    return view('news.index', compact('list'));
  }

  public function show(News $news) {
    return view('news.show', compact('news'));
  }


}
