<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_customer extends CI_Model{

	public function __construct(){
		parent::__construct();
		
	}


  public function getCustomer(){
     $result = 0;
     $this->db->from('tbl_customers');
     $isQuery = $this->db->get();
     if($isQuery->num_rows()){
      $result = $isQuery->result();
     }
     return $result;
  }
  public function numCustomer(){
    $result = 0;
     $this->db->from('tbl_customers');
     $isQuery = $this->db->get();
     if($isQuery->num_rows()){
      $result = $isQuery->num_rows();
     }
     return $result;
  }
   public function numCustomerNow(){
    $result = 0;
     
     $this->db->select('*');
     $this->db->where('YEAR(cusCreateAt)' , date('Y'));
     $this->db->where('MONTH(cusCreateAt)' , date('m'));
     $this->db->where('DAY(cusCreateAt)' , date('d'));
//     $this->db->where('MONTH(cusCreateAt)' , 06);
//     $this->db->where(Day('cusCreateAt') , date('d'));
     $this->db->from('tbl_customers');
     $isQuery = $this->db->get();
     if($isQuery->num_rows()){
      $result = $isQuery->num_rows();
     }
     return $result;
  }

}