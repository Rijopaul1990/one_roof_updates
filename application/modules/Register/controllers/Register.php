<?php
class Register extends My_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Register_m');
    }

    function createAdmin(){

        if($_SERVER['REQUEST_METHOD'] != 'POST'){
            $data['content_view'] = 'Register/user_register_template';
            $this->template->login_template($data);
        } else {
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'user_name' => $this->input->post('user_name'),
                'password' => $this->input->post('password'),
                'status' => $this->input->post('status')
            );
            if($this->Register_m->saveNewUser($data)){
                $alert = '<div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Success!</strong> User Created Successfully.
                            </div>';
            } else {
                $alert = '<div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Failed!</strong> User Creation Failed.
                            </div>';
            }
            $this->session->set_flashdata('user_creation_success', $alert);
            return redirect('Register/createAdmin');
        }
    }

}
?>