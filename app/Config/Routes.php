<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/migrate', 'Migrate::index');
$routes->post('/user', 'UserController::createUser');
$routes->get('/users', 'UserController::getAllUsers');
$routes->get('/user/(:num)', 'UserController::getUserById/$1');
$routes->put('/user/(:num)', 'UserController::updateUser/$1');
$routes->delete('/user/(:num)', 'UserController::deleteUser/$1');
