<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Properties
$routes->get('/property/all-property', 'Properties::allProperty');
$routes->get('/property/auction-property', 'Properties::auctionProperty');
$routes->get('/property', 'Properties::index');
$routes->get('/property', 'Properties::index');
