<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_movefiles extends CI_Model{
  
  var $timeStamp;
  var $dateTime;
  var $cusToker;
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_contents');
    $this->timeStamp = time();
    $this->dateTime = date('Y-m-d H:i:s');
	}

 
}