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
    
    function getAllCategory($id = NULL){
       $this->db->select('*');
       $this->db->from('category');
       if($id != null){
        $this->db->where('cat_id', $id);
       } else {
        $this->db->order_by('cat_id', 'desc');
       }
       $query = $this->db->get();
       if($id != null){
        return $query->row();
       } else {
        return $query->result();
       }  
    }

    function getAllSubCategory($id = NULL){
        if($id != NULL){
            $sql = "SELECT s.sub_cat_id, s.cat_id, c.cat_name, s.sub_cat_name, s.description FROM sub_category s INNER JOIN
                category c ON s.cat_id = c.cat_id WHERE s.sub_cat_id = $id";
            $query = $this->db->query($sql);
            return $query->row();
        } else {
            $sql = "SELECT s.sub_cat_id, s.cat_id, c.cat_name, s.sub_cat_name, s.description FROM sub_category s INNER JOIN
                category c ON s.cat_id = c.cat_id";
            $query = $this->db->query($sql);
            return $query->result();
        }
        
     }

    function saveSubCategory($data = NULL){
        $this->db->insert('sub_category', $data);
        return true;
    }

    function categoryJson($cat_id = NULL){
        $this->db->select('*')
                 ->from('sub_category')
                 ->where('cat_id', $cat_id);
        $query = $this->db->get();
        return $query->result();
    }
    
    function getAllProducts($id = NULL){
        if($id != NULL){
            $sql = "SELECT p.product_id, p.product_name, p.description, p.price, p.quantity, p.cat_id, p.sub_cat_id, c.cat_name, s.sub_cat_name FROM `product` p INNER JOIN category c ON c.cat_id=p.cat_id 
                INNER JOIN sub_category s ON s.sub_cat_id=p.sub_cat_id WHERE p.product_id = $id";
            $query = $this->db->query($sql);
            return $query->row();
        } else { 
            $sql = "SELECT p.product_id, p.product_name, p.description, p.price, p.quantity, p.cat_id, p.sub_cat_id, c.cat_name, s.sub_cat_name FROM `product` p INNER JOIN category c ON c.cat_id=p.cat_id 
                INNER JOIN sub_category s ON s.sub_cat_id=p.sub_cat_id";
            $query = $this->db->query($sql);
            return $query->result();
        }
    }
    
    function saveProduct($data){
        //print_r($data); exit;
        $this->db->insert('product', $data);
        //print_r($this->db->last_query()); exit;
        return true;
    }

    function updateCategory($data, $id){
        $this->db->where('cat_id', $id);
        $this->db->update('category', $data);
    }

    function updateSubCategory($data, $id){
        $this->db->where('sub_cat_id', $id);
        $this->db->update('sub_category', $data);
    }

    function deleteCategory($id){
        $this->db->where('cat_id', $id);
        $this->db->delete('category');
    }

    function deleteSubCategory($id){
        $this->db->where('sub_cat_id', $id);
        $this->db->delete('sub_category');
    }

    function updateProduct($products, $id){
        $this->db->where('product_id', $id);
        $this->db->update('product', $products);
    }
}
?>