<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// if($this->input->post("remember_me"))
		// 		 $this->config->set_item('sess_expire_on_close', '0');
		// $this->load->library('session');
		$this->load->model('model_auth');
	}
	public function index(){
		redirect("auth/login");
	}
	
	public function login()
	{
		if($this->session->userdata('logged_in') != true){


			$this->load->view('admin/login');
		}else{
			$this->load->view('admin/home');
		}
	}
	public function logout(){
		$this->session->set_userdata("logged_in","");
		redirect("auth/login");
	}
	public function log($user,$pass,$status){
		if ($this->agent->mobile() != null) {
			$mobile = 'Mobile';
		}else{
			$mobile = 'Computer';
		}
		$arr = array('ip_address' =>$this->input->ip_address(),
					 'txt_user' => $user,
					 'txt_pass' => $pass,
					 'Status' => $status,
					 'is_browser' => $this->agent->browser(),
					 'is_mobile' => $mobile,
					 'is_version' => $this->agent->version(),
					 'is_platform' => $this->agent->platform(),
					 'is_agent_string' => $this->agent->agent_string(),
					 'created_at' => date("Y-m-d H:i:s")
					 );
		$this->model_auth->auth_log($arr);


	}
	public function check_login()
	{
			
			$resp = array();
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$resp['submitted_data'] = $_POST;
			$login_status = 'invalid';


			if($username != null && $password != null)
			{
				
				if ($this->model_auth->check_login($username,$password) == TRUE) {
					$login_status = 'success';
					$this->log($username,$password,1);
				}else{
					$this->log($username,$password,0);
				}
			}

			$resp['login_status'] = $login_status;
			if($login_status == 'success')
			{
				$newdata = array('logged_in' => TRUE);
				$this->session->set_userdata($newdata);
				$resp['redirect_url'] = base_url().'badcat';
			}
			echo json_encode($resp);
		
	}
	
}
