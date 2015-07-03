<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MenuCtrl extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Model_content');
    $this->load->model('Model_menu');
  }

  public function index() {
    return;
  }

  public function detail($id) {
    $pathAsset = assets();
    $result = $this->Model_menu->getMenu($id);
    if($result === 0){
      redirect(base_url());
    }else{
        $data = array(
            'title' => 'insurancebroker360',
            'baseUrl' => base_url(),
            'assets' => $pathAsset,
            'contentDetail' => $result->dm_detail,
            'contentName' => $result->dm_menu,
            'contentDate' => $result->dm_editorAt
            
        );
    }
    $this->parser->parse('menuDetail', $data);
  }
  
}
