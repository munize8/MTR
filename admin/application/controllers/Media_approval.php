<?php
class Media_approval extends CI_Controller
{
    public function __construct() {
        
        parent::__construct();

    }
    
    public function index()
    {
        if($this->session->userdata('logged_in_flag') == ''){
            header("Location:". base_url("index.php/login"));
        }
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
        $this->load->view('news_and_media');
        $this->load->view('common/footer');
    }
    
    public function upload(){
//        echo './uploads/media';die;
        $output = array('success' => true, 'file' => '', 'message' => '' );
        if($this->input->post()){
                
                $path = './uploads/media';
//                echo $path;
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'doc|docx|jpg|gif|png|pdf|avi|flv|wmv|mpeg|mp3|mp4';
//                $config['allowed_types'] = 'mp4|avi';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('files'))
		{
                    $error = array('error' => $this->upload->display_errors());
                    $output['success'] = false;
                    $output['message'] = $error['error'];
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
//                        var_dump($data);
                        $output['file'] = $data['upload_data']['file_name'];
		}
            }else{
                $output['success'] = false;
                $output['message'] = 'No file to upload';
            }
            echo json_encode($output);

    }
    public function store(){

        if($this->input->post())
        {
            $this->load->model('news_media_model');
            
            $this->session->set_flashdata('notification_flag',true); //     --for notification mandatory--
            if($this->news_media_model->store())
            {
                $this->session->set_flashdata('notification_text','News And Media stored successfully.');
                $this->session->set_flashdata('notification_style','success');
            }else{
                $this->session->set_flashdata('notification_text','Please try again');
                $this->session->set_flashdata('notification_style','error');
            }
            header("Location:". base_url("index.php/news-media"));

//            echo $this->email->print_debugger();
        }
    }
}