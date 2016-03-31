<?php
class School_mng_model extends CI_Model {

    public function add_new_school ($params) {
        $school_name=$params['name'];
        $query= $this->db->get_where('schools',array('name'=>$school_name));
        if($query->num_rows()>0) {
            $response['status'] = 'error';
            $response['msg'] = 'School already exist !';
        }
        else {
            $sql = $this->db->insert('schools', $params);
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
}
?>