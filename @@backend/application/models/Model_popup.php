<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_popup extends CI_Model{

	public function __construct(){
		parent::__construct();
		
	}

  #ADD
  public function addPopup($ar){
    $result = 0;
    $isQuery = $this->db->insert('tbl_popup' , $ar);
    if($isQuery){
      $result = TRUE;
    }
    return $result;
  }
  
  
  
  # GET

  public function getPopup(){
     $result = 0;
   
     $this->db->from('tbl_popup');
     $isQuery = $this->db->get();
     if($isQuery->num_rows()){
      $result = $isQuery->result();
     }
     return $result;
  }
  
  

}