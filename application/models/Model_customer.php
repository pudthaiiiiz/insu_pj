<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_customer extends CI_Model{

	public function __construct(){
		parent::__construct();
		
	}
	public function callReisterService($attb){
		$result = false;
		if($this->db->insert('tbl_customers',$attb)){
			$result = true;
		}
		return $result;
	}

	public function callLoginService($user,$pass){
		$result  = 0;
		$this->db->where('cusUsername',$user);
		$this->db->where('cusPassword',sha1(md5($pass)));
		$this->db->from('tbl_customers');
		$query = $this->db->get();
		if($query->num_rows()){
			$result = $query->row();
		}
		return $result;
	}


}