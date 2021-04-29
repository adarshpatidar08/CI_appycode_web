<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function _construct()
    {
        parent::__construct();

        $this->load->library('form_validation');

        $this->load->model('Form_Model');
    }

    public function index()
    {
        $data['view_page'] = 'home/home_page';
        $this->load->view('template/template', $data);
    }

    public function registration_form()
    {
        $this->form_validation->set_rules("username", "User Name", "required | alpha | min_length");
        $this->form_validation->set_rules("email", "Email", "required | valid_email");

        if ($this->form_validation->run() == FALSE) {
            $this->load->model("Form_Model");
            $data =  array(
                "user_name"             => $this->input->post("username"),
                "user_email"             => $this->input->post("email"),
                "user_message"      => $this->input->post("message")
            );
            $result = $this->Form_Model->insert_data($data);

            if ($result) {
                $this->session->set_flashdata('Congrats', 'you are registerd successfully');
            } else {
                $this->session->set_flashdata('Error', 'your enter data not correct');
            }
            redirect(base_url(), 'refresh');
        }
        $data['view_page'] = 'home/home_page';
        $this->load->view('template/template', $data);
    }
}
