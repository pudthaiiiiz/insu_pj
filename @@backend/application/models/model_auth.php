<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_auth extends CI_Model {
	private $db2;
	public function __construct(){
		parent::__construct();
		$this->db2 = $this->load->database('db2', TRUE);
	}
	public function check_login($user,$pass)	
	{

		$this->db->where('admin_username',$user);
		$this->db->where('admin_password',$pass);
		$this->db->where('admin_type',99);
	
			if ($q = $this->db2->get('auth_admin')->num_rows() > 0) {
				return TRUE;
			}else{
				return FALSE;
			}
	}
	public function auth_log($ar)
	{
		$this->db2->insert('auth_admin_log',$ar);

	}
}
?>