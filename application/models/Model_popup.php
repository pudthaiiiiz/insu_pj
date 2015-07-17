<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_popup extends CI_Model{

	public function __construct(){
		parent::__construct();
		
	}
  
  public function getPopup($alert){
		$result  = 0;
		$this->db->where('popAlert',$alert);
    $this->db->limit(1);
    $this->db->order_by('popCreateAt','DESC');
    $query = $this->db->get('tbl_popup');
    $isData = $query->num_rows();
      if($isData > 0){
        $result = $query->row();
      }
      return $result;
  }
  
  
	
}











