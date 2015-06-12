<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  ## API Route
  $route['api-register-customer']['post'] = 'api/CustomerApiCtrl/callReister';
  $route['api-login-admin']['post'] = 'api/AdminApiCtrl/callLogin';
  $route['api-add-content']['post'] = 'api/ContentsApiCtrl/callAddContent';
  
  
 
  
  $route['api-get-profile']['post'] = 'api/CustomerApiCtrl/getProfile';