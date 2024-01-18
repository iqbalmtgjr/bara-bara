<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/index', 'Home::index');

// auth
$routes->get('/login', 'Auth::index');
$routes->get('/daftar', 'Auth::register');

// halaman di navbar
$routes->get('/poling', 'Poling::index');
$routes->get('/tentang-kami', 'Poling::about');
$routes->get('/hubungi-kami', 'Poling::contact');
$routes->get('/faq', 'Poling::faq');
