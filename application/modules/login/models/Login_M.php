<?php
class Login_M extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function checkLogin($username, $password){
        $this->db->select('*')
                 ->from('admin');
                //  ->where('user_name', $username)
                //  ->where('password', $password);
        $query = $this->db->get();
        return $query->result();
    }
} 
?>