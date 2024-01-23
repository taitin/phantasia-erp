<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->get('/get_calender', 'AccountController@getCalender');

    $router->resource('employee-check', 'EmployeeCheckController');
    $router->resource('cash-flows', 'CashFlowController');
    $router->resource('accounts', 'AccountController');
    $router->resource('ledgers', 'LedgerController');
    $router->resource('subjects', 'SubjectController');
    $router->resource('subpoenas', 'SubpoenaController');
    $router->resource('products', 'ProductController');

    $router->resource('activies', 'ActiveController');
});
