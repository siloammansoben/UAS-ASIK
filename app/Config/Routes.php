<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', 'ContohController::index');;


$routes->get('/lamun', 'Home::lamun');
$routes->get('/', 'ContohController::lamun');;


$routes->get('/rumputlaut', 'Home::rumputlaut');
$routes->get('/', 'ContohController::rumputlaut');;

$routes->get('/mangrove', 'Home::mangrove');
$routes->get('/', 'ContohController::mangrove');;

$routes->get('/karang', 'Home::karang');
$routes->get('/', 'ContohController::karang');;

$routes->get('/Sargassum', 'Home::Sargassum');
$routes->get('/', 'ContohController::Sargassum');;

$routes->get('/kelp', 'Home::kelp');
$routes->get('/', 'ContohController::kelp');;

$routes->get('/anemon', 'Home::anemon');
$routes->get('/', 'ContohController::anemon');;

$routes->get('/bambulaut', 'Home::bambulaut');
$routes->get('/', 'ContohController::bambulaut');;

$routes->get('/toxicplants', 'Home::toxicplants');
$routes->get('/', 'ContohController::toxicplants');;

$routes->get('Contoh', function () {
    return view('Contoh.html');
    // app/Config/Routes.php


});



