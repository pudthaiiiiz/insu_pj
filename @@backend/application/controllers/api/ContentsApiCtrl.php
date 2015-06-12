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

  public function callAddContent(){
    $resp['status'] = 'error';
    ## VALIDA
    
    $this->load->library('form_validation');
    $this->form_validation->set_rules('title', 'title', 'required');
    $this->form_validation->set_rules('detail', 'detail', 'required');
    $this->form_validation->set_rules('des', 'des', 'required');
    
    ## UPLOAD 
  
    $new_name = time().'.jpg';
		$config['upload_path'] = './../uploads/';
		$config['new_image']= './../uploads/'.$new_name.'.jpg';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = $new_name;
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    ## WORK
    if ($this->form_validation->run() == FALSE ) {
      $resp['result'] = 'bot';
    }else{
      if($this->upload->do_upload("img")){
      $values = array('cTitle' => $this->input->post('title'),
                      'cDes' => $this->input->post('des'),
                      'cDetail' => $this->input->post('detail'),
                      'cImage' => $new_name,
                      'cCreateAt' => $this->dateTime);
      
      $isContents = $this->Model_contents->addContent($values);
      $resp['status'] = 'success';
      }else{
        $resp['result'] ="noupload";
      }
    }
    $result = json_encode($resp);
    print_r($this->upload->data());
    
  } 

}
