<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'routes_api.php';
require_once 'routes_ctrl.php';

$route['default_controller'] = 'homectrl';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
