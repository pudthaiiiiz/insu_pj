<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class YearApiCtrl extends CI_Controller {

  var $timeStamp;
  var $dateTime;
  var $cusToker;

  public function __construct() {
    parent::__construct();
    $this->load->model('Model_package');
    $this->timeStamp = time();
    $this->dateTime = date('Y-m-d H:i:s');
  }

  public function callSaveService() {
    $resp['status'] = 'error';
    $this->load->library('form_validation');
    $_POST = json_decode(file_get_contents("php://input"), true);
    $this->form_validation->set_rules('inputBrand', 'fullname', 'required');
    if ($this->form_validation->run() == FALSE) {
      $resp['result'] = 'bot';
    } else {
      $values = array('bName' => $this->input->post('inputBrand'));

      $isRegister = $this->Model_package->saveBrand($values);
      if ($isRegister) {
        $resp['status'] = 'success';
      }
    }
    $result = json_encode($resp);
    echo $result;
  }
  
  public function callGetService(){
    $resp['status'] = 'error';
    $resp['data'] = null;
    $isData = $this->Model_package->getYear();
      if($isData != 0 ){
        $resp['status'] = 'success';
        $resp['data'] = $isData;
      }
    $result = json_encode($resp);
    echo $result;
  }
}
