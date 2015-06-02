<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends CI_Controller {
	private $code_show;
	private $code_insert;
	private $serial;
	public $d_now;
	public $d_time;

	function __construct() {
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model('model_setting');
		$this->d_time = date('Y-m-d H:i:s');
		$this->d_now = date('Y-m-d');

	}
	public function index(){
		//$this->load->view('admin/badcat/activ_code',$data);
		redirect('badcat/viewcode');
	}
	public function slide(){
		if($this->input->post('send') != null){

					$new_name = time().'.jpg';
					$config['upload_path'] = './../uploads/';
					$config['new_image']='./../uploads/'.$new_name.'.jpg';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['file_name'] = $new_name;

					$this->load->library('upload');
					$this->upload->initialize($config);
					if ( ! $this->upload->do_upload("images-poster")){
						$data['errormessage'] = "เกิดข้อผิดพลาดกรุณาลองอีกครั้ง..";
						$data['mainurl'] = base_url()."setting/";
						$data['main'] = "Setting";
						$data['texthead'] = "Images Silde";
						$this->load->view('admin/badcat/slide/add',$data);
					}else{
						$ar = array('badcat_images' => $new_name,
									'created_at' => $this->d_time);
						if($this->model_setting->slide($ar) == TRUE){

						
							$data['successmessage'] = "ระบบทำการเพิ่มข้อมูลเรียบร้อยแล้ว..";
							$data['mainurl'] = base_url()."setting/";
							$data['main'] = "Setting";
							$data['texthead'] = "Images Silde";
							$this->load->view('admin/badcat/slide/add',$data);
						}

					}
		
		}else{
			$data['mainurl'] = base_url()."setting/";
			$data['main'] = "Setting";
			$data['texthead'] = "Images Silde";
			$this->load->view('admin/badcat/slide/add',$data);
		}


	}



}