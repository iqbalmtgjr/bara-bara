<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/index', 'Home::index');

$routes->get('/poling', 'Poling::index');
$routes->get('/tentang-kami', 'Poling::about');
