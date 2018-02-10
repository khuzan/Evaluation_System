<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Esshs_controller extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Esshs_model');
		$this->load->database();
	}

	public function index(){
		$data['title'] = "Evaluation System for SHS";
		$this->load->view('ESSHS/login',$data);
	}

	public function login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('uname','Username','required');
		$this->form_validation->set_rules('pwd','Password','required');
		if ($this->form_validation->run()) {
			$username = $this->input->post('uname');
			$password = $this->input->post('pwd');
			if ($username == 'admin') {
				if ($this->Esshs_model->admin_login($username,$password)) {
					echo "WELCOME admin!";
				}else{
					$this->session->set_flashdata('error','Invalid Username or Password!');
					redirect(base_url('esshs_controller/index'));
				}
			}else{
				if ($this->Esshs_model->students_login($username,$password)) {
					echo "WELCOME students!";
				}else{
					$this->session->set_flashdata('error','Invalid Username or Password!');
					redirect(base_url('esshs_controller/index'));
				}
			}
		}else{
			$this->index();
		}
	}





}
?>
