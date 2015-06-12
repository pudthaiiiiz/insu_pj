<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_content extends CI_Model{

	public function __construct(){
		parent::__construct();
		
	}
  
  public function getContent($id){
//    $this->db->order_by('yName','DESC');
//    $query = $this->db->get('tbl_package_year');
//    $isData = $query->num_rows();
//      if($isData > 0){
//        $result = $query->result();
//      }
    $result = array(
        'title' => 'content id : '.$id,
        'detail' => 'content detail'
    );
    return $result;
  }
  
	
}











