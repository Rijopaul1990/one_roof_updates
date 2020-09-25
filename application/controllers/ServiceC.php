<?php 
    defined("BASEPATH") OR exit('No direct script acces allowed');
    require_once APPPATH . 'libraries/REST_Controller.php';
    use Restserver\Libraries\REST_Controller;
    class ServiceC extends REST_Controller{
        public function checkapi_get(){
            echo "jj";
        }
    }
?>