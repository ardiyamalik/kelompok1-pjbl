<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->get('dashboard', 'Dashboard::index');
$routes->get('/dashboard/filter/(:any)', 'Dashboard::index/$1'); // Rute dengan filter

$routes->get('akun1', 'Akun1::index');
$routes->get('/akun1/filter/(:any)', 'Akun1::index/$1'); // Rute dengan filter
$routes->post('saveKasMasuk', 'Akun1::saveKasMasuk');
// Untuk mengambil total kas masuk
$routes->get('akun1/getTotalMasuk', 'Akun1::getTotalMasuk');

// Untuk mengambil monthly totals masuk
$routes->get('akun1/getMonthlyTotals', 'Akun1::getMonthlyTotals');

$routes->get('/akun1/detail/(:num)', 'Akun1::editKas/$1'); // Mengambil detail data berdasarkan ID
$routes->post('/akun1/update', 'Akun1::updateKas'); // Mengupdate data berdasarkan form edit
$routes->delete('/akun1/delete/(:num)', 'Akun1::deleteKas/$1'); // Menghapus data berdasarkan ID
$routes->get('akun1/edit/(:num)', 'Akun1::editKas/$1'); // Menangani GET request untuk halaman edit



$routes->get('akun2', 'Akun2::index');
$routes->get('akun2/filter/(:any)', 'Akun2::index/$1');
$routes->post('saveKasKeluar', 'Akun2::saveKasKeluar');
// Untuk mengambil total pembayaran
$routes->get('akun2/getTotalKeluar', 'Akun2::getTotalKeluar');

// Untuk mengambil monthly totals keluar
$routes->get('akun2/getMonthlyTotals', 'Akun2::getMonthlyTotals');

$routes->get('/akun2/detail/(:num)', 'Akun2::editKas/$1'); // Mengambil detail data berdasarkan ID
$routes->post('/akun2/update', 'Akun2::updateKas'); // Mengupdate data berdasarkan form edit
$routes->delete('/akun2/delete/(:num)', 'Akun2::deleteKas/$1'); // Menghapus data berdasarkan ID
$routes->get('akun2/edit/(:num)', 'Akun2::editKas/$1'); // Menangani GET request untuk halaman edit



$routes->get('akun3', 'Akun3::index');
$routes->get('akun3/detail/(:num)', 'Akun3::detail/$1');
$routes->get('akun3/edit/(:num)', 'Akun3::edit/$1');
$routes->post('akun3/update', 'Akun3::update');
$routes->get('akun3/delete/(:num)', 'Akun3::delete/$1');
$routes->get('akun3/pdf', 'Akun3::generatePdf');


$routes->get('profile', 'Profile::index');
$routes->get('/auth/register', 'Auth::register');
$routes->post('/auth/register_process', 'Auth::register_process');
$routes->get('/register', 'Auth::register');
$routes->get('auth/login', 'Auth::login');
$routes->post('auth/login_process', 'Auth::login_process');
$routes->get('/auth/logout', 'Auth::logout');
$routes->get('/profil', 'Profil::index');
$routes->post('/profil/update', 'Profil::update');



