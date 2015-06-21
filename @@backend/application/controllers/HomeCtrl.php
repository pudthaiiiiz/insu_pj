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
  
  
  // Sildes
  
  public function slide(){
    $pathAsset = assets();
    $data = array('title' => 'insurancebroker360',
                  'assets' => $pathAsset      
                );
    $this->parser->parse('slide/temp_main', $data);
   
  }
  
  
  
  // Contents
  
  public function contentAll($id = null){
    if($id != null){
      $arr = array('cId' => $id);
      $this->db->delete('tbl_contents',$arr);
      redirect(base_url().'homectrl/contentAll');
    }else{
      $pathAsset = assets();
      $result = $this->Model_contents->getContents();
      $data = array(
                    'title' => 'insurancebroker360',
                    'assets' => $pathAsset,
                    'results' => $result
                  );
      $this->parser->parse('content/temp_contentAll', $data);
    }
   
  }
  public function content(){
    $pathAsset = assets();
    $data = array('title' => 'insurancebroker360',
                  'assets' => $pathAsset      
                );
    $this->parser->parse('content/temp_main', $data);
   
  }
  public function contentEdit($id = null){
    $pathAsset = assets();
    
      $result = $this->Model_contents->getRowContent($id);
    
    $data = array(
                  'title' => 'insurancebroker360',
                  'assets' => $pathAsset,
                  'cTitle' => $result->cTitle,
                  'cDes' => $result->cDes,
                  'cDetail' => $result->cDetail,
                  'cImage' => $result->cImage
                );
    
    $this->parser->parse('content/temp_edit', $data);
   
  }
}
