<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::portofolio');
$routes->get('/collaborate', 'Home::collaborate');
$routes->get('/project', 'Home::project');
$routes->get('/project2', 'Home::project2');
$routes->get('/contact', 'Home::contact');
$routes->post('/contact/submit', 'Home::submit');
$routes->get('/success', 'Home::success');
