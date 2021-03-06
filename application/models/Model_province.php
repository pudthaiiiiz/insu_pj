<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_province extends CI_Model{

	public function __construct(){
		parent::__construct();
		
	}
  
 
  public function getProvince(){
    $result = 0;
    $this->db->order_by('PROVINCE_ID','ASC');
    $query = $this->db->get('tbl_province');
    $isData = $query->num_rows();
      if($isData > 0){
        $result = $query->result();
      }
    return $result;
   
  }

  public function getAmphoe($id=''){
    $result = 0;
    $this->db->order_by('AMPHUR_ID','ASC');
    $this->db->where('PROVINCE_ID', $id);
    $query = $this->db->get('tbl_amphur');
    $isData = $query->num_rows();
      if($isData > 0){
        $result = $query->result();
      }
    return $result;
  }

  public function getDistrict($amphurId='', $provicneId=''){
    $result = 0;
    $this->db->order_by('DISTRICT_ID','ASC');
    $this->db->where('AMPHUR_ID', $amphurId);
    $this->db->where('PROVINCE_ID', $provicneId);
    $query = $this->db->get('tbl_district');
    $isData = $query->num_rows();
      if($isData > 0){
        $result = $query->result();
      }
    return $result;
  }
  
  public function getZipcode($id=''){
    $result = 0;
    $this->db->order_by('AMPHUR_ID','ASC');
    $this->db->where('AMPHUR_ID', $id);
    $query = $this->db->get('tbl_amphur_postcode');
    $isData = $query->num_rows();
      if($isData > 0){
        $result = $query->result();
      }
    return $result;
  }
 
}











