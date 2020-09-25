<?php
class Register_m extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function saveNewUser($data = null){
        $result = $this->db->insert('admin', $data);
        return $result;
    }
}
?>