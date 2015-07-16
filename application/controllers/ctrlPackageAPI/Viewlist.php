<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viewlist extends CI_Controller {

	public function __construct() {
	    parent::__construct();
	    $this->load->model('Model_vod');
	   
	}
	public function index()
	{

		$this->load->view('main_movie/ViewCategoryMovie');
	}
	public function getView($cate){
		$res = $this->Model_vod->getVOD($cate);
		$data['list'] = $res;
		$this->load->view('main_movie/ViewCategoryMovie',$data);
	}
	public function live($cate){
		$res = $this->Model_vod->getVOD($cate);
		$data['list'] = $res;
		$this->load->view('live_ch/live',$data);
	}

	public function testFetch($id){
		echo "<pre>";
		print_r($this->Model_vod->getVOD($id));
	}
}
