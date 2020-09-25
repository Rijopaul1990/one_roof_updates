<?php
class Home extends My_Controller{
    function __construct(){
        parent::__construct();
        $this->load->module([
            'Login',
            'Register'
        ]);
    }
    function index(){
        $this->login->login();
    }

    function createUser(){
        $this->register->userRegistrationTemView();
    }
}
?>