<?php
class Class_mng_model extends CI_Model {

    public function add_new_class ($params) {
        $class_name=$params['name'];
        $query= $this->db->get_where('classes',array('name'=>$class_name));
        if($query->num_rows()>0) {
            $response['status'] = 'error';
            $response['msg'] = 'Class already exist !';
        }
        else {
            $sql = $this->db->insert('classes', $params);
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