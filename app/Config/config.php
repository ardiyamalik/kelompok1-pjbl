<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['base_url'] = 'http://localhost:8000/PJBL/'; // Ganti dengan base URL proyek Anda
$config['index_page'] = ''; // Biasanya diatur ke '' jika Anda menggunakan mod_rewrite
$config['uri_protocol'] = 'REQUEST_URI';
$config['url_suffix'] = '';
$config['language'] = 'english';
$config['charset'] = 'UTF-8';
$config['enable_hooks'] = FALSE;
$config['subclass_prefix'] = 'MY_';
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';
$config['allow_get_array'] = TRUE;
$config['csrf_protection'] = FALSE; // Anda bisa mengaktifkannya jika perlu
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;

// Konfigurasi untuk sesi
$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'ci_session';
$config['sess_expiration'] = 7200; // 2 jam
$config['sess_save_path'] = sys_get_temp_dir();
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = FALSE;

// Autoload
$config['autoload']['libraries'] = array('database', 'session');
$config['autoload']['helper'] = array('url', 'form');

// Konfigurasi database
$config['database'] = array(
    'hostname' => 'localhost', // Ganti jika berbeda
    'username' => 'your_username', // Ganti dengan username database Anda
    'password' => 'your_password', // Ganti dengan password database Anda
    'database' => 'pjbl', // Nama database
    'dbdriver' => 'mysqli', // Driver database yang digunakan
    'dbprefix' => '', // Prefix tabel, jika ada
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
