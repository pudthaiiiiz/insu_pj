<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LevelApiCtrl extends CI_Controller {

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
    $this->form_validation->set_rules('inputSeries', 'fullname', 'required');
    if ($this->form_validation->run() == FALSE) {
      $resp['result'] = 'bot';
    } else {
      $values = array('sName' => $this->input->post('inputSeries'));

      $isRegister = $this->Model_package->saveSeries($values);
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
    
    $_POST = json_decode(file_get_contents("php://input"), true);
//    $this->input->post('inputIdMain')
    $isData = $this->Model_package->getLevel(1);
      if($isData != 0 ){
        $resp['status'] = 'success';
        $resp['data'] = $isData;
      }
    $result = json_encode($resp);
    echo $result;
  }
}
