<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SlidesApiCtrl extends CI_Controller {

  var $timeStamp;
  var $dateTime;
  var $cusToker;

  public function __construct() {
    parent::__construct();
    $this->load->model('Model_slide');
    $this->timeStamp = time();
    $this->dateTime = date('Y-m-d H:i:s');
  }

  public function callAddSlides() {
    $resp['status'] = 'error';
    ## VALIDA

    $this->load->library('form_validation');
    $this->form_validation->set_rules('title', 'title', 'required');
    $this->form_validation->set_rules('des', 'des', 'required');
    $this->form_validation->set_rules('temp', 'temp', 'required');

    ## UPLOAD 
    $getName = moveFile("uploads/temp/","../uploads/slides/",$this->input->post('temp'));
    ## WORK
    if ($this->form_validation->run() == FALSE) {
      $resp['status'] = 'bot';
    } else {
      
        $values = array('slTitle' => $this->input->post('title'),
            'slDes' => $this->input->post('des'),
            'slImage' => $getName,
            'slLink' => $this->input->post('link'),
            'slLinkName' => $this->input->post('linkname'),
            'slCreateAt' => $this->dateTime);

        $isContents = $this->Model_slide->addSlide($values);
        $resp['status'] = 'success';
    }
    $result = json_encode($resp);
    echo $result;
  }

}
