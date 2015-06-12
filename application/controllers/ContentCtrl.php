<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ContentCtrl extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('Model_content');
  }

  public function index() {
    return;
  }

  public function detail($id) {
    $pathAsset = assets();
    $data = array(
        'title' => 'insurancebroker360',
        'baseUrl' => base_url(),
        'assets' => $pathAsset,
        'contentTitle' => 'null',
        'contentDetail' => 'null'
    );
    $result = $this->Model_content->getContent($id);

    if ($result) {
      $data = array(
          'title' => 'insurancebroker360',
          'baseUrl' => base_url(),
          'assets' => $pathAsset,
          'contentTitle' => $result->cTitle,
          'contentImage' => $result->cImage,
          'contentDetail' => $result->cDetail
      );
    }
    $this->parser->parse('content', $data);
  }

}
