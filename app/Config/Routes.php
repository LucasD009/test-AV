<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/migrate', 'Migrate::index');
$routes->get('/createUser', 'UserController::createUser');
$routes->get('/getAll', 'UserController::getAllUsers');
$routes->get('/getUser', 'UserController::getUserById');
$routes->get('/updateUser', 'UserController::updateUser');
$routes->get('/deleteUser', 'UserController::deleteUser');
$routes->get('/deleteInactivesUsers', 'UserController::deleteInactiveUsers');
