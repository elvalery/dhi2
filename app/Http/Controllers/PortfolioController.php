<?php
namespace App\Http\Controllers;

class PortfolioController extends Controller {

  /**
   * Instantiate a new controller instance.
   *
   * @return void
   */
  public function __construct() {

  }

  public function index() {
    return view('portfolio.index');
  }

  }