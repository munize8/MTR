<?php
class Register extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->view('common/header');
    }
    public function index()
    {
        if($this->session->userdata('logged_in_flag') != ''){
            header("Location:". base_url("index.php/login"));
        }
        
        if($this->input->post())
        {
            $this->form_validation->set_rules('firstname', 'First Name', 'required');
            $this->form_validation->set_rules('lastname', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[ap_users.email]');
            
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('register');
            }
            else
            {
                if($this->store_userdetails())
                    header("Location:". base_url("index.php/thankyou"));
                else
                    header("Location:". base_url("index.php/register"));
            }
            
        }else
            $this->load->view('register');
        $this->load->view('common/footer');
    }
    
    public function store_userdetails()
    {
        
        $set = array(
                    'firstname'=>$this->input->post('firstname'),
                    'lastname'=>$this->input->post('lastname'),
                    'email'=>$this->input->post('email'),
                    'mobile'=>$this->input->post('mobile'),
                    'address'=>$this->input->post('address'),
                    'city'=>$this->input->post('city'),
                    'state'=>$this->input->post('state'),
                    'country'=>$this->input->post('country'),
                    'zipcode'=>$this->input->post('zipcode'),
                    'remark'=>$this->input->post('remark')
                );
        if($this->db->insert('ap_users',$set)){
            return true;
        }
        else{
            $this->session->set_flashdata('register_error','<div class="error">Please Try Again.</div>');
            return false;
        }
    }
}
?>
