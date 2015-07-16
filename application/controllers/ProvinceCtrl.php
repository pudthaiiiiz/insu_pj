<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ProvinceCtrl extends CI_Controller {

  var $timeStamp;
  var $dateTime;
  var $cusToker;

  public function __construct() {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('Model_province');
  }

  public function getProvince(){
    $resp['status'] = 'error';
    $resp['data'] = null;
    $isData = $this->Model_province->getProvince();
    if($isData != 0 ){
      $resp['status'] = 'success';
      $resp['data'] = $isData;
    }
    $result = json_encode($resp);
    echo $result;
  }
  public function getAmphoe(){
    $resp['status'] = 'error';
    $resp['data'] = null;
    $isData = 0;
    $_POST = json_decode(file_get_contents("php://input"), true);
    $this->form_validation->set_rules('inputProvinceId', 'provinceId', 'required');
    if ( $this->form_validation->run() ) {
      $inputProvinceId = $this->input->post('inputProvinceId');
      $isData = $this->Model_province->getAmphoe($inputProvinceId);
    }
    if($isData != 0 ){
      $resp['status'] = 'success';
      $resp['data'] = $isData;
    }
    $result = json_encode($resp);
    echo $result;
  }
  public function getDistrict(){
    $resp['status'] = 'error';
    $resp['data'] = null;
    $isData = 0;
    $_POST = json_decode(file_get_contents("php://input"), true);
    $this->form_validation->set_rules('inputProvinceId', 'provinceId', 'required');
    $this->form_validation->set_rules('inputAmphurId', 'amphurId', 'required');
    if ( $this->form_validation->run() ) {
      $inputProvinceId = $this->input->post('inputProvinceId');
      $inputAmphurId = $this->input->post('inputAmphurId');
      $isData = $this->Model_province->getDistrict($inputAmphurId, $inputProvinceId);
    }
    if($isData != 0 ){
      $resp['status'] = 'success';
      $resp['data'] = $isData;
    }
    $result = json_encode($resp);
    echo $result;
  }
  public function getZipcode(){
    $resp['status'] = 'error';
    $resp['data'] = null;
    $isData = 0;
    $_POST = json_decode(file_get_contents("php://input"), true);
    $this->form_validation->set_rules('inputAmphurId', 'amphurId', 'required');
    if ( $this->form_validation->run() ) {
      $inputAmphurId = $this->input->post('inputAmphurId');
      $isData = $this->Model_province->getZipcode($inputAmphurId);
    }
    if($isData != 0 ){
      $resp['status'] = 'success';
      $resp['data'] = $isData;
    }
    $result = json_encode($resp);
    echo $result;
  }
}
