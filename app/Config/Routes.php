<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
// $routes->get('/', 'Home::index');
$routes->get('/', 'Page::home');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');

