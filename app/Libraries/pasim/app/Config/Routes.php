<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
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

//$routes->get('/', 'Home::index');
$routes->get('/','DepanController::index');
$routes->get('/daftar','DaftarController::create');
$routes->get('fakultas','fakultasController::index');
$routes->delete('/hapus/(:num)','FakultasController::delete/$1');
$routes->get('jurusan','JurusanController::index');
$routes->get('jurusan/edit/(:any)','JurusanController::edit/$1');
$routes->add('jurusan/delete/(:any)','JurusanController::delete/$1');
$routes->delete('/hapjur/(:num)','JurusanController::delete/$1');
$routes->get('pengabdian','PengabdianController::index');
$routes->delete('/hapuspeng/(:num)','PengabdianController::delete/$1');


$routes->get('penelitian','PenelitianController::index');
$routes->get('penelitian/edit/(:any)','PenelitianController::edit/$1');
$routes->add('penelitian/delete/(:any)','PenelitianController::delete/$1');

$routes->get('dosen','DosenController::index');
$routes->delete('/hapdos/(:num)','DosenController::delete/$1');

$routes->get('beasiswa','Beasiswa::index');
$routes->delete('/hapbe/(:num)','Beasiswa::delete/$1');

$routes->get('galeri','GaleriController::index');
$routes->delete('/hapgal/(:num)','GaleriController::delete/$1');


$routes->get('jurusandepan','JurusandepanController::jurusan');

$routes->get('matkul','MatkulController::index');
$routes->delete('/hapmat/(:num)','MatkulController::delete/$1');

$routes->get('kalender','KalenderController::index');
$routes->delete('/hapkal/(:num)','KalenderController::delete/$1');

$routes->get('daftaradmin','DaftarController::index');
$routes->delete('/hapusdaftar/(:num)','DaftarController::delete/$1');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
