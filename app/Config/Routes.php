<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// 1. LOG IN & AUTH
$routes->get('login', 'Auth::login');           
$routes->post('auth/process', 'Auth::process');
$routes->get('logout', 'Auth::logout');        

// 2. USER ROUTES (Wajib Login)
$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'Lunera::index');                     // Home
    $routes->get('explore', 'Lunera::explore');             // Explore page
    $routes->get('mylist', 'Lunera::myList');               // My List page
    $routes->get('detail/(:segment)', 'Lunera::detail/$1'); // Detail Anime
    $routes->get('watch/(:num)', 'Lunera::watch/$1');       // Nonton Video
    $routes->get('profile', 'Lunera::profile');             // Profile View
    $routes->get('profile/edit', 'Lunera::editProfile');    // Edit Profile
    $routes->post('profile/update', 'Lunera::updateProfile');// Process save profile
    $routes->get('settings', 'Lunera::settings');           // Setting
    $routes->get('lunera/toggleFavorite/(:num)', 'Lunera::toggleFavorite/$1'); // Toggle Favorite
});

// 3. ADMIN ROUTES (Wajib Login + Role Admin)
$routes->group('admin', ['filter' => 'admin'], function ($routes) {
    $routes->get('/', 'Admin::index');                    
    
    // --- MANAGE EPISODE ---
    $routes->get('add-episode', 'Admin::addEpisode');     
    $routes->post('save-episode', 'Admin::saveEpisode');  
    
    // --- MANAGE CONTENT  ---
    $routes->get('add-content', 'Admin::addContent');     
    $routes->post('save-content', 'Admin::saveContent');  
    
    // --- MANAGE USERS  ---
    $routes->get('users', 'Admin::users');                
    $routes->post('users/add', 'Admin::addUser');         
    $routes->post('users/update/(:num)', 'Admin::updateUser/$1'); 
    $routes->post('users/delete/(:num)', 'Admin::deleteUser/$1'); 
});

// 4. ROUTES API
$routes->group('api', function ($routes) {
    $routes->resource('contents', [
        'controller' => 'Api\LuneraApi'
    ]);
    
    $routes->get('search', 'Lunera::searchAPI');
    $routes->post('auth/login', 'Auth::apiLogin');
    
    // Profile API
    $routes->get('profile/(:num)', 'Api\ProfileApi::show/$1'); 
    $routes->post('profile/update', 'Api\ProfileApi::updateProfile'); 
    $routes->delete('profile/delete/(:num)', 'Api\ProfileApi::delete/$1'); 
    $routes->get('categories', 'Api\LuneraApi::categories'); 

    // 🚀 THE SYNC TRIO (Added for Flutter)
    $routes->post('toggleFavorite/(:num)', 'Lunera::toggleFavorite/$1');
    $routes->get('favorites/(:num)', 'Lunera::getFavoritesAPI/$1');
    $routes->get('episodes/(:num)', 'Lunera::getEpisodesAPI/$1');
});