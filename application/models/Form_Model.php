<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    public function insert_data($data){
        $this->db->insert("user_data", $data);
    }
}

