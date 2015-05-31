<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['api/login-auth']['post'] = 'api/MemberService/checkAuth';



$route['callServiceAuth']['post'] = 'member/checkAuth';

