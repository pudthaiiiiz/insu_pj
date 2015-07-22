<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthenCtrl extends CI_Controller {

  public function __construct() {
    parent::__construct();
    // $this->load->model('Model_content');
  }

  public function index() {
    $pathAsset = assets();
        $data = array(
            'title' => 'insurancebroker360',
            'baseUrl' => base_url(),
            'assets' => $pathAsset
        );
    // }
    $this->parser->parse('login', $data);
  }

  public function member() {
        if($this->session->userdata('isSesLogin') == true){
            $pathAsset = assets();
            $data = array(
                'title' => 'insurancebroker360',
                'baseUrl' => base_url(),
                'assets' => $pathAsset,
                // 'contentTitle' => $result->cTitle,
                // 'contentImage' => $result->cImage,
                // 'contentDetail' => $result->cDetail,
                // 'contentCreateAt' => $result->cCreateAt
            );
    
            $this->parser->parse('member', $data);
        }else{
            redirect(base_url().'login');
        }
  }

}
