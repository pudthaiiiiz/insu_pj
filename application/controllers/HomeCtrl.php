<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeCtrl extends CI_Controller {

	public function index()
	{
    
//   echo assets();
//   return;
    $this->load->library('parser');
    $data = array(
                  'title' => 'insurancebroker360',
                  'assets' => assets()
                );
    $this->parser->parse('home', $data);
	}
}
