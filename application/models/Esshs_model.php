<?php 
	
	class Esshs_model extends CI_model{

		function admin_login($username,$password){
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$query = $this->db->get('admin');
			if ($query->num_rows()>0) {
				return true;
			
			}else{
				return false;
			}

		}
		function get_techvoc(){
			$query = $this->db->query("SELECT firstname from students WHERE strand = 'tech-voc'");
			 return $query->num_rows();
		}
		function get_students(){
			$query = $this->db->query("SELECT firstname FROM students");
			return $query->num_rows();
		}
		function get_females(){
			$query = $this->db->query("SELECT firstname FROM students WHERE gender = 'female'");
			return $query->num_rows();
		}
		function get_males(){
			$query = $this->db->query("SELECT firstname FROM students WHERE gender = 'male'");
			return $query->num_rows();
		}
			// insert data
		function insert_data($data){
			$this->db->insert('students',$data);
		}
		function insert_data2($data2){
			$this->db->insert_batch('enrolled_subj',$data2);
			// insert multiple data
		}
}

 ?>