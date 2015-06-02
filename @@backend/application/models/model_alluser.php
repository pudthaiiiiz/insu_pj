<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_alluser extends CI_Model {
	private $db2;
	public function __construct(){
		parent::__construct();
		$this->db2 = $this->load->database('db2', TRUE);
	}
	public function getLogging()	
	{

		$query = $this->db2->get('badcat_log_user');
		return $query->result();
			
	}
	
}
?>