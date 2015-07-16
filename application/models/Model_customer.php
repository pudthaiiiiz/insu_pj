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
		$isQuery = $this->db->get();
		if($isQuery->num_rows()){
			$result = $isQuery->row();
		}
		return $result;
	}
	public function callCheckUsername($user){
		$result  = 0;
		$this->db->where('cusUsername',$user);
		$isQuery = $this->db->get();
		if($isQuery->num_rows()){
			$result = $isQuery->row();
		}
		return $result;
	}
	public function getProfileService($attb){
	     $result = 0;
	     $this->db->where('cusId',$attb);
	     $this->db->from('tbl_customers');
	     $isQuery = $this->db->get();
	     if($isQuery->num_rows()){
	      $result = $isQuery->row();
	     }
	     return $result;
	}

}