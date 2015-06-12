<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContentCtrl extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Model_content');
  }

  public function index()
	{
    return;
	}
  
  public function detail($id)
	{  
    $result = $this->Model_content->getContent($id);
    $pathAsset = assets();
    $data = array(
                  'title' => 'insurancebroker360',
                  'assets' => $pathAsset,
                  'contentTitle' => $result['title'],
                  'contentDetail' => $result['detail']
                );
    $this->parser->parse('content', $data);
	}
  
}
