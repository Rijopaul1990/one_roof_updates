<?php
class Template extends My_Controller{
    function __construct(){
        parent::__construct();
    }

    function login_template($data = NULL){
        $this->load->view('Template/log_reg_template_v.php', $data);
    }

    function main_template($data = NULL){
        $this->load->view('Template/main_template.php', $data);
    }

}
?>