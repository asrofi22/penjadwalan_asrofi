<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->setAutoRoute(true);
$routes->get('/komik/create', 'Komik::create');
$routes->get('/komik/(:segment)', 'Komik::detail/$1');
$routes->get('komik/save', 'Komik::save');