<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'routes_api.php';
require_once 'routes_ctrl.php';

$route['default_controller'] = 'HomeCtrl';
$route['login'] = 'AuthenCtrl';
$route['member'] = 'AuthenCtrl/member';
$route['content'] = 'ContentCtrl';
$route['content/(:any)'] = 'ContentCtrl/detail/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
