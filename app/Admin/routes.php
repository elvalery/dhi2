<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
  'prefix'        => config('admin.route.prefix'),
  'namespace'     => config('admin.route.namespace'),
  'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
  $router->get('/', 'HomeController@index');
  $router->resource('content/portfolio', PortfolioController::class, ['as' => 'admin.portfolio']);
  $router->resource('content/service', ServiceController::class, ['as' => 'admin.service']);
  $router->resource('content/job', JobController::class, ['as' => 'admin.job']);
  $router->resource('content/contacts', ContactsController::class, ['as' => 'admin.contacts']);
  $router->resource('content/news', NewsController::class, ['as' => 'admin.news']);
});
