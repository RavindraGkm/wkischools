<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'libraries/REST_Controller.php');

class Fee_head_manage extends REST_Controller {
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
            $this->load->model('fee_head_manage/fee_head_manage_model');
            $response = $this->fee_head_manage_model->add_new_fee_head($params);
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
        $this->load->model('company_manage/Company_manage_model');
        $response = $this->Company_manage_model->get_company_list();
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