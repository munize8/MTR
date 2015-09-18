<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $registered = 0;
            if($this->session->flashdata('registered') === true){
                $registered = 1;
            }
            
            $header = $this->load->view('common/header',compact('registered'),true);
            $content = $this->load->view('site/index',array(),true);
            $footer = $this->load->view('common/footer',array(),true);
		
            $this->load->view('base',  compact('header','content','footer'));
	}
        
	public function register_member()
	{
            $input = $this->input->post();
            $set = array('matrimony_id' => 'D'.  strtotime('now') , 'profile_for' => $input['profile_for'], 'name' => $input['name'], 'gender' => $input['gender'], 'date_of_birth' => $input['dob_yy'].'-'.$input['dob_mm'].'-'.$input['dob_dd'], 'religion' => $input['religion'], 'caste' =>$input['caste'], 'mother_language' =>$input['mother_language'], 'country' => $input['country'], 'mobile_no' =>$input['mobile'], 'email' =>$input['email'], 'password' => md5($input['password']), 'about_member' => '', 'have_membership' => 0, 'is_verified' => 0, 'is_approved' => 0);
            
            $this->db->insert('members',$set);
            $this->session->set_flashdata('registered',true);
            
            $this->load->library('email');
            $this->email->to($input['email']);
            $this->email->from('Matrimony');
            $this->email->subject('Welcome to Matrimony');
            $this->email->message("Your Matrimony ID is: ".$set['matrimony_id']);
            $this->email->send();
            
            redirect(base_url());
            
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */