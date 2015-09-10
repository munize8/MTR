<?php
    class Users_model extends CI_Model{
        public function __construct() {
            parent::__construct();
        }
        
        public function get_all($get_by = NULL){
                $this->db->select('apu.id as user_id,apu.firstname,apu.lastname,apu.address,apu.city,apu.email,apu.state,apu.country,apu.zipcode,apu.mobile,apu.remark,uc.id as category_id, uc.title as category_name, uc.validity');
                $this->db->join('user_category as uc','apu.category = uc.id','left');
                $this->db->where('apu.is_admin !=',1);
                if($get_by == 'mobile')
                    $this->db->where(array("apu.$get_by !="=>0,"apu.$get_by !="=>''));
                if($get_by == 'email')
                    $this->db->where(array("apu.email !="=>''));
                if($get_by == 'postal')
                    $this->db->where(array("apu.mobile"=>0,"apu.mobile"=>'',"apu.email"=>''));
                $all_users = $this->db->get('ap_users as apu');
                if($all_users->num_rows() > 0){
                    return $all_users->result_array();
                }else{
                    return array();
                }
        }
        
        public function get_by_id($id){
                $this->db->select('apu.id as user_id,apu.firstname,apu.lastname,apu.address,apu.city,apu.email,apu.state,apu.country,apu.zipcode,apu.mobile,apu.remark,uc.id as category_id, uc.title as category_name, uc.validity');
                $this->db->join('user_category as uc','apu.category = uc.id','left');
                $this->db->where(array("apu.id"=>$id));
                $all_users = $this->db->get('ap_users as apu');
                if($all_users->num_rows() > 0){
                    return end($all_users->result_array());
                }else{
                    return array();
                }
        }
        
        public function get_user_count($count_by = NULL){
            $this->db->select('count(*) as total')->where('is_admin',0);
            if($count_by != NULL)
                $this->db->where(array("$count_by !="=>0,"$count_by !="=>''));
            $count = $this->db->get('ap_users');
            if($count->num_rows() > 0){
                $count = $count->result_array();
                return $count[0]['total'];
            }else{
                return 0;
            }
        }
        
        
        public function add(){
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
                    'remark'=>$this->input->post('remark'),
                    'category'=>$this->input->post('category')
                );
                return $this->db->insert('ap_users',$set);
        }
        
        
        public function save(){
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
                    'remark'=>$this->input->post('remark'),
                    'category'=>$this->input->post('category')
                );
                return $this->db->where('id',  $this->input->post('id'))->update('ap_users',$set);
        }
    }
?>
