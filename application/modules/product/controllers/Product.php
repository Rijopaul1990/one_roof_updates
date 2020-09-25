<?php
class Product extends My_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Product_M');
        $this->load->library('session');
    }

    function manageProduct(){
        $session = $this->session->userdata('session_data');
        $data['user_name'] = $session['user_name'];
        $data['title'] = "Manage Products";
        $data['products'] = $this->Product_M->getAllProducts();
        //print_r($data['products']); exit;
        $data['button_view'] = 'product/manage_product_buttons';
        $data['content_view'] = 'product/manage_products';
        $this->template->main_template($data);
    }

    function addCategory(){

        if($_SERVER['REQUEST_METHOD'] != 'POST'){
            $session = $this->session->userdata('session_data');
            $data['user_name'] = $session['user_name'];
            $data['title'] = "Add Category";
            $data['button_view'] = 'product/manage_product_buttons';
            $data['content_view'] = 'product/add_category';
            $this->template->main_template($data);
        } else {
            $data = array(
                'cat_name' => $this->input->post('category'),
                'description' => $this->input->post('cat_description'),
                'cat_code' => $this->GUID()
            );
            if($this->Product_M->saveCategory($data)){
                //print_r("fjjf"); exit;
                $alert = '<div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Success!</strong> Category Added
                          </div>';
                $this->session->set_flashdata('cat_success', $alert);
                return redirect('product');
            }
        }
        
    }

    function GUID(){

        if (function_exists('com_create_guid') === true){
                return trim(com_create_guid(), '{}');
        }
        
        return sprintf('%04X%04X-%04X-%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479));
    }

    function addSubCategory(){
        if($_SERVER['REQUEST_METHOD'] != 'POST'){
            $session = $this->session->userdata('session_data');
            $data['user_name'] = $session['user_name'];
            $data['title'] = "Add Subcategory";
            $data['categories'] = $this->Product_M->getAllCategory();
            $data['button_view'] = 'product/manage_product_buttons';
            $data['content_view'] = 'product/add_subcategory';
            $this->template->main_template($data);
        } else {
            $subCategory = array(
                'sub_cat_name' => $this->input->post('sub_category'),
                'description' => $this->input->post('description'),
                'cat_id' => $this->input->post('category')
            );

            if($this->Product_M->saveSubCategory($subCategory)){
                $alert = '<div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Success!</strong> Sub-category Added
                          </div>';
                $this->session->set_flashdata('cat_success', $alert);
                return redirect('product');
            }
        }
        
    }

    function addProduct(){
        
        if($_SERVER['REQUEST_METHOD'] != 'POST'){
            $session = $this->session->userdata('session_data');
            $data['user_name'] = $session['user_name'];
            $data['categories'] = $this->Product_M->getAllCategory();
            $data['title'] = "Add Product";
            $data['button_view'] = 'product/manage_product_buttons';
            $data['content_view'] = 'product/add_product';
            $this->template->main_template($data);
        } else {
            //echo "jj"; exit;
            $products = array(
                'product_name' => $this->input->post('product'),
                'cat_id' => $this->input->post('category'),
                'sub_cat_id' => $this->input->post('sub_category'),
                'brand_id' => $this->input->post('brand'),
                'quantity' => $this->input->post('quantity'),
                'unit' => $this->input->post('unit'),
                'price' => $this->input->post('price'),
                'colour' => $this->input->post('colour'),
                'description' => $this->input->post('description')
            );
            //$this->Product_M->saveProduct('$products'); exit;
            if($this->Product_M->saveProduct($products)){
                $alert = '<div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Success!</strong> Product Added
                          </div>';
                $this->session->set_flashdata('cat_success', $alert);
                return redirect('product');
            }
        }  
    }

    function getAllSubCategories(){
        $cat_id = $this->input->post('catid');
        $result = $this->Product_M->categoryJson($cat_id);
        foreach($result as $key => $value){
            echo "<option value=".$value->sub_cat_id.">". $value->sub_cat_name . "</option>";
        }
    }
}  
?>