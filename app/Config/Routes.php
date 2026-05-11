<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/book', 'Book::index');
$routes->get('/book/create', 'Book::create');
$routes->post('/book/store', 'Book::store');
$routes->get('/book/detail/(:num)', 'Book::detail/$1'); // INI YG SERING LUPA
$routes->get('/book/edit/(:num)', 'Book::edit/$1');
$routes->post('/book/update/(:num)', 'Book::update/$1');
$routes->get('/book/delete/(:num)', 'Book::delete/$1');