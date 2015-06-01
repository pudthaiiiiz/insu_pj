<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  ## API Route
  $route['api-register-customer']['post'] = 'api/CustomerApiCtrl/callReister';
  $route['api-login-customer']['post'] = 'api/CustomerApiCtrl/callLogin';
  
  
  ## API Package
  
  $route['api-save-year-package']['post'] = 'ctrlPackageAPI/YearApiCtrl/callSaveService';
  $route['api-save-brand-package']['post'] = 'ctrlPackageAPI/BrandApiCtrl/callSaveService';
  $route['api-save-series-package']['post'] = 'ctrlPackageAPI/SeriesApiCtrl/callSaveService';
  
  
  
  
  
  $route['api-get-profile']['post'] = 'api/CustomerApiCtrl/getProfile';