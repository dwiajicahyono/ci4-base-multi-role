<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::user');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/(:num)', 'Admin::detail/$1', ['filter' => 'role:admin']);
// $routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/myprofile', 'Home::myprofile');
$routes->get('/editprofile', 'Home::editprofile');
