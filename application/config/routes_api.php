<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  ## API Route
  $route['api/login-auth']['post'] = 'api/MemberService/checkAuth';
