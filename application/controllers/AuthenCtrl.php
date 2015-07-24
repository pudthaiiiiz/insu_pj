<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthenCtrl extends CI_Controller {

  public function __construct() {
    parent::__construct();
    // $this->load->model('Model_content');
  }

  public function index() {
    if($this->session->userdata('isSesLogin') == true){
            redirect(base_url().'member');
        }
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
  public function uploads(){
        if($this->session->userdata('isSesLogin') == true AND $this->input->post('sent') != null){

            $pathAsset = assets();
            $new_name = time().'.jpg';
            $config['upload_path'] = './uploads/attachment/';
            $config['new_image']='./uploads/attachment/'.$new_name.'.jpg';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name'] = $new_name;

            $this->load->library('upload');
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload("file")){
                 
                $data = array(
                    'title' => 'insurancebroker360',
                    'baseUrl' => base_url(),
                    'assets' => $pathAsset,
                    'error' => 'Error'
                   
                );
    
                $this->parser->parse('member', $data);
       
            }else{

                $data = array('atcFile' => $new_name,
                              'userToken' => $this->session->userdata('sesData')->cusToken,
                              'atcCreateAt' => date("Y-m-d H:i:s")
                              );
                $query = $this->db->insert('tbl_attachment',$data);
                if($query){

                    $data = array(
                        'title' => 'insurancebroker360',
                        'baseUrl' => base_url(),
                        'assets' => $pathAsset,
                        'success' => 'success'
                       
                    );
        
                    $this->parser->parse('member', $data);
                }
            }

        }else{
            redirect(base_url().'login');
        }
  }
  public function logout(){
      
        $this->session->sess_destroy();
        $array_items = array('sesToken' => '', 'sesCusId' => '', 'sesData' => '' ,'isSesLogin' => '');
        $this->session->unset_userdata($array_items);
        redirect(base_url().'member');

    }

}
