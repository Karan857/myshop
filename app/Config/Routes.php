<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 // menu
$routes->get('/', 'Home::Index');
$routes->get('/home', 'Home::Index');
$routes->get('/shop', 'Shop::Index');
$routes->get('/about/shipping', 'About::Shipping');
$routes->get('/about/contact', 'About::Contact');
$routes->get('/history', 'History::Index');

// home
$routes->get('/attractions', 'Attractions::Index');
$routes->get('/food', 'Food::Index');

//manage
$routes->get('/manage', 'Manage::Index');
$routes->get('/manage/create', 'Manage::Create');
$routes->post('/manage/create/submit', 'Manage::SubmitCreate');
$routes->get('/manage/update/(:num)', 'Manage::Update/$1');
$routes->post('/manage/update/submit', 'Manage::SubmitUpdate');
$routes->get('/manage/delete/(:num)', 'Manage::Delete/$1');

//auth
$routes->get('/login', 'Login::Index');
$routes->post('/login/check', 'Login::Check');
$routes->get('/logout', 'Logout::Index');

//user
$routes->get('/user', 'User::Index');
$routes->get('/user/create', 'User::Create');
$routes->post('/user/create/submit', 'User::SubmitCreate');
$routes->get('/user/update/(:num)', 'User::Update/$1');
$routes->post('/user/update/submit', 'User::SubmitUpdate');
$routes->get('/user/delete/(:num)', 'User::Delete/$1');


// product
$routes->get('/product', 'Product::Index');
$routes->get('/product/create', 'Product::Create');
$routes->post('/product/create/submit', 'Product::SubmitCreate');
$routes->get('/product/update/(:num)', 'Product::Update/$1');
$routes->post('/product/update/submit', 'Product::SubmitUpdate');
$routes->get('/product/delete/(:num)', 'Product::Delete/$1');

//api
$routes->resource('api/user');

//get
$routes->get('/api/user','Api\User::Index');
$routes->get('/api/user/(:num)','Api\User::Show/$1');

//post
$routes->post('/api/user','Api\User::Create');

//update
$routes->put('/api/user','Api\User::Modify');

//delete
$routes->delete('/api/user/(:num)','Api\User::Delete/$1');