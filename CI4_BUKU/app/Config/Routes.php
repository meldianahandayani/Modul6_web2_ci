<?php
use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/buku', 'Buku::index');
$routes->get('/add_data_buku', 'Buku::add_data_buku');
$routes->post('/proses_add_buku', 'Buku::proses_add_buku');
$routes->get('/edit_data_buku/(:any)', 'Buku::edit_data_buku/$1');
$routes->post('/proses_edit_buku', 'Buku::proses_edit_buku');
$routes->get('/delete_data_buku/(:any)', 'Buku::delete_data_buku/$1');
