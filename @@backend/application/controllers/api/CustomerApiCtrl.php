<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerApiCtrl extends CI_Controller {

  var $timeStamp;
  var $dateTime;
  var $cusToker;

  public function __construct() {
    parent::__construct();
    $this->load->model('Model_customer');
    $this->timeStamp = time();
    $this->dateTime = date('Y-m-d H:i:s');
  }

  public function callUpdateInvite() {
    $resp['status'] = 'error';
    $tokenTo = $this->input->post('tokenTo');
    $thisToken = $this->input->post('thisToken');


    if($this->Model_customer->updateInvite($tokenTo,$thisToken) == true){
      $resp['status'] = 'success';
    }
    $result = json_encode($resp);
    echo $result;
  }

 

}
