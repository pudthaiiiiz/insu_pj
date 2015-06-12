<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_administrator extends CI_Model{

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
		$this->db->where('admin_username',$user);
		$this->db->where('admin_password',$pass);
		$this->db->from('tbl_administrator');
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