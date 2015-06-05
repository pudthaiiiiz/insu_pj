<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  ## API Route
  $route['api-register-customer']['post'] = 'api/CustomerApiCtrl/callReister';
  $route['api-login-customer']['post'] = 'api/CustomerApiCtrl/callLogin';
  
  
  ## API Package
  
  $route['api-get-year-package']['post'] = '';
  $route['api-save-year-package']['post'] = 'ctrlPackageAPI/YearApiCtrl/callSaveService';
  $route['api-edit-year-package']['post'] = '';
  $route['api-delete-year-package']['post'] = '';
  
  $route['api-get-brand-package']['post'] = 'ctrlPackageAPI/BrandApiCtrl/callGetService';
  $route['api-save-brand-package']['post'] = 'ctrlPackageAPI/BrandApiCtrl/callSaveService';
  $route['api-edit-brand-package']['post'] = '';
  $route['api-delete-brand-package']['post'] = '';
  
  $route['api-get-series-package']['post'] = '';
  $route['api-save-series-package']['post'] = 'ctrlPackageAPI/SeriesApiCtrl/callSaveService';
  $route['api-edit-series-package']['post'] = '';
  $route['api-delete-series-package']['post'] = '';
  
  $route['api-get-main-package']['post'] = '';
  $route['api-save-main-package']['post'] = 'ctrlPackageAPI/SeriesApiCtrl/callSaveService';
  $route['api-edit-main-package']['post'] = '';
  $route['api-delete-main-package']['post'] = '';
  
  $route['api-get-profile']['post'] = 'api/CustomerApiCtrl/getProfile';