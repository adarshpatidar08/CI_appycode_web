<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function _construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('ContactFormModel');
    }

    public function index()
    {
        $data['view_page'] = 'home/home_page';
        $this->load->view('template/template', $data);
    }

    public function UserContactForm()
    {
        $this->form_validation->set_rules("username", "User Name", "required|min_length[3]|max_length[20]");
        $this->form_validation->set_rules("email", "Email", "required|valid_email");
        $this->form_validation->set_rules("message", "Message", "required|max_length[250]");

        if ($this->form_validation->run()) {
            $this->load->model("ContactFormModel");
            $data =  array(
                "user_name" => $this->input->post("username"),
                "user_email" => $this->input->post("email"),
                "user_message" => $this->input->post("message"),
                "created_at" => date('Y-m-d H:i:s')
            );
            $result = $this->ContactFormModel->UserDataInsert($data);

            if ($result) {
                $this->session->set_flashdata('Success', 'you are registerd successfully');
            } else {
                $this->session->set_flashdata('Error', 'your enter data not correct');
            }
            redirect(base_url());
            
        }else {
            $this->index();
        }

    }
}
