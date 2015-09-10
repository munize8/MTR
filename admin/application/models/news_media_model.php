<?php
    class News_media_model extends CI_Model{
        public function __construct() {
            parent::__construct();
        }
        
        public function get_all(){
                
                $all_letters = $this->db->get('news_and_media');
                if($all_letters->num_rows() > 0){
                    return $all_letters->result_array();
                }else{
                    return array();
                }
        }
        
        public function get_by_id($id){
                
                $all_letters = $this->db->where('id',$id)->get('print_letters');
                if($all_letters->num_rows() > 0){
                    return end($all_letters->result_array());
                }else{
                    return array();
                }
        }
//        
//        public function get_user_count($count_by = NULL){
//            $this->db->select('count(*) as total')->where('is_admin',0);
//            if($count_by != NULL)
//                $this->db->where(array("$count_by !="=>0,"$count_by !="=>''));
//            $count = $this->db->get('ap_users');
//            if($count->num_rows() > 0){
//                $count = $count->result_array();
//                return $count[0]['total'];
//            }else{
//                return 0;
//            }
//        }
        
        
        public function store(){
            $set_media = array();
            $set = array(
                    'title'=>$this->input->post('news_title'),
                    'description'=>$this->input->post('news_body'),
//                    'created_on'=>date('Y-m-d H:i:s',  time())
                );
                $this->db->insert('news_and_media',$set);
                $news_id = $this->db->insert_id();
                if($news_id > 0){
                    foreach ($this->input->post('media') as $key => $value) {
                        $set_media[] = array(
                            'news_media_id' => $news_id,
                            'file_source' => $value,
                            'file_type' => 'image'
                            );
                    }
                    if(count($set_media) > 0)
                        $this->db->insert_batch('media_files',$set_media);
                    
                    return TRUE;
                }else {
                    return FALSE;
                }
                
        }
        
        
//        public function save(){
//            $set = array(
//                    'firstname'=>$this->input->post('firstname'),
//                    'lastname'=>$this->input->post('lastname'),
//                    'email'=>$this->input->post('email'),
//                    'mobile'=>$this->input->post('mobile'),
//                    'address'=>$this->input->post('address'),
//                    'city'=>$this->input->post('city'),
//                    'state'=>$this->input->post('state'),
//                    'country'=>$this->input->post('country'),
//                    'zipcode'=>$this->input->post('zipcode'),
//                    'remark'=>$this->input->post('remark'),
//                    'category'=>$this->input->post('category')
//                );
//                return $this->db->where('id',  $this->input->post('id'))->update('ap_users',$set);
//        }
    }
?>
