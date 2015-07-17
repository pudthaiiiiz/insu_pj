<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PopupApiCtrl extends CI_Controller {

  var $timeStamp;
  var $dateTime;
  var $cusToker;

  public function __construct() {
    parent::__construct();
    $this->load->model('Model_popup');
    $this->timeStamp = time();
    $this->dateTime = date('Y-m-d H:i:s');
  }

  public function callAddPopup() {
    $resp['status'] = 'error';
    ## VALIDA

    $this->load->library('form_validation');
    $this->form_validation->set_rules('temp', 'temp', 'required');

    ## UPLOAD 
    $getName = moveFile("uploads/temp/","../uploads/popup/",$this->input->post('temp'));
    ## WORK
    if ($this->form_validation->run() == FALSE) {
      $resp['status'] = 'bot';
    } else {
        $values = array('popImage' => $getName,
            'popLink' => "",
            'popAlert' => "ON",
            'popCreateAt' => $this->dateTime);

        $isContents = $this->Model_popup->addPopup($values);
        $resp['status'] = 'success';
    }
    $result = json_encode($resp);
    echo $result;
  }

  public function callAlertOff(){
    $resp['status'] = 'error';
    $isQuery = $this->db->update('tbl_popup',array('popAlert' => "OFF"));
    if($isQuery){
      $resp['status'] = 'success';
    }
    $result = json_encode($resp);
    echo $result;
  }
  public function callAlertOn(){
    $resp['status'] = 'error';
    $isQuery = $this->db->update('tbl_popup',array('popAlert' => "On"));
    if($isQuery){
      $resp['status'] = 'success';
    }
    $result = json_encode($resp);
    echo $result;
  }
}
