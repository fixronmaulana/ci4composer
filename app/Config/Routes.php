<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/crud', 'Crud::index');
$routes->get('/crud-create', 'Crud::create');
$routes->post('/crud-create', 'Crud::save');
