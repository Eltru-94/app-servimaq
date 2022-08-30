<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */

use App\Controllers\Api\V1\AuthController;

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
/* Ruta de loggin */


/** Rutas Administrativas logeadas */

$routes->get('/', 'Home::index');

$routes->get('/nosotros', 'Home::nosotros');

$routes->get('/maquinas', 'Home::maquinas');
$routes->get('/respuestos', 'Home::respuestos');
$routes->get('/sugerencias', 'Home::sugerencias');

$routes->get('/productos/maquina/recta', 'Home::maquinas_recta');
$routes->get('/productos/maquina/overlok', 'Home::maquinas_overlok');
$routes->get('/productos/maquina/recubridora', 'Home::maquinas_recubridora');
$routes->get('/productos/maquina/especiales', 'Home::maquinas_especiales');
$routes->get('/productos/maquina/domesticas', 'Home::maquinas_domesticas');
$routes->get('/productos/maquina/bordadoras', 'Home::maquinas_bordadoras');
$routes->get('/productos/maquina/cortadoras', 'Home::maquinas_cortadoras');


$routes->get('/productos/repuestos/recta', 'Home::repuestos_recta');
$routes->get('/productos/repuestos/overlok', 'Home::repuestos_overlok');
$routes->get('/productos/repuestos/recubridora', 'Home::repuestos_recubridora');
$routes->get('/productos/repuestos/especiales', 'Home::repuestos_especiales');
$routes->get('/productos/repuestos/domesticas', 'Home::repuestos_domesticas');
$routes->get('/productos/repuestos/bordadoras', 'Home::repuestos_bordadoras');
$routes->get('/productos/repuestos/cortadoras', 'Home::repuestos_cortadoras');
$routes->get('/productos/repuestos/insumos', 'Home::insumos');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
