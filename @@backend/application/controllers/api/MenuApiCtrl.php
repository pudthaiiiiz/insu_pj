<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MenuApiCtrl extends CI_Controller {

  var $timeStamp;
  var $dateTime;
  var $cusToker;

  public function __construct() {
    parent::__construct();
    $this->load->model('Model_menu');
    $this->timeStamp = time();
    $this->dateTime = date('Y-m-d H:i:s');
  }


  public function editMenu(){
    $resp['status'] = 'error';
    
    $id = $this->input->post('id');
    $data = $this->input->post('detail');
    $isResult = $this->Model_menu->editMenu($id,$data);
    if($isResult == true){
      $resp['status'] = 'success';
    }
    $result = json_encode($resp);
    echo $result;
  }
  

}
