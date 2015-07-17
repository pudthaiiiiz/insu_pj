<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class PopupApiCtrl extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Model_popup');
  }

  public function getPopup(){
  
    $resp['status'] = 'success';
    $resp['data'] = "";
    $isData = $this->Model_popup->getPopup('ON');
      if($isData != 0 ){
        $resp['status'] = 'success';
        $resp['data'] = $isData;
      }
    $result = json_encode($resp);
    echo $result;
    
    
  }
}
