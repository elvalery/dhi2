<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller  {

  public function index() {
    $list = Service::orderBy('order_id')->get();

    return view('service.index', compact('list'));
  }

  public function show(Service $service) {
    return view('service.show', compact('service'));
  }

}
