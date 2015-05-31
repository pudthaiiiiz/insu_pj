<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  ## API Route
  $route['api-register-customer']['post'] = 'api/CustomerApiCtrl/callReister';
  $route['api-login-customer']['post'] = 'api/CustomerApiCtrl/callLogin';
  $route['api-get-profile']['post'] = 'api/CustomerApiCtrl/getProfile';