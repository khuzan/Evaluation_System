<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Esshs_controller extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$data['title'] = "Evaluation System for SHS";
		$this->load->model('Esshs_model');
		$this->load->helper('array');
		$this->load->view('ESSHS/header',$data);
		$this->load->database(); 
	}

	public function index(){
		$data['title'] = "Evaluation System for SHS";
		$this->load->view('ESSHS/login',$data);

	}
	// LOGIN PROCESS
	public function login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('uname','Username','required');
		$this->form_validation->set_rules('pwd','Password','required');
		if ($this->form_validation->run()) {
			$username = $this->input->post('uname');
			$password = $this->input->post('pwd');
			if ($this->Esshs_model->admin_login($username,$password)) {
				$this->home();
			}else{
				$this->session->set_flashdata('error','Invalid Username or Password!');
				redirect(base_url('esshs_controller/index'));
			}
		}else{
			$this->index();
		}

	}
	public function home(){
		$data['techvoc'] 	= $this->Esshs_model->get_techvoc();
		$data['ABM'] 	= $this->Esshs_model->get_ABM();
		$data['GAS'] 	= $this->Esshs_model->get_GAS();
		$data['STEM'] 	= $this->Esshs_model->get_STEM();
		$data['students'] 	= $this->Esshs_model->get_students();
		$data['females'] 	= $this->Esshs_model->get_females();
		$data['males'] 		= $this->Esshs_model->get_males();
		$data['honors']		= $this->Esshs_model->get_honors();
		$this->load->view('ESSHS/home',$data);
		$this->load->view('ESSHS/footer');
	}
	// LOGOUT PROCESS
	public function logout(){
		$this->session->unset_userdata('username');
		redirect(base_url('index'));
	}
	public function form(){
		$this->load->view('ESSHS/form');
	}
	public function student_registration(){
		$data = array(
			"student_id"	=>$this->input->post(htmlspecialchars("stu_id")),
			"firstname"		=>$this->input->post(htmlspecialchars("fname")),
			"lastname"		=>$this->input->post(htmlspecialchars("lname")),
			"gender"		=>$this->input->post(htmlspecialchars("gender")),
			"yr_lvl"		=>$this->input->post(htmlspecialchars("yr-lvl")),
			"strand"		=>$this->input->post(htmlspecialchars("strand"))	
			);
		$this->Esshs_model->insert_data($data);
		$this->load->view('ESSHS/insert',$data);

	}
	public function insert(){
		$data = $this->input->post();
		$this->Esshs_model->insert_yeah($data);
		// SET flashdata for notification
		$this->session->set_flashdata('msg','Successfully Added!');
		redirect(base_url('Esshs_controller/form'));
		
	}
	// DELETE
	public function delete_student(){
		$this->load->model('Esshs_model');
		$student_id = $this->input->get('id');
		$this->Esshs_model->delete_id($student_id);
		// set flashdata for alert
		$this->session->set_flashdata('msg','Successfully Deleted!');
		redirect(base_url() . "Esshs_controller/table_dynamic");
	}
	// UPDATE
	public function get_data($record_id){
		$record['record1'] = $this->Esshs_model->getall($record_id);
		$record['record2'] = $this->Esshs_model->getenrolledsubj($record_id);
		$this->load->view('ESSHS/update', $record);
	}
	public function form_validation(){
		$this->load->view('ESSHS/form_validation');
	}
	public function form_wizards(){
		$this->load->view('ESSHS/form_wizards');
	}
	public function table_dynamic(){
		$data['userArray'] = $this->Esshs_model->get_data();
		$this->load->view('ESSHS/table_dynamic',$data);
		
	}
	// VIEW
	public function view(){
		$id = $this->input->post('M_view');
		$data['value']		=$this->Esshs_model->fetch_data($id);
		$data['STUgrades']	=$this->Esshs_model->get_grades($id);  
		// var_dump($data);

		$this->load->view('ESSHS/fetch',$data);

	}
	public function sample(){
		$id = $this->input->post('M_view');
		$data['value'] = $this->Esshs_model->sample($id);
		var_dump($data);
	}



}
?>
