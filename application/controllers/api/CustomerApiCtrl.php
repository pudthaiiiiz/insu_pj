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

  public function index() {
//		$this->load->view('welcome_message');
  }

  public function callReister() {
    $resp['result'] = 'error';
      $this->load->library('form_validation');
     	$this->form_validation->set_rules('fullName', 'fullname', 'required');
     	$this->form_validation->set_rules('userName', 'user', 'required');
     	$this->form_validation->set_rules('password', 'pass', 'required');
     	$this->form_validation->set_rules('email', 'email', 'required');
     	$this->form_validation->set_rules('phone', 'phone', 'required');
     	$this->form_validation->set_rules('address', 'address', 'required');

     		if ($this->form_validation->run() == FALSE){
     			$resp['result'] = 'bot';
     		}else{    
          $values = array('cusFullname' => $this->input->post('fullName'),
                          'cusAdrs' => $this->input->post('address'),
                          'cusPhone' => $this->input->post('phone'),
                          'cusEmail' => $this->input->post('email'),
                          'cusUsername' => $this->input->post('userName'),
                          'cusPassword' => sha1(md5($this->input->post('password'))),
                          'cusToken' => uniqid(md5(mt_rand()), true),
                          'cusCreateAt' => $this->dateTime );

          $isRegister = $this->Model_customer->callReisterService($values);
          if($isRegister){
            $resp['result'] = 'success';
          }
        }
        $result = json_encode($resp);
        echo $result;
      
  }

  public function checkAuth() {
    $resp['result'] = 'error';
      $this->load->library('form_validation');
        $this->form_validation->set_rules('userName', 'user', 'required');
     	  $this->form_validation->set_rules('password', 'pass', 'required');
        if ($this->form_validation->run() == FALSE){
             $resp['result'] = 'bot';
        }else{  
          $resp['result'] = 'loginFalse';
          $isAuthen = $this->Model_customer->cusAuth("pudthai12", "1234");
          if($isAuthen){
              $userSessions = array('sesToken' => $isAuthen->cusToken,
                                    'sesCusId' => $isAuthen->cusId,
                                    'isSesLogin' => true);
              $this->session->set_userdata($userSessions);
              $resp['result'] = 'loginSuccess';
          }

        }
  }

  public function viewAuth() {
    
  }

}
