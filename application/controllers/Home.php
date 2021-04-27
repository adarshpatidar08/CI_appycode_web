<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Home extends CI_Controller{
    public function _construct(){
    parent::__construct();
    $this->load->helper("url");
}

    public function index(){
        $data['view_page'] = 'home/home_page';
        $this->load->view('template/template',$data);
    }
 
    public function about(){
        $data['view_page'] = 'home/error_404';
        $this->load->view('template/template',$data);
    }
}