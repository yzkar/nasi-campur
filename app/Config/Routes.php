<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');
$routes->setAutoRoute(true);
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
$routes->get('/news', 'News::index');
$routes->get('/news', 'News::index');
$routes->get('/news/(:any)', 'News::viewNews/$1');
$routes->group('admin', function ($routes) {
    $routes->get('news', 'NewsAdmin::index');
    $routes->get('news/(:segment)/preview', 'NewsAdmin::preview/$1');
    $routes->add('news/new', 'NewsAdmin::create');
    $routes->add('news/(:segment)/edit', 'NewsAdmin::edit/$1');
    $routes->get('news/(:segment)/delete', 'NewsAdmin::delete/$1');
});
// $routes->get('/letter', 'letter::index');
$routes->get('/letter', 'letter::index');
$routes->get('/letter/(:any)', 'letter::viewletter/$1');
$routes->group('admin', function ($routes) {
    $routes->get('letter', 'letterAdmin::index');
    $routes->get('letter/(:segment)/preview', 'letterAdmin::preview/$1');
    $routes->add('letter/new', 'letterAdmin::create');
    $routes->add('letter/(:segment)/edit', 'letterAdmin::edit/$1');
    $routes->get('letter/(:segment)/delete', 'letterAdmin::delete/$1');
});
// $routes->get('/surkom', 'surkom::index');
$routes->get('/surkom', 'surkom::index');
$routes->get('/surkom/(:any)', 'surkom::viewsurkom/$1');
$routes->group('admin', function ($routes) {
    $routes->get('surkom', 'surkomAdmin::index');
    $routes->get('surkom/(:segment)/preview', 'surkomAdmin::preview/$1');
    $routes->add('surkom/new', 'surkomAdmin::create');
    $routes->add('surkom/(:segment)/edit', 'surkomAdmin::edit/$1');
    $routes->get('surkom/(:segment)/delete', 'surkomAdmin::delete/$1');
});
