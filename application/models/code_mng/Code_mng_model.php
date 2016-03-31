<?php
class Code_mng_model extends CI_Model {

    public function create_new_code ($params) {
        $code_name=$params['code_name'];
        $query= $this->db->get_where('codes',array('code_name'=>$code_name));
        if($query->num_rows()>0) {
            $response['status'] = 'error';
            $response['msg'] = 'Code already exist !';
        }
        else {
            $sql = $this->db->insert('codes', $params);
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

    public function get_code_category_list() {

        $query = $this->db->get('code_categories');
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