<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Lunera::index');
$routes->get('explore', 'Lunera::explore');
$routes->get('detail/(:any)', 'Lunera::detail/$1');
$routes->get('watch/(:any)', 'Lunera::watch/$1');
$routes->get('profile', 'Lunera::profile');
