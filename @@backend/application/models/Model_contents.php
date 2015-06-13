<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_contents extends CI_Model{

	public function __construct(){
		parent::__construct();
		
	}

  #ADD
  public function addContent($ar){
    $result = 0;
    $isQuery = $this->db->insert('tbl_contents' , $ar);
    if($isQuery){
      $result = TRUE;
    }
    return $result;
  }
  
  
  
  # GET

  public function getContents($ar = null){
     $result = 0;
     if($ar != null){
       $this->db->where('cId',$ar);
     }
     $this->db->from('tbl_contents');
     $isQuery = $this->db->get();
     if($isQuery->num_rows()){
      $result = $isQuery->result();
     }
     return $result;
  }
     
  # NUMBER
     
  public function numContents(){
    $result = 0;
     $this->db->from('tbl_contents');
     $isQuery = $this->db->get();
     if($isQuery->num_rows()){
      $result = $isQuery->num_rows();
     }
     return $result;
  }
   public function numContentNew(){
    $result = 0;
     
     $this->db->select('*');
     $this->db->where('YEAR(cCreateAt)' , date('Y'));
     $this->db->where('MONTH(cCreateAt)' , date('m'));
     $this->db->where('DAY(cCreateAt)' , date('d'));
//     $this->db->where('MONTH(cusCreateAt)' , 06);
//     $this->db->where(Day('cusCreateAt') , date('d'));
     $this->db->from('tbl_contents');
     $isQuery = $this->db->get();
     if($isQuery->num_rows()){
      $result = $isQuery->num_rows();
     }
     return $result;
  }

}