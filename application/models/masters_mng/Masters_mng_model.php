<?php
class Masters_mng_model extends CI_Model {
    public function add_new_prospectus_form ($params) {
        $prospectus_title=$params['title'];
        $query= $this->db->get_where('prospectus',array('title'=>$prospectus_title));
        if($query->num_rows()>0) {
            $response['status'] = 'error';
            $response['msg'] = 'Prospectus already exist !';
        }
        else {
            $sql = $this->db->insert('prospectus', $params);
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

    public function add_new_provisional_fee_info ($params) {
        $provisional_title=$params['title'];
        $query= $this->db->get_where('provisional_fee',array('title'=>$provisional_title));
        if($query->num_rows()>0) {
            $response['status'] = 'error';
            $response['msg'] = 'Provisional Fee info already exist !';
        }
        else {
            $sql = $this->db->insert('provisional_fee', $params);
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

    public function add_new_media_info ($params) {
        $media_name=$params['name'];
        $query= $this->db->get_where('media',array('name'=>$media_name));
        if($query->num_rows()>0) {
            $response['status'] = 'error';
            $response['msg'] = 'Media info already exist !';
        }
        else {
            $sql = $this->db->insert('media', $params);
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