<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {
	private $code_show;
	private $code_insert;
	private $serial;
	public $d_now;
	public $d_time;

	function __construct() {
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model('model_badcat_code');
		$this->load->model('model_alluser');
		$this->d_time = date('Y-m-d H:i:s');
		$this->d_now = date('Y-m-d');

	}
	public function index(){
		//$this->load->view('admin/badcat/activ_code',$data);
		redirect('member/log');
	}
	public function log(){
		$data['log'] = $this->model_alluser->getLogging();
		$this->load->view('admin/alluser/log_user',$data);
	}
	
}