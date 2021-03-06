<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'libraries/REST_Controller.php');

class State_mng extends REST_Controller {
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
            $this->load->model('csc_mng/CSC_mng_model');
            $response = $this->CSC_mng_model->create_new_state($params);
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
        $this->load->model('csc_mng/CSC_mng_model');
        $response = $this->CSC_mng_model->get_state_list();
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