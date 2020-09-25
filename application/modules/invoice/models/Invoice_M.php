<?php
class Invoice_M extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function getOrder(){
        $query = $this->db->get('tbl_order');
        return $query->result();
    }
}