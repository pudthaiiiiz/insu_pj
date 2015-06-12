<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeCtrl extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('Model_customer');
    $this->load->model('Model_contents');
  }
	public function index()
	{
    $pathAsset = assets();
    $data = array(
                  'title' => 'insurancebroker360',
                  'assets' => $pathAsset
                );
    $this->parser->parse('temp_login', $data);
	}
  public function main(){
    $pathAsset = assets();
   
    $result = $this->Model_customer->getCustomer();
    
    $nums = array('numMemberToDay' => $this->Model_customer->numCustomerNow(),
                  'numMemberAll' => $this->Model_customer->numCustomer(),
                  'numContentToDay' => $this->Model_contents->numContentNew(),
                  'numContentAll' => $this->Model_contents->numContents()
                  );
    
    
    $data = array(
                  'title' => 'insurancebroker360',
                  'assets' => $pathAsset,
                  'nums' => array($nums),
                  'results' => $result,
                  
                );
    $this->parser->parse('temp_main', $data);
   
  }
  public function test(){
    $MemberToDay = $this->Model_customer->numCustomerNow();
    
    $MemberToDay;
  }
  public function member(){
    $pathAsset = assets();
    $result = $this->Model_customer->getCustomer();
    $data = array(
                  'title' => 'insurancebroker360',
                  'assets' => $pathAsset,
                  'results' => $result
                );
//    print_r($data);
    $this->parser->parse('member/temp_main', $data);
   
  }
  public function content(){
    $pathAsset = assets();
    
    $data = array(
                  'title' => 'insurancebroker360',
                  'assets' => $pathAsset,
                  
                );
//    print_r($data);
    $this->parser->parse('content/temp_main', $data);
   
  }
}
