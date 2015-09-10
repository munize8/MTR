<?php
class Dashboard extends CI_Controller
{
    public function __construct() {
        
        parent::__construct();
//                --code to generate notification--
            $script = '<script>$(document).ready(function(){';
            if($this->session->flashdata('notification_flag')){
                $script .= 'noty({timeout:"3000" ,layout: "topCenter",type: "'.$this->session->flashdata('notification_style').'",text: "'.$this->session->flashdata('notification_text').'"});';
            }
            $script .= '});</script>';
            $data['notification'] = $script;
//                    --ends--
        $this->load->view('common/header',$data);
        
        $this->load->view('common/navbar');
        $this->load->view('common/left_sidebar');
    }
    public function index()
    {
        if($this->session->userdata('logged_in_flag') == ''){
            header("Location:". base_url("index.php/login"));
        }
        $this->load->model(array('users_model','categories_model'));
        $data['total_users'] = $this->users_model->get_user_count();
//        $data['total_categories'] = $this->categories_model->get_categories_count();
//        $data['total_sms_recievers'] = $this->users_model->get_user_count('mobile');
//        $data['total_email_recievers'] = $this->users_model->get_user_count('email');
        $this->load->view('dashboard',$data);
        $this->load->view('common/footer');
    }
}
?>
