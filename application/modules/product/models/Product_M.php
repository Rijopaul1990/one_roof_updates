<?php
class Product_M extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function saveCategory($data = NULL){
        $this->db->insert('category', $data);
        return true;
    }
    
    function getAllCategory(){
       $this->db->select('*')
                ->from('category');
       $query = $this->db->get();
       return $query->result();
    }

    function saveSubCategory($data = NULL){
        $this->db->insert('sub_category', $data);
        return true;
    }

    function categoryJson($cat_id){
        $this->db->select('*')
                 ->from('sub_category')
                 ->where('cat_id', $cat_id);
        $query = $this->db->get();
        return $query->result();
    }
    
    function getAllProducts(){
        $sql = "SELECT p.product_name, p.price, p.quantity, c.cat_name, s.sub_cat_name FROM `product` p INNER JOIN category c ON c.cat_id=p.cat_id 
                INNER JOIN sub_category s ON s.sub_cat_id=p.sub_cat_id";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    function saveProduct($data){
        //print_r($data); exit;
        $this->db->insert('product', $data);
        //print_r($this->db->last_query()); exit;
        return true;
    }
}
?>