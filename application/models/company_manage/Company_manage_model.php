<?php
class Company_manage_model extends CI_Model {

    public function add_new_company ($params) {
        $company_name=$params['name'];
        $query= $this->db->get_where('company',array('name'=>$company_name));
        if($query->num_rows()>0) {
            $response['status'] = 'error';
            $response['msg'] = 'Company already exist !';
        }
        else {
            $sql = $this->db->insert('company', $params);
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

    public function get_company_list() {
        $query = $this->db->get('company');
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