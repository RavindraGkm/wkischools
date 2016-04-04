<?php
class Fee_head_manage_model extends CI_Model {

    public function add_new_fee_head ($params) {
        $fee_head_name=$params['name'];
        $query= $this->db->get_where('fee_head',array('name'=>$fee_head_name));
        if($query->num_rows()>0) {
            $response['status'] = 'error';
            $response['msg'] = 'Fee Head name already exist !';
        }
        else {
            $sql = $this->db->insert('fee_head', $params);
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