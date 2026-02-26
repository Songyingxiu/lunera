<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// LOG IN
$routes->get('login', 'Auth::login');           
$routes->post('auth/process', 'Auth::process');
$routes->get('logout', 'Auth::logout');        

// 2. USER ROUTES (Wajib Login)
// 'auth' for making sure the user already login
$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'Lunera::index');                     // Home
    $routes->get('explore', 'Lunera::explore');             // Explore page
    $routes->get('mylist', 'Lunera::myList');
    $routes->get('detail/(:segment)', 'Lunera::detail/$1'); // Detail Anime
    $routes->get('watch/(:num)', 'Lunera::watch/$1');       // Nonton Video
    $routes->get('profile', 'Lunera::profile');             // Profile View
    $routes->get('profile/edit', 'Lunera::editProfile');    // Edit Profile
    $routes->post('profile/update', 'Lunera::updateProfile'); // Process save profile
    $routes->get('settings', 'Lunera::settings'); 
    $routes->get('lunera/toggleFavorite/(:num)', 'Lunera::toggleFavorite/$1');          // Setting
});

// 3. ADMIN ROUTES (Wajib Login + Role Admin)
// filter admin so only admin can access
$routes->group('admin', ['filter' => 'admin'], function ($routes) {
    $routes->get('/', 'Admin::index');                // adminhome
    $routes->get('add-episode', 'Admin::addEpisode'); // addepisode
    $routes->post('save-episode', 'Admin::saveEpisode'); // Process save new episode
});

// ROUTES API
$routes->group('api', function ($routes) {
    
    // Hanya mengaktifkan method 'index' (GET All) dan 'show' (GET by ID)
    $routes->resource('contents', [
        'controller' => 'Api\LuneraApi',
        'only'       => ['index', 'show']
    ]);
});