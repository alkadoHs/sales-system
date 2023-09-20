<?php

use App\Controllers\User;
use App\Controllers\Branch;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// USER ROUTES
$routes->group('user', function($routes)
{
    $routes->get('/', 'User::index');
    $routes->get('(:num)', [User::class, 'show']);
    $routes->post('create', [User::class, 'create']);
    $routes->put('update', [User::class, 'update']);
    $routes->delete('delete/(:num)', [User::class, 'delete']);
});


// BRANCH ROUTES
$routes->group('branch', function($routes)
{
    $routes->get('/', [Branch:: class, 'index']);
    $routes->get('(:num)', [Branch::class, 'show']);
    $routes->post('create', [Branch::class, 'create']);
    $routes->put('update', [Branch::class, 'update']);
    $routes->delete('delete/(:num)', [Branch::class, 'delete']);
});

// AUTH ROUTES
$routes->view('login/', 'login');
$routes->view('logout/', 'logout');
$routes->group('auth', function($routes)
{
    $routes->post('login', [User::class, 'login']);
    $routes->post('register', [User::class, 'create']);
    $routes->get('logout', [User::class, 'logout']);
});

// SETTINGS ROUTES
$routes->view('settings/', 'settings');

$routes->get('/dashboard', static function() {
    $session = session();
    if($session->get('userId')) {
        return view('dashboard');
    } else {
        return view('login');
    }
});
