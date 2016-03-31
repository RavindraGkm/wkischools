<?php
class Subject_mng_model extends CI_Model {

    public function add_new_subject ($params) {
        $subject_name=$params['name'];
        $query= $this->db->get_where('subjects',array('name'=>$subject_name));
        if($query->num_rows()>0) {
            $response['status'] = 'error';
            $response['msg'] = 'Subject already exist !';
        }
        else {
            $sql = $this->db->insert('subjects', $params);
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