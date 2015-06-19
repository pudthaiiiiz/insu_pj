<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ContentsApiCtrl extends CI_Controller {

  var $timeStamp;
  var $dateTime;
  var $cusToker;

  public function __construct() {
    parent::__construct();
    $this->load->model('Model_contents');
    $this->timeStamp = time();
    $this->dateTime = date('Y-m-d H:i:s');
  }

  public function index() {
//		$this->load->view('welcome_message');
  }

 

  public function callAddContent2() {
    
    $getName = moveFile("uploads/temp/","../uploads/content/",$this->input->post('temp'));
    echo $getName;

  }

  public function callAddContent() {
    $resp['status'] = 'error';
    ## VALIDA

    $this->load->library('form_validation');
    $this->form_validation->set_rules('title', 'title', 'required');
    $this->form_validation->set_rules('detail', 'detail', 'required');
    $this->form_validation->set_rules('des', 'des', 'required');
    $this->form_validation->set_rules('temp', 'temp', 'required');

    ## UPLOAD 
    $getName = moveFile("uploads/temp/","../uploads/content/",$this->input->post('temp'));
    ## WORK
    if ($this->form_validation->run() == FALSE) {
      $resp['result'] = 'bot';
    } else {
      
        $values = array('cTitle' => $this->input->post('title'),
            'cDes' => $this->input->post('des'),
            'cDetail' => $this->input->post('detail'),
            'cImage' => $getName,
            'cCreateAt' => $this->dateTime);

        $isContents = $this->Model_contents->addContent($values);
        $resp['status'] = 'success';
    }
    $result = json_encode($resp);
    echo $result;
  }

}
