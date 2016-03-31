<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'libraries/REST_Controller.php');

class Manage_admin_acc_mng extends REST_Controller {
    public function index_post () {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: POST");
        $data = array();
        if(count($data)>0){
            $error['error'] = $data;
            $this->response($error,REST_Controller::HTTP_UNPROCESSABLE_ENTITY);
        }
        else {
            $params = $this->post();
            $this->load->database();
            $this->load->model('admin_acc_mng/Admin_acc_mng_model');
            $response = $this->Admin_acc_mng_model->add_admin_account($params);
            if($response['status']=='success') {
                $this->response($response,REST_Controller::HTTP_OK);
            }
            else if($response['status']=='error') {
                $this->response($response,REST_Controller::HTTP_UNPROCESSABLE_ENTITY);
            }
            else {
                $this->response($response,REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
            }
        }

    }

    public function index_get ($id=0) {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET");
        $this->load->database();
        $this->load->model('code_mng/Code_mng_model');
        $response = $this->Code_mng_model->get_code_category_list();
        if ($response['status']=='success') {
            $this->response($response, REST_Controller::HTTP_OK);
        }
        else {
            if($response['msg']=='Server Error') {
                $response = array('errors' => array($response['msg']));
                $this->response($response, REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
            }
            else {
                $this->response($response, REST_Controller::HTTP_UNAUTHORIZED);
            }
        }
        $this->db->close();
    }
}