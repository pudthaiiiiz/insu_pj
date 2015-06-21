<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function __construct(){
	   parent::__construct();
	   $this->load->helper(array('url', 'form'));
	}

	public function uploadify(){
		$config['upload_path'] = "./uploads/temp/";
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 0;
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload("userfile")){
			$response = $this->upload->display_errors();
		}else{
			$response = $this->upload->data();
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}
}
