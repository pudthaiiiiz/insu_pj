<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

  var $timeStamp;
  var $dateTime;
  var $cusToker;

  public function __construct() {
    parent::__construct();
    $this->load->model('Model_package');
    $this->timeStamp = time();
    $this->dateTime = date('Y-m-d H:i:s');
  }

 
  
  public function addTo(){
   $ar = array("Accord","Brio","City","Civic","CR-V","CR-Z","Freed","Jazz","STEPWGN SPADA","Odyssey");
   $arResult = array();
    foreach ($ar as $val) {
     $getBefore = $this->db->get_where('tbl_package_series' , array('sBrand' => 31) );
     foreach ($getBefore->result() as $value){
       
           $arResult[] = $value->sName;     
           if($value->sName == $val and $value->sYear == 2014){
             
//             echo $value->sName;
             
             
             
             $data = array(
                      'sYear' => $value->sYear.",2013"
              );

              $this->db->where('sName', $value->sName);
              $this->db->update('tbl_package_series', $data);
           }
     }
    }
     
//     $array = array('sName' => $value , 'sYear' => 2013 , 'sBrand' => 31);
//     $this->db->insert('tbl_package_series',$array);
   
   
   
   $arr = array_diff($ar, $arResult);
           foreach($arr as $value){
              $array = array('sName' => $value , 'sYear' => 2013 , 'sBrand' => 31);
              $this->db->insert('tbl_package_series',$array);
           }
  }
}
