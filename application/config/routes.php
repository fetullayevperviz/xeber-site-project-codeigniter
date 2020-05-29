<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']          = 'anasehife';
$route['anasehife/(:num)']            = 'anasehife';
$route['siyaset_details/(:any)']      = 'anasehife/siyaset_details/$1';
$route['sosial_details/(:any)']       = 'anasehife/sosial_details/$1';
$route['iqtisadiyyat_details/(:any)'] = 'anasehife/iqtisadiyyat_details/$1';
$route['dunya_details/(:any)']        = 'anasehife/dunya_details/$1';
$route['idman_details/(:any)']        = 'anasehife/idman_details/$1';
$route['cemiyyet_details/(:any)']     = 'anasehife/cemiyyet_details/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route["admin"]      = "admin/index";
$route["admin/(.*)"] = "admin/$1";

$route["anasehife"]      = "anasehife/index";
$route["anasehife/(.*)"] = "anasehife/$1";

$route["siyaset"]      = "siyaset/index";
$route["siyaset/(.*)"] = "siyaset/$1";

$route["^(.*)"]         = 'index/$1';
