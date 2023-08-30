<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// ============ Properties =========
$routes->get('/property/all-property', 'PropertiesController::allProperty');
$routes->get('/property/auction-property', 'PropertiesController::auctionProperty');
$routes->get('/property/add-property', 'PropertiesController::addProperty');
$routes->get('/property', 'PropertiesController::index');

// ========== Blog ========
$routes->get('/all-blogs', 'BlogController::allBlogs');
$routes->get('/blog/add-blog', 'BlogController::addBlog');
$routes->get('/blog-categories', 'BlogController::blogCategories');
$routes->get('/blog-categories/add-category', 'BlogController::addCategory');

// ========== Users ========
$routes->get('/all-users', 'UserController::allUsers');
$routes->get('/users/add-user', 'UserController::addUser');

// ======== Orders =========
$routes->get('/all-orders', 'OrderController::allOrders');
$routes->get('/invoice', 'OrderController::invoice');

// ======== Leads =========
$routes->get('/leads', 'Home::leads');

// ======== Customer =========
$routes->get('/customers', 'CustomerController::customers');