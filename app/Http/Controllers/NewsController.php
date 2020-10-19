<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller {
  public function index() {
    $list = News::orderBy('date', 'desc')->get();

    return view('news.index', compact('list'));
  }

  public function show(News $news) {
    return view('news.show', compact('news'));
  }
  
  public function captcha(Request $request) {
    $captcha = $request->get('response');
    $secret = '6LcRPNkZAAAAALKcQk2Wfds9hFeML9yv5qhsQsd-';
    
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_POST, 1);

// In real life you should use something like:
    curl_setopt($ch, CURLOPT_POSTFIELDS,
      http_build_query(['secret' => $secret, 'response' => $captcha]));

// Receive server response ...
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $server_output = curl_exec($ch);
    
    curl_close ($ch);
    $server_output = json_decode($server_output);
    
    return response()->json($server_output);
  }
}
