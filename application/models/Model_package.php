<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_package extends CI_Model{

	public function __construct(){
		parent::__construct();
		
	}
	public function saveYear($attb){
		$result = false;
		if($this->db->insert('tbl_package_year',$attb)){
			$result = true;
		}
		return $result;
	}

	
}