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
    $this->load->library('form_validation');
    $_POST = json_decode(file_get_contents("php://input"), true);
    
     	$this->form_validation->set_rules('inputFullName', 'fullname', 'required');
     	$this->form_validation->set_rules('inputUserName', 'user', 'required');
     	$this->form_validation->set_rules('inputPassword', 'pass', 'required');
     	$this->form_validation->set_rules('inputEmail', 'email', 'required');
     	$this->form_validation->set_rules('inputPhone', 'phone', 'required');
     	$this->form_validation->set_rules('inputAddress', 'address', 'required');
    

     		if ($this->form_validation->run() == FALSE){
     			$resp['status'] = "bot";
     		}else{    
          $values = array('cusFullname' => $this->input->post('inputFullName'),
                          'cusAdrs' => $this->input->post('inputAddress'),
                          'cusProvince' => $this->input->post('inputProvince'),
                          'cusAmphur' => $this->input->post('inputAmphur'),
                          'cusDistrict' => $this->input->post('inputDistrict'),
                          'cusZipcode' => $this->input->post('inputZipcode'),
                          'cusPhone' => $this->input->post('inputPhone'),
                          'cusEmail' => $this->input->post('inputEmail'),
                          'cusUsername' => $this->input->post('inputUserName'),
                          'cusInvite' => $this->input->post('inputInvite'),
                          'cusPassword' => sha1(md5($this->input->post('inputPassword'))),
                          'cusIdCard' => $this->input->post('inputIdCard'),
                          'cusLevel' => $this->input->post('inputLevel'),
                          'oldCompany' => $this->input->post('inputOldInsurance'),
                          'oldInsurance' => $this->input->post('inputBrand'),
                          'oldRegister' => $this->input->post('inputOldInsuranceRegister'),
                          'cusToken' => uniqid(md5(mt_rand()), true),
                          'cusCreateAt' => $this->dateTime );

          $isRegister = $this->Model_customer->callReisterService($values);
          if($isRegister){
            
           
//                $resp['status'] = 'loginSuccess';
            $resp['status'] = 'success';
          }
        }
        $result = json_encode($resp);
        echo $result;
      
  }
  public function callback_username(){
    $resp['status'] = 'error';
    $_POST = json_decode(file_get_contents("php://input"), true);

    $isUsername = $this->Model_customer->callCheckUsername($this->input->post('inputUserName'));
    if($isUsername == 0){
      $resp['status'] = 'success';
    }
    
    $result = json_encode($resp);
    echo $result;
  }

  public function callback_Invite(){
    $resp['status'] = 'error';
    $_POST = json_decode(file_get_contents("php://input"), true);
    // $this->input->post('inputInvite')
    $isUsername = $this->Model_customer->callCheckInvite($this->input->post('inputInvite'));
    if($isUsername == 1){
      $resp['status'] = 'success';
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
          $resp['status'] = 'error';
          $isAuthen = $this->Model_customer->callLoginService($this->input->post('userName'), $this->input->post('password'));
            if($isAuthen){
                $userSessions = array('sesToken' => $isAuthen->cusToken,
                                      'sesCusId' => $isAuthen->cusId,
                                      'sesData' => $isAuthen,
                                      'isSesLogin' => true);
                $this->session->set_userdata($userSessions);
                $resp['status'] = 'success';
              
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
