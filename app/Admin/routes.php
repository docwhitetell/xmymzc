<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->resource('/example-solution', ExampleController::class);
    $router->resource('/page', PageController::class);
    $router->resource('/contact', ContactController::class);
    $router->resource('/friends-link', LinkController::class);
});
