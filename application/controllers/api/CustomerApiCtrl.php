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
    $resp['status'] = 'error';
    $_POST = json_decode(file_get_contents("php://input"), true);
      $this->load->library('form_validation');
     	$this->form_validation->set_rules('InputFullName', 'fullname', 'required');
     	$this->form_validation->set_rules('InputUserName', 'user', 'required');
     	$this->form_validation->set_rules('InputPassword', 'pass', 'required');
     	$this->form_validation->set_rules('InputEmail', 'email', 'required');
     	$this->form_validation->set_rules('InputPhone', 'phone', 'required');
     	$this->form_validation->set_rules('InputAddress', 'address', 'required');

     		if ($this->form_validation->run() == FALSE){
     			$resp['status'] = 'bot';
     		}else{    
          $values = array('cusFullname' => $this->input->post('InputFullName'),
                          'cusAdrs' => $this->input->post('InputAddress'),
                          'cusPhone' => $this->input->post('InputPhone'),
                          'cusEmail' => $this->input->post('InputEmail'),
                          'cusUsername' => $this->input->post('InputUserName'),
                          'cusPassword' => sha1(md5($this->input->post('InputPassword'))),
                          'cusIdCard' => $this->input->post('InputIdCard'),
                          'cusLevel' => $this->input->post('InputLevel'),
                          'cusToken' => uniqid(md5(mt_rand()), true),
                          'cusCreateAt' => $this->dateTime );

          $isRegister = $this->Model_customer->callReisterService($values);
          if($isRegister){
            
            $userSessions = array('sesToken' => $isAuthen->cusToken,
                                      'sesCusId' => $isAuthen->cusId,
                                      'isSesLogin' => true);
                $this->session->set_userdata($userSessions);
                $resp['status'] = 'loginSuccess';
//            $resp['result'] = 'success';
          }
        }
        $result = json_encode($resp);
        echo $result;
      
  }

  public function callLogin() {
    $resp['status'] = 'error';
    $_POST = json_decode(file_get_contents("php://input"), true);
      $this->load->library('form_validation');
        $this->form_validation->set_rules('userName', 'user', 'required');
     	  $this->form_validation->set_rules('password', 'pass', 'required');
        if ($this->form_validation->run() == FALSE){
             $resp['result'] = 'bot';
        }else{  
          $resp['status'] = 'loginFalse';
          $isAuthen = $this->Model_customer->callLoginService($this->input->post('userName'), $this->input->post('password'));
            if($isAuthen){
                $userSessions = array('sesToken' => $isAuthen->cusToken,
                                      'sesCusId' => $isAuthen->cusId,
                                      'isSesLogin' => true);
                $this->session->set_userdata($userSessions);
                $resp['status'] = 'loginSuccess';
            } 
        }
    $result = json_encode($resp);
    echo $result;
  }

 
  ## GET SERVICE
  
  
  public function getProfile(){
    $resp['status'] = null;
      $hasProfile = $this->Model_customer->getProfileService(3);
      if($hasProfile){
        $resp['status'] = 'success';
        $resp['data'] = $hasProfile;
      }
      $result = json_encode($resp);
      echo $result;
  }
  
}
