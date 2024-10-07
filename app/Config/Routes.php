<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::landing');
$routes->get('aboutUs', 'Home::about');
$routes->get('travelInformation', 'Home::info');

