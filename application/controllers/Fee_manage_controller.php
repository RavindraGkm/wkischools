<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fee_manage_controller extends CI_Controller
{
    public function index() {
        $data['active_tab'] = $_GET['page'];
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('manage_fee/index',$data);
    }
}
?>