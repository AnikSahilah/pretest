<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('user', 'UserController::index');
$routes->post('user/store', 'UserController::store');

