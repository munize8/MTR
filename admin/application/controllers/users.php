<?php

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        $script = notify($this->session->flashdata('notification_flag'),$this->session->flashdata('notification_text'), $this->session->flashdata('notification_style'));
        $data['notification'] = $script;
        
        $this->load->view('common/header',$data);
        
        $this->load->view('common/navbar');
        $this->load->view('common/left_sidebar');
    }

    public function index() {
        if ($this->session->userdata('logged_in_flag') == '') {
            header("Location:" . base_url("index.php/login"));
        }
        $userdata = $this->session->userdata('logged_in_userdata');
        $this->load->model(array('users_model','categories_model'));
        $data['users'] = $this->users_model->get_all();
        $data['all_categories'] = $this->categories_model->get_all();
        $this->load->view('users',$data);
        $this->load->view('common/footer');
    }
    
    public function add()
    {
        $this->load->model('users_model');
        $this->session->set_flashdata('notification_flag',true); //     --for notification mandatory--
        
        if($this->users_model->add())
        {
            $this->session->set_flashdata('notification_text','Added successfully.');
            $this->session->set_flashdata('notification_style','success');
        }else{
            $this->session->set_flashdata('notification_text','Please try again');
            $this->session->set_flashdata('notification_style','error');
        }
        header("Location:". base_url("index.php/users"));
    }
    
    public function save()
    {
        $this->load->model('users_model');
        
        $this->session->set_flashdata('notification_flag',true); //     --for notification mandatory--
        
        if($this->users_model->save())
        {
            $this->session->set_flashdata('notification_text','Updated successfully.');
            $this->session->set_flashdata('notification_style','success');
        }else{
            $this->session->set_flashdata('notification_text','Please try again');
            $this->session->set_flashdata('notification_style','error');
        }
        header("Location:". base_url("index.php/users"));
    }

}

?>
