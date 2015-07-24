<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_slide extends CI_Model{

	public function __construct(){
		parent::__construct();
		
	}

  #ADD
  public function addSlide($ar){
    $result = 0;
    $isQuery = $this->db->insert('tbl_slide_main' , $ar);
    if($isQuery){
      $result = TRUE;
    }
    return $result;
  }
  
  
  
  # GET

  public function getSlide(){
     $result = 0;
   
     $this->db->from('tbl_slide_main');
     $isQuery = $this->db->get();
     if($isQuery->num_rows()){
      $result = $isQuery->result();
     }
     return $result;
  }
  
  
  public function getRowSlide($ar = null){
     $result = 0;
     $this->db->where('slId',$ar);
     $this->db->from('tbl_slide_main');
     $isQuery = $this->db->get();
     if($isQuery->num_rows()){
      $result = $isQuery->row();
     }
     return $result;
  }
 
  ## Edit

  public function editSlide($id ,$arr){

    $this->db->where('slid', $id);
    $this->db->update('tbl_slide_main', $arr); 
  }

}