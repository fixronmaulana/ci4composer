<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/crud', 'Crud::index');
$routes->get('/crud-create', 'Crud::create');
$routes->post('/crud-create', 'Crud::save');
$routes->get('/crud-edit/(:num)', 'Crud::edit/$1');
$routes->post('/crud-edit/(:num)', 'Crud::update/$1');
$routes->get('/crud-hapus/(:num)', 'Crud::delete/$1');
