<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'libraries/REST_Controller.php');

class Admin extends REST_Controller {

    public function index_post () {

        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: POST");
        $author_id=$this->post('author_id');
        $language=$this->post('language');
        $book_category=$this->post('book_category');
        $composition_category=$this->post('composition_category');
        $data = array();
        if(count($data)>0){
            $error['error'] = $data;
            $this->response($error,REST_Controller::HTTP_UNPROCESSABLE_ENTITY);
        }
        else{
            $headers = $this->input->request_headers();
            if (!isset($headers['Authorization']) || empty($headers['Authorization'])) {
                $this->response(array('error' => 'Unauthorized Access'), REST_Controller::HTTP_UNAUTHORIZED);
            }
            else {
                $params = $this->post();
                $this->load->database();
<<<<<<< HEAD
                $this->load->model('admin_mng/Admin_model');
=======
                $this->load->model('admin/Admin_model');
>>>>>>> 2d2229a3184a632108c46a3b4646ece66fa7c066
                $response = $this->Admin_model->add_new_category_language($params,$headers['Authorization']);
                if($response['status']=='success') {
                    $this->response($response,REST_Controller::HTTP_OK);
                }
                else {
                    $this->response($response,REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
                }
            }
        }
    }

    public function index_put ($id=0) {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: PUT");
        $status=$this->put('status');
        $data = array();
        if($status===NULL) {
            $data[] = "Name not provided";
        }
        if($status=="") {
            $data[] = "Name can not be blank";
        }
        if($id==0) {
            $response = array('error'=>'Invalid Method');
            $this->response($response,REST_Controller::HTTP_METHOD_NOT_ALLOWED);
        }

        if(count($data)>0){
            $error['error'] = $data;
            $this->response($error,REST_Controller::HTTP_UNPROCESSABLE_ENTITY);
        }
        else{
            $headers = $this->input->request_headers();
            if(!isset($headers['Authorization']) || empty($headers['Authorization'])) {
                $this->response(array('error'=>'Unauthorized Access'),REST_Controller::HTTP_UNAUTHORIZED);
            }
            else {
                $params = $this->put();
                $this->load->database();
<<<<<<< HEAD
                $this->load->model('admin_mng/Admin_model');
=======
                $this->load->model('admin/Admin_model');
>>>>>>> 2d2229a3184a632108c46a3b4646ece66fa7c066
                $response = $this->Admin_model->ebook_approvel($headers['Authorization'],$params,$id);
                if($response['status']=='success') {
                    $this->response($response,REST_Controller::HTTP_OK);
                }
                else {
                    $this->response($response,REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
                }

<<<<<<< HEAD
                $this->load->model('admin_mng/Admin_model');
=======
                $this->load->model('admin/Admin_model');
>>>>>>> 2d2229a3184a632108c46a3b4646ece66fa7c066
                $response = $this->Admin_model->composition_approvel($headers['Authorization'],$params,$id);
                if($response['status']=='success') {
                    $this->response($response,REST_Controller::HTTP_OK);
                }
                else {
                    $this->response($response,REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
                }
            }
        }

    }

    public function  index_delete ($id=0) {

        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: DELETE");
        $headers = $this->input->request_headers();
        if (!isset($headers['Authorization']) || empty($headers['Authorization'])) {
            $this->response(array('error' => 'No authorization header supplied'), REST_Controller::HTTP_UNAUTHORIZED);
        }
        else {
            $this->load->database();
<<<<<<< HEAD
            $this->load->model('admin_mng/Admin_model');
=======
            $this->load->model('admin/Admin_model');
>>>>>>> 2d2229a3184a632108c46a3b4646ece66fa7c066
            if ($id != 0 && $id > -1) {
                $response = $this->Admin_model->delete_event($headers['Authorization'], $id);
            }

            if ($response['status'] == 'success') {
                $this->response($response, REST_Controller::HTTP_OK);
            } else {
                if ($response['msg'] == 'Server Error') {
                    $response = array('errors' => array($response['msg']));
                    $this->response($response, REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
                } else {
                    $this->response($response, REST_Controller::HTTP_UNAUTHORIZED);
                }
            }
            $this->db->close();
        }
//        $this->response("Hello",REST_Controller::HTTP_OK);
    }

}
?>