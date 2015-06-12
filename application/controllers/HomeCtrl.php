<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeCtrl extends CI_Controller {
  
  public function __construct() {
    parent::__construct();
    $this->load->model('Model_content');
  }

	public function index()
	{
    $pathAsset = assets();
    $result = $this->Model_content->getContentAll();
//    print_r($result);die();
    $data = array(
                  'title' => 'insurancebroker360',
                  'baseUrl' => base_url(),
                  'assets' => $pathAsset,
                  'contents' => $result
                );
    $this->parser->parse('home', $data);
	}
}
