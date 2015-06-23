<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_slide extends CI_Model{

	public function __construct(){
		parent::__construct();
		
	}
  
 
  public function getSlide(){
    $result = 0;
    $this->db->order_by('slCreateAt','DESC');
    $query = $this->db->get('tbl_slide_main');
    $isData = $query->num_rows();
      if($isData > 0){
        $result = $query->result();
      }
    return $result;
   
  }
 
}











