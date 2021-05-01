<?php
defined('BASEPATH') or exit('No direct script access allowed');

$this->load->view('template/header');
$this->load->view($view_page);
$this->load->view('template/footer');

?>