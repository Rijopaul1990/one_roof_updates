<?php
class Dashboard extends My_Controller{
    function __construct(){
        parent::__construct();
    }

    function viewDashBoard(){
        $session = $this->session->userdata('session_data');
        $data['user_name'] = $session['user_name'];
        $data['title'] = "Dashboard";
        $data['content_view'] = 'dashboard/dashboard_temp';
        $this->template->main_template($data);
    }
}
?>