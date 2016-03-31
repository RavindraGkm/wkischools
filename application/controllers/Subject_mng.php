<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'libraries/REST_Controller.php');

class Subject_mng extends REST_Controller {
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
            $this->load->model('subject_mng/Subject_mng_model');
            $response = $this->Subject_mng_model->add_new_subject($params);
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
}