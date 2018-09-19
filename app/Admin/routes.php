<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
  'prefix'        => config('admin.route.prefix'),
  'namespace'     => config('admin.route.namespace'),
  'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
  $router->get('/', 'HomeController@index');
  $router->resource('content/portfolio', PortfolioController::class);
  $router->resource('content/service', ServiceController::class);
  $router->resource('content/job', JobController::class);
  $router->resource('content/contacts', ContactsController::class);
  $router->resource('content/news', NewsController::class);
});
