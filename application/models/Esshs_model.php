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
		function students_login($username,$password){
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$query = $this->db->get('students');
			if ($query->num_rows()>0) {
				return true;
			
			}else{
				return false;
			}

		}
	}

 ?>