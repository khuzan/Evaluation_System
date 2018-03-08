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
		// GET data from database
		function get_data(){
			$this->load->database();
			$query = $this->db->query("SELECT * FROM students");
			$query->result_array();
			return $query->result_array();
		}
		function get_techvoc(){
			$query = $this->db->query("SELECT firstname from students WHERE strand = 'TECH-VOC(ICT)'");
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
		function insert_yeah($data){
			for ($i=0; $i <sizeof($data['subj']); $i++) { 
				$record = array(
					'student_id'	=>$data['student_id'][0],
					'subj_code'		=>$data['code'][$i],
					'description'	=>$data['subj'][$i],
					'grade'			=>$data['grade'][$i]
					);
				$this->db->insert('enrolled_subj',$record);
			}
			
						
		}
		// Delete data
		function delete_id($student_id){
			$this->load->database();
			$this->db->where('student_id', $student_id);
			$this->db->delete('students');
			$this->db->where('student_id', $student_id);
			$this->db->delete('enrolled_subj');
			return true;
		}
		// get all data
		function getall($record_id){
			$query = $this->db->get_where('students', array('student_id' => $record_id));// SELECT from table where id = id
			if ($query->num_rows()>0) {
				return $query->row();
			}
		}
		function getenrolledsubj($record_id){			
			$query = $this->db->query('SELECT * FROM enrolled_subj WHERE student_id = "'.$record_id.'"');
			return $query->result();
			
		}
}

 ?>