<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  ## API Route
  $route['api-register-customer']['post'] = 'api/CustomerApiCtrl/callReister';
  $route['api-login-admin']['post'] = 'api/AdminApiCtrl/callLogin';
  
  ## API Content
  $route['api-add-content']['post'] = 'api/ContentsApiCtrl/callAddContent';
  $route['api-edit-content']['post'] = 'api/ContentsApiCtrl/callEditContent';
  
  
  ## API Slide
  $route['api-add-slide']['post'] = 'api/SlidesApiCtrl/callAddSlides';
  $route['api-edit-content']['post'] = 'api/ContentsApiCtrl/callEditContent';
  
   ## API Popup
  $route['api-add-popup']['post'] = 'api/PopupApiCtrl/callAddPopup';
  $route['api-off-popup']['post'] = 'api/PopupApiCtrl/callAlertOff';
  $route['api-on-popup']['post'] = 'api/PopupApiCtrl/callAlertOn';


  ## API Menu
  $route['api-edit-menu']['post'] = 'api/MenuApiCtrl/editMenu';


  // API Invite Update
  $route['api-add-invite-customer']['post'] = 'api/CustomerApiCtrl/callUpdateInvite';
  
  

 
  
  $route['api-get-profile']['post'] = 'api/CustomerApiCtrl/getProfile';