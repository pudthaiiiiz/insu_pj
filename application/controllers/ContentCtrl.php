<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ContentCtrl extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Model_content');
  }

  public function index() {
    $pathAsset = assets();
    $data = array(
        'title' => 'insurancebroker360',
        'baseUrl' => base_url(),
        'assets' => $pathAsset
    );
    $this->parser->parse('contentlist', $data);
  }

  public function detail($id) {
    $pathAsset = assets();
    $result = $this->Model_content->getContent($id);
    if($result === 0){
      redirect(base_url());
    }else{
        $data = array(
            'title' => 'insurancebroker360',
            'baseUrl' => base_url(),
            'assets' => $pathAsset,
            'contentTitle' => $result->cTitle,
            'contentImage' => $result->cImage,
            'contentDetail' => $result->cDetail,
            'contentCreateAt' => $result->cCreateAt
        );
    }
    $this->parser->parse('content', $data);
  }

  public function getContent(){
  
    $resp['status'] = 'error';
    $resp['data'] = null;
    $isData = $this->Model_content->getContentAll();
    //$isData = $this->Model_content->getContentHome();
      if($isData != 0 ){
        $resp['status'] = 'success';
        $resp['data'] = $isData;
      }
    $result = json_encode($resp);
    echo $result;
    
    
  }

  public function getContentList(){
  
    $resp['status'] = 'error';
    $resp['data'] = null;
    $isData = $this->Model_content->getContentAll();
      if($isData != 0 ){
        $resp['status'] = 'success';
        $resp['data'] = $isData;
      }
    $result = json_encode($resp);
    echo $result;
    
    
  }
}
