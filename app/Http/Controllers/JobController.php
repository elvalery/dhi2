<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller {
  public function index() {
    $list = Job::all();

    return view('career', compact('list'));
  }
}
