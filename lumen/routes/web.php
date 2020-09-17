<?php
date_default_timezone_set(env('APP_TIMEZONE', 'UTC'));
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
 */
$router->get('/', 'RootController@index');
$router->group(['prefix' => 'api/v1'], function () use ($router) {
    /* $router->get('user/profile', ['middleware' => 'auth', function () {
    return 'Hello User';
    }]); */
    $router->group(['middleware' => 'auth'], function () use ($router) {
        $router->post('/login', 'AuthController@login');
        $router->get('users/{id}/profile', 'UserController@getProfile');
    });
});
