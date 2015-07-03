<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_menu extends CI_Model{

	public function __construct(){
		parent::__construct();
		
	}
  # GET

  public function getMenu($id){
     $result = 0;
     $this->db->where('dm_id',$id);
     $this->db->from('tbl_detail_menu');
     $isQuery = $this->db->get();
     if($isQuery->num_rows()){
      $result = $isQuery->row();
     }
     return $result;
  }



}