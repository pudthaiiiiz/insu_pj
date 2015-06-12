<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContentCtrl extends CI_Controller {

  public function index()
	{
    $pathAsset = assets();
    $data = array(
                  'title' => 'insurancebroker360',
                  'assets' => $pathAsset
                );
    $this->parser->parse('content', $data);
	}
  
  public function detail($id)
	{
    $pathAsset = assets();
    $data = array(
                  'title' => 'insurancebroker360',
                  'assets' => $pathAsset,
                  'contentTitle' => 'title',
                  'contentDetail' => 'detail'
                );
    $this->parser->parse('content', $data);
	}
  
}
