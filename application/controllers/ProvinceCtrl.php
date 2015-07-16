<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ProvinceCtrl extends CI_Controller {

  var $timeStamp;
  var $dateTime;
  var $cusToker;

  public function __construct() {
    parent::__construct();
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
  public function getAmphoe($where=''){
    $resp['status'] = 'error';
    $resp['data'] = null;
    $isData = $this->Model_province->getAmphoe($where);
      if($isData != 0 ){
        $resp['status'] = 'success';
        $resp['data'] = $isData;
      }
    $result = json_encode($resp);
    echo $result;
  }
  public function getDistrict($amphurId='', $provicneId=''){
    $resp['status'] = 'error';
    $resp['data'] = null;
    $isData = $this->Model_province->getDistrict($amphurId, $provicneId);
      if($isData != 0 ){
        $resp['status'] = 'success';
        $resp['data'] = $isData;
      }
    $result = json_encode($resp);
    echo $result;
  }
  public function getZipcode($where=''){
    $resp['status'] = 'error';
    $resp['data'] = null;
    $isData = $this->Model_province->getZipcode($where);
      if($isData != 0 ){
        $resp['status'] = 'success';
        $resp['data'] = $isData;
      }
    $result = json_encode($resp);
    echo $result;
  }
}
