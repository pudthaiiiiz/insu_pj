<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SildeApiCtrl extends CI_Controller {

  var $timeStamp;
  var $dateTime;
  var $cusToker;

  public function __construct() {
    parent::__construct();
    $this->load->model('Model_slide');
    $this->timeStamp = time();
    $this->dateTime = date('Y-m-d H:i:s');
  }

  public function callGetService(){
    $resp['status'] = 'error';
    $resp['data'] = null;
    $isData = $this->Model_slide->getSlide();
      if($isData != 0 ){
        $resp['status'] = 'success';
        $resp['data'] = $isData;
      }
    $result = json_encode($resp);
    echo $result;
  }
}
