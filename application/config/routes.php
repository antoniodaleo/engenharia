<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['post/p'] = "Base";
$route['post/p/(:num)'] = "Base";

$route['restrito'] = 'restrita/home/index';