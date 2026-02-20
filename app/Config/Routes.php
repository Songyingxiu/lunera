<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// LOG IN PAGE
$routes->get('login', 'Auth::login');           
$routes->post('auth/process', 'Auth::process');
$routes->get('logout', 'Auth::logout');        

// 2. USER
$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'Lunera::index');                     // Home
    $routes->get('explore', 'Lunera::explore');             // Explore page
    $routes->get('detail/(:segment)', 'Lunera::detail/$1'); // Detail Anime
    $routes->get('watch/(:num)', 'Lunera::watch/$1');       // Nonton Video
    $routes->get('profile', 'Profile::index');              // Profile View
    $routes->get('profile/edit', 'Profile::edit');          // Edit Profile
    $routes->post('profile/update', 'Profile::update');     // Process save profile
    $routes->post('profile/delete', 'Profile::delete');     // Delete profile
    $routes->get('settings', 'Lunera::settings');           // Setting
});

// ADMIN
$routes->group('admin', ['filter' => 'admin'], function ($routes) {
    $routes->get('/', 'Admin::index');                // adminhome
    $routes->get('add-episode', 'Admin::addEpisode'); // addepisode
    $routes->post('save-episode', 'Admin::saveEpisode'); // Process save new episode
});