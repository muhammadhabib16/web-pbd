<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('products', 'Products::index');

$routes->get('about', 'About::index');

$routes->get('blog', 'Blog::index');

$routes->get('contact', 'Contact::index');

$routes->get('freelance', 'Freelance::index');

$routes->get('cart', 'Cart::index');