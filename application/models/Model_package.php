<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_package extends CI_Model{

	public function __construct(){
		parent::__construct();
		
	}
  
  # YEAR #
	public function saveYear($attb){
		$result = false;
		if($this->db->insert('tbl_package_year',$attb)){
			$result = true;
		}
		return $result;
	}
  
  public function getYear(){
    $result = 0;
    $this->db->order_by('yName','ASC');
    $query = $this->db->get('tbl_package_year');
    $isData = $query->num_rows();
      if($isData > 0){
        $result = $query->result();
      }
    return $result;
   
  }
  
  
   # BRAND #
	public function saveBrand($attb){
		$result = false;
		if($this->db->insert('tbl_package_brand',$attb)){
			$result = true;
		}
		return $result;
	}
  
  public function getBrand(){
    $result = 0;
    $this->db->order_by('bName','ASC');
    $query = $this->db->get('tbl_package_brand');
    $isData = $query->num_rows();
      if($isData > 0){
        $result = $query->result();
      }
    return $result;
   
  }
  
  
  
   # SERIES #
	public function saveSeries($attb){
		$result = false;
		if($this->db->insert('tbl_package_series',$attb)){
			$result = true;
		}
		return $result;
	}
  
  public function getSeries($year,$brand){
    $result = 0;
    $this->db->like('sYear',$year);
    $this->db->where('sBrand',$brand);
    $this->db->order_by('sName','ASC');
    $query = $this->db->get('tbl_package_series');
    $isData = $query->num_rows();
      if($isData > 0){
        $result = $query->result();
      }
    return $result;
   
  }
  
  
 
  
	
}











