<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_content extends CI_Model{

	public function __construct(){
		parent::__construct();
		
	}
  
  public function getContent($id){
		$result  = 0;
		$this->db->where('cId',$id);
    $query = $this->db->get('tbl_contents');
    $isData = $query->num_rows();
      if($isData > 0){
        $result = $query->row();
      }
      return $result;
  }
  
	
}











