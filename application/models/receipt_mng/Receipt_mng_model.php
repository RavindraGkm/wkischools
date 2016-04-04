<?php
class Receipt_mng_model extends CI_Model {

    public function add_new_receipt_book ($params) {
        $start_serial=$params['start_serial'];
        $query= $this->db->get_where('receipt_book',array('start_serial'=>$start_serial));
        if($query->num_rows()>0) {
            $response['status'] = 'error';
            $response['msg'] = 'Receipt Serial number already exist !';
        }
        else {
            $sql = $this->db->insert('receipt_book', $params);
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