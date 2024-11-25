<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Default routes
$routes->get('/', 'Index::index');
$routes->get('index', 'Index::index');
$routes->get('index/index', 'Index::index');
$routes->get('home', 'Index::index');

// Additional routes for Index methods
$routes->get('index/showdata', 'Index::showData');
$routes->get('index/showdata/(:alpha)/(:num)', 'Index::showData/$1/$2');
$routes->get('index/about', 'Index::about');

// User-related routes
$routes->get('users', 'Users::index');
$routes->get('users/add', 'Users::add');
$routes->post('users/add', 'Users::add');
$routes->get('users/view/(:num)', 'Users::view/$1');
$routes->get('users/edit/(:num)', 'Users::edit/$1');
$routes->post('users/edit/(:num)', 'Users::edit/$1');
$routes->get('users/delete/(:num)', 'Users::delete/$1');

// Product Management Routes
$routes->get('products', 'Products::index');             
$routes->get('products/add', 'Products::add');            
$routes->post('products/add', 'Products::add');
$routes->get('products/view/(:num)', 'Products::view/$1');
$routes->post('products/view/(:num)', 'Products::view/$1');

$routes->get('products/edit/(:num)', 'Products::edit/$1');
$routes->post('products/edit/(:num)', 'Products::edit/$1');
$routes->get('products/delete/(:num)', 'Products::delete/$1');

// For Login
$routes->get('login', 'Index::login');
$routes->post('login', 'Index::login');