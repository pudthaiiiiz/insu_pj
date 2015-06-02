<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**   
*   
*/ 
class Model_badcat_code extends CI_Model{
	private $db2;
	function __construct(){
		parent::__construct();
		$this->db2 = $this->load->database('db2', TRUE);
	}
	// create
	public function create_code($ar){
		$query = $this->db2->insert('badcat_code_ref',$ar);
		if($query){
			return TRUE;
		}
	}
	public function create_company($ar){
		$query = $this->db2->insert('badcat_company',$ar);
		if($query){
			return TRUE;
		}
	}
	public function activate($id='',$para = ''){
		if($para == null){
			$ar = array('badcat_ref_active' => 1);
		}else{
			$ar = array('badcat_ref_active' => 0);
		}
		$this->db2->where('badcat_ref_id', $id);
		$query = $this->db2->update('badcat_code_ref', $ar); 
		if($query){
			return TRUE;
		}
	}
	// --------------------------//
	// ---------- get -------------//
	public function getPrepaidWhere($para){
		$this->db2->where('badcat_ref_number',$para);
		$query = $this->db2->get('badcat_code_ref');
		return $query->result();
	}
	public function getNumcode(){
		$query = $this->db2->get('badcat_code_ref');
		return $query->last_row()->badcat_ref_number;
	}
	public function getGroupCode(){
		$this->db2->group_by('badcat_ref_number');
		$this->db2->order_by("badcat_ref_create_at", "desc"); 
		$query = $this->db2->get('badcat_code_ref');
		return $query->result();
	}
	public function getPacket(){	
		$this->db2->where('badcat_pk_status',1);
		$query = $this->db2->get('badcat_packet');
		return $query->result();
	}
	public function getCompany(){	
		$this->db2->where('badcat_cny_status',1);
		$query = $this->db2->get('badcat_company');
		return $query->result();
	}


}