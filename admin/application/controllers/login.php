<?php
class Login extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->view('common/header');
    }
    public function index()
    {
        if($this->session->userdata('logged_in_flag') != ''){
            header("Location:". base_url("index.php/dashboard"));
        }
        
        if($this->input->post())
        {
            $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check');
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('login');
            }
            else
            {

                header("Location:". base_url("index.php/dashboard"));
            }
            
        }else
            $this->load->view('login');
        $this->load->view('common/footer');
    }
    
    public function check($password,$username = NULL)
    {
        if($username == NULL){
            $username = $this->input->post('username');
        }
        $password = md5($password);
        $credentials = $this->db->select('apu.firstname,apu.lastname,apu.email,apu.password')->where(array('apu.email'=>$username,'apu.password'=>$password,'apu.is_admin'=>1))->limit(1)->get('ap_users as apu');
        if($credentials->num_rows() > 0){
            $userdata = $credentials->result_array();
            $this->session->set_userdata('logged_in_flag',TRUE);
            $this->session->set_userdata('logged_in_userdata',array('id'=>$userdata[0]['id'],'firstname'=>$userdata[0]['firstname'],'lastname'=>$userdata[0]['lastname'],'emailid'=>$userdata[0]['email'],'password'=>$userdata[0]['password']));
            
            $this->session->set_flashdata('notification_flag',true); //     --for notification mandatory--
            $this->session->set_flashdata('notification_text','You\'re logged in successfully.');
            $this->session->set_flashdata('notification_style','success');
            return true;
        }
        else{
            $this->form_validation->set_message('check', 'Invalid Credentails');
            return false;
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        header("Location:". base_url("index.php/login"));
    }
}
?>
