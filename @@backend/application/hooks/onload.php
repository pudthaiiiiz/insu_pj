<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Onload{
	public $CI;
	private $adm;
	function __construct()
	{
		$this->CI =& get_instance();		

		//$this->CI->load->model("admin_model");
		//$this->adm=$this->CI->admin_model;
	}
	public function check_login(){
		$cont = $this->CI->router->class;
		$med = $this->CI->router->method;
		
		if($cont!="auth"){
			if($this->CI->session->userdata("logged_in") != TRUE){
				redirect("auth/login");
			}
		}
	}
}
?>