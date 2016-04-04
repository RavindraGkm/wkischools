<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Company_manage_controller extends CI_Controller {

    public function index() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('manage_company/index');
    }
}
?>