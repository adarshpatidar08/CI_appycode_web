<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactFormModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function UserDataInsert($data){

        $this->db->insert("user_data", $data);
        return true;
    }
}

