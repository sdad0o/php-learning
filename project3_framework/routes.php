<?php
/**
 * @var Core\Router $router
 */

use Core\Middlewares\Auth;
use Core\Middlewares\CSRF;
use Core\Middlewares\View;

$router->addGlobalMiddleware(View::class);
$router->addGlobalMiddleware(CSRF::class);
$router->addRouteMiddleware('auth', Auth::class);

// General routes
$router->add('GET', '/', 'IndexController@index');

// Auth routes
$router->add('GET', '/login', 'AuthController@create');
$router->add('POST', '/login', 'AuthController@store');
$router->add('POST', '/logout', 'AuthController@destroy');