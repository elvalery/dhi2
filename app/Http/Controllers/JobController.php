<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller {
  public function index() {
    $list = Job::orderBy('order_id')->get();

    return view('career', compact('list'));
  }
}
