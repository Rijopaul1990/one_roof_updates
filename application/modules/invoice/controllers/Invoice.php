<?php 
class Invoice extends My_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Invoice_M');
       
    }

    function index(){
        $data['orders'] = $this->Invoice_M->getOrder();
        $data['title'] = "Invoice";
        $data['content_view'] = 'invoice/invoice';
        $this->template->main_template($data);
    }
}