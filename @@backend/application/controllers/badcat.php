<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Badcat extends CI_Controller {
	private $code_show;
	private $code_insert;
	private $serial;
	public $d_now;
	public $d_time;

	function __construct() {
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model('model_badcat_code');
		$this->load->model('model_alluser');
		$this->d_time = date('Y-m-d H:i:s');
		$this->d_now = date('Y-m-d');

	}
	public function index(){
		//$this->load->view('admin/badcat/activ_code',$data);
		redirect('badcat/viewcode');
	}
	public function chkUserlog(){
		$data['log'] = $this->model_alluser->getLogging();
		$this->load->view('admin/alluser/log_user',$data);
	}
	
	public function test()
	{
		foreach ($this->model_badcat_code->getPrepaidWhere(10) as $key => $value) {
			echo $value->badcat_ref_code."<br />";
		}
	}
	public function createcode(){
		$data['company'] = $this->model_badcat_code->getCompany();
		$data['packet'] = $this->model_badcat_code->getPacket();
		$this->load->view('admin/badcat/create_code',$data);
	}
	public function activate($id='',$para = ''){
		if($id != null ){
			if($this->model_badcat_code->activate($id,$para) == TRUE){
				redirect(base_url().'badcat/viewcode');
			}
		}else{
			echo "<script >javascript:window.history.go(-1);</script>";
		}
	}

	public function exp_code(){
		$date = $this->d_now;
		$date = strtotime($date);
		$date = strtotime("+5 year", $date);
		return date('Y-m-d', $date);
	}
	public function call_pdf($data){
		define('FPDF_FONTPATH','fonts/');
		$this->pdf->AddPage();
		$this->pdf->AddFont('angsana','B','angsa.php');
		$this->pdf->SetFont('angsana','B',22);
		$this->pdf->SetY(10);
		$this->pdf->SetFillColor(224,224,224);

		$this->pdf->Cell(25,10,iconv( 'UTF-8','cp874' , 'ลำดับ' ),1,0,'C',true);
        $this->pdf->Cell(80,10,iconv( 'UTF-8','cp874' , 'รหัสเติมเงิน' ),1,0,'C',true);
        $this->pdf->Cell(80,10,iconv( 'UTF-8','cp874' , 'Serial' ),1,1,'C',true);
     
        foreach ($data as $key => $value) { 
	        $this->pdf->Cell(25,10,iconv( 'UTF-8','cp874' , $value['id'] ),1,0,'C');
	        $this->pdf->Cell(80,10,iconv( 'UTF-8','cp874' , $value['code_show'] ),1,0,'C');
	        $this->pdf->Cell(80,10,iconv( 'UTF-8','cp874' , $value['serial'] ),1,1,'C');
        }
		$this->pdf->Output();
	}
	public function viewcode($para = 10){
		$data['group'] = $this->model_badcat_code->getGroupCode();
		$data['code'] = $this->model_badcat_code->getPrepaidWhere($para);
		$this->load->view('admin/badcat/view_code',$data);
	}
	public function viewcode_print(){
		if($this->input->post('send') != null){

			$this->load->library('form_validation');
					
					$this->form_validation->set_rules('packet', 'packet', 'required|xss_clean');
					$this->form_validation->set_rules('company', 'company', 'required|xss_clean');
				if ($this->form_validation->run() == FALSE){
					$data['errors'] = "errors";
					$this->load->view('admin/badcat/create_code',$data);
				}else{
					$numcode = $this->model_badcat_code->getNumcode()+5;
					for ($i=1; $i <= 519; $i++) { 
						$this->genCode();

						$data[] = array('id' => $i,
										'code_show' => $this->code_show, 
										'serial' => $this->serial,
										'packet' => $this->input->post('packet'),
										'company' => $this->input->post('company'));
						$ar = array('badcat_ref_code' => $this->code_insert,
									'badcat_ref_serial' => $this->serial,
									'badcat_ref_type' => $this->input->post('company'),
									'badcat_ref_status' => 0,
									'badcat_ref_create_at' => $this->d_time,
									'badcat_ref_exp' => $this->exp_code(),
									'badcat_ref_packet' => $this->input->post('packet'),
									'badcat_ref_active' => 0,
									'badcat_ref_number' => $numcode );
						$this->model_badcat_code->create_code($ar);
					}
					$this->call_pdf($data);
				}
		}else{
			redirect('badcat/createcode');
		}
	}
	
	public function genCode() {
	    $characters = '1234567890';
	    $step1 = '';
	    $step2 = '';
	    $step3 = '';
	    $step4 = '';
	    $serial = '';

		    for ($i = 0; $i <  3; $i++) { $step1 .= $characters[rand(0, strlen($characters) - 1)]; }
		    for ($i = 0; $i <  3; $i++) { $step2 .= $characters[rand(0, strlen($characters) - 1)]; }
		    for ($i = 0; $i <  3; $i++) { $step3 .= $characters[rand(0, strlen($characters) - 1)]; }
		    for ($i = 0; $i <  3; $i++) { $step4 .= $characters[rand(0, strlen($characters) - 1)]; }
		    for ($i = 0; $i < 15; $i++) { $serial .= $characters[rand(0, strlen($characters) - 1)];}
		    	
		    $this->code_insert = $step1.$step2.$step3.$step4;
		    $this->code_show = $step1." ".$step2." ".$step3." ".$step4;
		   	$this->serial = $serial;
			
	

	}


}