<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Model_badcat extends CI_Model{
	private $db2;
	function __construct(){
		parent::__construct();
		$this->db2 = $this->load->database('db2', TRUE);
	}

	public function create_code($ar){
		$this->db2->insert('badcat_code_ref',$ar);
		
	}


}