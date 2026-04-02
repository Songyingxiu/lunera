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
// 'auth' for making sure the user already login
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
// filter admin so only admin can access
$routes->group('admin', ['filter' => 'admin'], function ($routes) {
    $routes->get('/', 'Admin::index');                    // Dashboard Admin (adminhome)
    
    // --- MANAGE EPISODE ---
    $routes->get('add-episode', 'Admin::addEpisode');     // View: addepisode
    $routes->post('save-episode', 'Admin::saveEpisode');  // Action: Process save new episode
    
    // --- MANAGE CONTENT  ---
    $routes->get('add-content', 'Admin::addContent');     // View: addcontent
    $routes->post('save-content', 'Admin::saveContent');  // Action: Process save new content
    
    // --- MANAGE USERS  ---
    $routes->get('users', 'Admin::users');                // View: Manage Users list
    $routes->post('users/add', 'Admin::addUser');         // Action: Process add new user dari Modal

    $routes->post('users/update/(:num)', 'Admin::updateUser/$1'); // Update User
    $routes->post('users/delete/(:num)', 'Admin::deleteUser/$1'); // Delete User
});

// 4. ROUTES API
$routes->group('api', function ($routes) {
    // Hanya mengaktifkan method 'index' (GET All) dan 'show' (GET by ID)
    $routes->resource('contents', [
        'controller' => 'Api\LuneraApi'
    ]);
    $routes->get('search', 'Lunera::searchAPI');
    $routes->post('auth/login', 'Auth::apiLogin');
    $routes->get('profile/(:num)', 'Api\ProfileApi::show/$1'); // READ
    $routes->post('profile/update', 'Api\ProfileApi::updateProfile'); // UPDATE (Using POST for file uploads)
    $routes->delete('profile/delete/(:num)', 'Api\ProfileApi::delete/$1'); // DELETE
    $routes->get('categories', 'Api\LuneraApi::categories'); // GET Categories
});