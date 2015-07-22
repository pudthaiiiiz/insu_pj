<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminApiCtrl extends CI_Controller {

  var $timeStamp;
  var $dateTime;
  var $cusToker;

  public function __construct() {
    parent::__construct();
    $this->load->model('Model_administrator');
    $this->timeStamp = time();
    $this->dateTime = date('Y-m-d H:i:s');
  }

  public function index() {
//		$this->load->view('welcome_message');
  }



  public function callLogin(){
    $resp = array();
    $username = $_POST["username"];
    $password = $_POST["password"];
    $resp['submitted_data'] = $_POST;
    $login_status = 'invalid';
    $isAdmin = $this->Model_administrator->callLoginService($username,$password);
    if($isAdmin)
    {
      $login_status = 'success';
      $newdata = array(
                   'logged_in' => TRUE
               );

      $this->session->set_userdata($newdata);
    }

    $resp['login_status'] = $login_status;

    if($login_status == 'success')
    {
      
      $resp['redirect_url'] = base_url().'HomeCtrl/main';
    }


    echo json_encode($resp);
  }

 
  ## GET SERVICE
  

}
