<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerCtrl extends CI_Controller {

  public function __construct() {
    parent::__construct();
    
  }

  public function index() {
//		$this->load->view('welcome_message');
  }
  public function tempRegister(){
    $this->load->view('ajaxtest');
  }
  public function tempLogin(){
    
  }

 

}
