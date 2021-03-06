<?php
class Admin_acc_mng_model extends CI_Model {
    public function add_admin_account ($params) {
        $user_name=$params['username'];
        $query= $this->db->get_where('users',array('username'=>$user_name));
        if($query->num_rows()>0) {
            $response['status'] = 'error';
            $response['msg'] = 'User already exist !';
        }
        else {
            $sql = $this->db->insert('users', $params);
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