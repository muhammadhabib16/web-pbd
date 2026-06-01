<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('products', 'Products::index');

$routes->get('about', 'About::index');

$routes->get('blog', 'Blog::index');
$routes->get('blog/detail/(:any)', 'Blog::detail/$1');

$routes->get('contact', 'Contact::index');

$routes->get('freelance', 'Freelance::index');

$routes->get('cart', 'Cart::index');

$routes->post('auth/login', 'Auth::login');
$routes->post('auth/register', 'Auth::register');
$routes->get('auth/logout', 'Auth::logout');

$routes->post('cart/add', 'Cart::add');
$routes->get('cart/remove/(:any)', 'Cart::remove/$1');