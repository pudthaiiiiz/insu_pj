<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeCtrl extends CI_Controller {
  function __construct(){
    parent::__construct();


    $this->load->model('Model_customer');
    $this->load->model('Model_contents');
    $this->load->model('Model_slide');
    $this->load->model('Model_menu');

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
    if($this->session->userdata('logged_in') != true){
      redirect(base_url().'HomeCtrl');
    }
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
    if($this->session->userdata('logged_in') != true){
      redirect(base_url().'HomeCtrl');
    }
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
  
  // popup


  public function popup(){
    if($this->session->userdata('logged_in') != true){
      redirect(base_url().'HomeCtrl');
    }
    $pathAsset = assets();
    $data = array('title' => 'insurancebroker360',
                  'assets' => $pathAsset      
                );
    $this->parser->parse('popup/temp_main', $data);
   
  }
  
  // Sildes
  
  public function slide(){
    if($this->session->userdata('logged_in') != true){
      redirect(base_url().'HomeCtrl');
    }
    $pathAsset = assets();
    $data = array('title' => 'insurancebroker360',
                  'assets' => $pathAsset      
                );
    $this->parser->parse('slide/temp_main', $data);
   
  }

  public function viewProfile($token = null){

    if($this->session->userdata('logged_in') != true){
      redirect(base_url().'HomeCtrl');
    }
    if ($token == null){
      redirect(base_url()."/HomeCtrl");
    }else{
      $pathAsset = assets();
      $getProfile = $this->Model_customer->getProfile($token);
      $getDownline = $this->Model_customer->getDownline($getProfile->cusFullname);
      $countDownline = $this->Model_customer->countDownline($getProfile->cusFullname);

      if($getDownline != 0){
        $downline = $getDownline;
      }else{
        $downline = 0;
      }
        if($getProfile->oldRegister === 0){
        $reg = "ต่อเจ้าเดิม";
      }else{
        $reg = "เปลี่ยนเจ้า";
      }
      if($getProfile->cusInvite != NULL){
        $invite = $getProfile->cusInvite;
      }else{
        $invite = "บริษัท";
      }
      $data = array('title' => 'insurancebroker360',
                     'assets' => $pathAsset , 
                    'pFullname' => $getProfile->cusFullname,
                    'pAddress' => $getProfile->cusAdrs,
                    'pProvince' => $getProfile->PROVINCE_NAME,
                    'pAmphur' => $getProfile->AMPHUR_NAME,
                    'pDistrict' => $getProfile->DISTRICT_NAME,
                    'pZippost' => $getProfile->cusZipcode,
                    'cusIdCard' => $getProfile->cusIdCard,
                    'cusUsername' => $getProfile->cusUsername,
                    'cusEmail' => $getProfile->cusEmail,
                    'oldCompany' => $getProfile->oldCompany,
                    'oldInsurance' => $getProfile->oldInsurance,
                    'oldRegister' => $reg,
                    'thisToken' => $token,
                    'pPhone' => $getProfile->cusPhone,
                    'pDate' => $getProfile->cusCreateAt,
                    'pInvite' => $invite,
                    'pDownline' => $downline,
                    'countDownline' => $countDownline
                  );
      $this->parser->parse('member/temp_profile', $data);
    }
   
  }

   public function getInvite($token = null){
    if($this->session->userdata('logged_in') != true){
      redirect(base_url().'HomeCtrl');
    }
    if ($token == null){
      redirect(base_url()."/HomeCtrl");
    }else{
      $pathAsset = assets();
      $getProfile = $this->Model_customer->getProfile($token);
      $userInvite = $this->Model_customer->userInvite();
      $countDownline = $this->Model_customer->countDownline($getProfile->cusFullname);

    

      if($getProfile->cusInvite != NULL){
        redirect(base_url()."HomeCtrl/viewProfile");
      }else{
        $invite = "ไม่มี";
      }

      if($getProfile->oldRegister === 0){
        $reg = "ต่อเจ้าเดิม";
      }else{
        $reg = "เปลี่ยนเจ้า";
      }
      $data = array('title' => 'insurancebroker360',
                    'assets' => $pathAsset , 
                    'pFullname' => $getProfile->cusFullname,
                    'pAddress' => $getProfile->cusAdrs,
                    'pProvince' => $getProfile->PROVINCE_NAME,
                    'pAmphur' => $getProfile->AMPHUR_NAME,
                    'pDistrict' => $getProfile->DISTRICT_NAME,
                    'pZippost' => $getProfile->cusZipcode,
                    'cusIdCard' => $getProfile->cusIdCard,
                    'cusUsername' => $getProfile->cusUsername,
                    'cusEmail' => $getProfile->cusEmail,
                    'oldCompany' => $getProfile->oldCompany,
                    'oldInsurance' => $getProfile->oldInsurance,
                    'oldRegister' => $reg,
                    'thisToken' => $token,

                    'pPhone' => $getProfile->cusPhone,
                    'pDate' => $getProfile->cusCreateAt,
                    'pInvite' => $invite,
                    
                    'userInvite' => $userInvite,
                    'countDownline' => $countDownline
                  );
      $this->parser->parse('member/temp_getinvite', $data);
    }
   
  }

  public function slideAll(){
    if($this->session->userdata('logged_in') != true){
      redirect(base_url().'HomeCtrl');
    }
    $pathAsset = assets();
    $result = $this->Model_slide->getSlide();
    $data = array('title' => 'insurancebroker360',
                  'assets' => $pathAsset,
                  'results' => $result
                );
    $this->parser->parse('slide/temp_slideAll', $data);
   
  }
  
  // menu 
  
  public function profile(){
    if($this->session->userdata('logged_in') != true){
      redirect(base_url().'HomeCtrl');
    }
    $pathAsset = assets();
    $getProfile = $this->Model_menu->getMenu(1);
    $data = array('title' => 'insurancebroker360',
                  'assets' => $pathAsset ,
                  'detail' => $getProfile->dm_detail
                );
    $this->parser->parse('menuContent/profile', $data);
   
  }
  public function product(){
    if($this->session->userdata('logged_in') != true){
      redirect(base_url().'HomeCtrl');
    }
    $pathAsset = assets();
    $getProfile = $this->Model_menu->getMenu(2);
    $data = array('title' => 'insurancebroker360',
                  'assets' => $pathAsset ,
                  'detail' => $getProfile->dm_detail
                );
    $this->parser->parse('menuContent/products', $data);
   
  }
  public function service(){
    if($this->session->userdata('logged_in') != true){
      redirect(base_url().'HomeCtrl');
    }
    $pathAsset = assets();
    $getProfile = $this->Model_menu->getMenu(3);
    $data = array('title' => 'insurancebroker360',
                  'assets' => $pathAsset ,
                  'detail' => $getProfile->dm_detail
                );
    $this->parser->parse('menuContent/service', $data);
   
  }
   public function payment(){
    if($this->session->userdata('logged_in') != true){
      redirect(base_url().'HomeCtrl');
    }
    $pathAsset = assets();
    $getProfile = $this->Model_menu->getMenu(4);
    $data = array('title' => 'insurancebroker360',
                  'assets' => $pathAsset ,
                  'detail' => $getProfile->dm_detail
                );
    $this->parser->parse('menuContent/payment', $data);
   
  }
  
  public function contact(){
    if($this->session->userdata('logged_in') != true){
      redirect(base_url().'HomeCtrl');
    }
    $pathAsset = assets();
    $getProfile = $this->Model_menu->getMenu(5);
    $data = array('title' => 'insurancebroker360',
                  'assets' => $pathAsset ,
                  'detail' => $getProfile->dm_detail
                );
    $this->parser->parse('menuContent/contact', $data);
   
  }
 
  public function pagedetail(){
    if($this->session->userdata('logged_in') != true){
      redirect(base_url().'HomeCtrl');
    }
    $pathAsset = assets();
    $getProfile = $this->Model_menu->getMenu(6);
    $data = array('title' => 'insurancebroker360',
                  'assets' => $pathAsset ,
                  'detail' => $getProfile->dm_detail
                );
    $this->parser->parse('menuContent/pagedetail', $data);
   
  }
  
  // Contents
  
  public function contentAll($id = null){
    if($this->session->userdata('logged_in') != true){
      redirect(base_url().'HomeCtrl');
    }
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
    if($this->session->userdata('logged_in') != true){
      redirect(base_url().'HomeCtrl');
    }
    $pathAsset = assets();
    $data = array('title' => 'insurancebroker360',
                  'assets' => $pathAsset      
                );
    $this->parser->parse('content/temp_main', $data);
   
  }
  
  
  public function contentEdit($id = null){
    if($this->session->userdata('logged_in') != true){
      redirect(base_url().'HomeCtrl');
    }
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


  public function logout(){

    $this->session->sess_destroy();
    $array_items = array('logged_in' => '');
    $this->session->unset_userdata($array_items);
    redirect(base_url().'HomeCtrl');

  }
}
