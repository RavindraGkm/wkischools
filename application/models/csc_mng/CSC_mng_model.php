<?php
class CSC_mng_model extends CI_Model {

    public function create_new_country ($params) {
        $country_name=$params['name'];
        $query= $this->db->get_where('country',array('name'=>$country_name));
        if($query->num_rows()>0) {
            $response['status'] = 'error';
            $response['msg'] = 'Country already exist !';
        }
        else {
            $sql = $this->db->insert('country', $params);
            $response = array();
            if($sql) {
                $response['status'] = 'success';
                $response['msg'] = 'Successfully inserted';
            }
            else {
                $response['status'] = 'error';
            }
        }
        return $response;
    }

    public function create_new_state ($params) {
        $state_name=$params['name'];
        $query= $this->db->get_where('states',array('name'=>$state_name));
        if($query->num_rows()>0) {
            $response['status'] = 'error';
            $response['msg'] = 'State already exist !';
        }
        else {
            $sql = $this->db->insert('states', $params);
            $response = array();
            if($sql) {
                $response['status'] = 'success';
                $response['msg'] = 'Successfully inserted';
            }
            else {
                $response['status'] = 'error';
            }
        }
        return $response;
    }

    public function create_new_city ($params) {
        $city_name=$params['name'];
        $query= $this->db->get_where('cities',array('name'=>$city_name));
        if($query->num_rows()>0) {
            $response['status'] = 'error';
            $response['msg'] = 'City already exist !';
        }
        else {
            $sql = $this->db->insert('cities', $params);
            $response = array();
            if($sql) {
                $response['status'] = 'success';
                $response['msg'] = 'Successfully inserted';
            }
            else {
                $response['status'] = 'error';
            }
        }
        return $response;
    }

    public function get_country_list() {
        $query = $this->db->get('country');
        $response = array();
        if($query->num_rows()>0) {
            $response['status'] = 'success';
            $response['result'] = $query->result_array();
        }
        else {
            $response['status'] = 'error';
            $response['msg'] = 'Data not found !';
        }
        return $response;
    }

    public function get_state_list() {
        $query = $this->db->get('states');
        $response = array();
        if($query->num_rows()>0) {
            $response['status'] = 'success';
            $response['result'] = $query->result_array();
        }
        else {
            $response['status'] = 'error';
            $response['msg'] = 'Data not found !';
        }
        return $response;
    }
}
?>