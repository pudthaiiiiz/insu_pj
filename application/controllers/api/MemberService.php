<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memberservice extends CI_Controller {

	public function index(){
		$this->load->view('welcome_message');
	}
  public function checkAuth(){
    echo "API";
  }
  public function viewAuth(){
    
  }
}
