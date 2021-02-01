<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] 	= 'home';
$route['logout']				= 'login/logout';
$route['blog']					= 'home/blog';
$route['kategori/(:any)']		= 'home/kategori/$1';
$route['baca/(:any)']			= 'home/baca/$1';
$route['galery']				= 'home/foto';
$route['video']					= 'home/video';
$route['kontak']				= 'home/kontak';
$route['tentang']				= 'home/tentang';
$route['pengurus']				= 'home/pengurus';
$route['sitemap\.xml']			= 'sitemap';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;
