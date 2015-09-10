<?php
    class Categories_model extends CI_Model{
        public function __construct() {
            parent::__construct();
        }
        
        public function get_all(){
                
                $all_categories = $this->db->get('user_category');
                if($all_categories->num_rows() > 0){
                    return $all_categories->result_array();
                }else{
                    return array();
                }
        }
        
        public function get_categories_count(){
            $count = $this->db->select('count(*) as total')->get('user_category');
            if($count->num_rows() > 0){
                $count = $count->result_array();
                return $count[0]['total'];
            }else{
                return 0;
            }
        }
        
        public function add(){
            $set = $this->input->post();
            return $this->db->insert('user_category',$set);
        }
        
        public function save(){
            $set = $this->input->post();
            return $this->db->where('id',$set['id'])->update('user_category',array('title'=>$set['title'], 'validity'=>$set['validity']));
        }
    }
?>
