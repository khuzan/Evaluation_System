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
		$data['students'] 	= $this->Esshs_model->get_students();
		$data['females'] 	= $this->Esshs_model->get_females();
		$data['males'] 		= $this->Esshs_model->get_males();
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
		$sem 	= $this->input->post('semester');
		$yr_lvl = $this->input->post('yr-lvl');
		$strand = $this->input->post('strand');
		$data = array(
			"student_id"	=>$this->input->post(htmlspecialchars("stu_id")),
			"firstname"		=>$this->input->post(htmlspecialchars("fname")),
			"lastname"		=>$this->input->post(htmlspecialchars("lname")),
			"gender"		=>$this->input->post(htmlspecialchars("gender")),
			"yr_lvl"		=>$this->input->post(htmlspecialchars("yr-lvl")),
			"semester"		=>$this->input->post(htmlspecialchars("semester")),
			"strand"		=>$this->input->post(htmlspecialchars("strand"))	
			);
		$this->Esshs_model->insert_data($data);
		//validate if semester is equal to ..

		// TECH-VOC(ICT)
		if ($yr_lvl == 'Senior High School 2' && $strand == 'TECH-VOC(ICT)' && $sem == '1st Semester') {
			$data2 = array(
				array(
					'subj_code'		=>'SJPCS13',
					'description'	=>'21st Century Literature from the
										 Philippines and the Worlds',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPCS14',
					'description'	=>'Contemporary Philippine Arts from the Regions',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPCS17',
					'description'	=>'Physics Education and Health 3',
					'units'			=>'20',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPAT2',
					'description'	=>'Practical Research 2',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPAT3',
					'description'	=>'Filipino sa Piling Larang',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPAT6',
					'description'	=>'Entreprenuership',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPTV-ICT-1D',
					'description'	=>'Computer System Servicing 4',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPTV-ICT-1E',
					'description'	=>'Computer System Servicing 5',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPTV-ICT-1F',
					'description'	=>'Computer System Servicing 6',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					)
				);
			$this->Esshs_model->insert_data2($data2);
			//set flashdata  for alert
			$this->session->set_flashdata('msg','Successfully Added!');
			redirect('Esshs_controller/form');
		}
		if ($yr_lvl == 'Senior High School 2' && $strand == 'TECH-VOC(ICT)' && $sem == '2nd Semester') {
			$data2 = array(
				array(
					'subj_code'		=>'SJPCS15',
					'description'	=>'Understanding Culture, Society and Politics',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPCS16',
					'description'	=>'Media and Information Literacy',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPCS18',
					'description'	=>'Physics Education and Health 4',
					'units'			=>'20',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPAT4',
					'description'	=>'English for Academic and Professional Purposes',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPAT7',
					'description'	=>'Inquiries, Investigations and Immersion',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPTV-ICT-1G',
					'description'	=>'Computer System Servicing 7',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPTV-ICT-1H',
					'description'	=>'Computer System Servicing 8',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPOJT',
					'description'	=>'Work Immersion/ Culminating Activity',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPTV-ICT-1F',
					'description'	=>'Computer System Servicing 6',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					)
				);
			$this->Esshs_model->insert_data2($data2);
			//set flashdata  for alert
			$this->session->set_flashdata('msg','Successfully Added!');
			redirect('Esshs_controller/form');
		}
		//STEM
		if ($yr_lvl == 'Senior High School 1' && $strand == 'STEM' && $sem == '1st Semester') {
			$data2 = array(
				array(
					'subj_code'		=>'SJPCS13',
					'description'	=>'21st Century Literature from the
										 Philippines and the Worlds',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPCS14',
					'description'	=>'Contemporary Philippine Arts from the Regions',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPCS17',
					'description'	=>'Physics Education and Health 3',
					'units'			=>'20',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPAT2',
					'description'	=>'Practical Research 2',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPAT3',
					'description'	=>'Filipino sa Piling Larang',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPAT6',
					'description'	=>'Entreprenuership',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPSTEM4',
					'description'	=>'General Physics 1(Lecture and Lab)',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPSTEM5',
					'description'	=>'General Biology 1(Lecture and Lab',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					)
				);
			$this->Esshs_model->insert_data2($data2);
			//set flashdata  for alert
			$this->session->set_flashdata('msg','Successfully Added!');
			redirect('Esshs_controller/form');
		}
		if ($yr_lvl == 'Senior High School 2' && $strand == 'STEM' && $sem == '2nd Semester') {
			$data2 = array(
				array(
					'subj_code'		=>'SJPCS15',
					'description'	=>'Understanding Culture, Society and Politics',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPCS16',
					'description'	=>'Media and Information Litercy',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPCS18',
					'description'	=>'Physics Education and Health 4',
					'units'			=>'20',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPAT4',
					'description'	=>'English for Academic and Professional Purposes',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPAT4',
					'description'	=>'Inquiries, Investigations and Immersion',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPSTEM6',
					'description'	=>'General Physics2 (Lecture and Lab)',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPSTEM7',
					'description'	=>'General Biology2 (Lecture and Lab)',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPSTEM8',
					'description'	=>'General Chemistry2 (Lecture and Lab)',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPOJT',
					'description'	=>'Work Immersion/ Culminating Activity',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				);
			$this->Esshs_model->insert_data2($data2);
			//set flashdata  for alert
			$this->session->set_flashdata('msg','Successfully Added!');
			redirect('Esshs_controller/form');
		}
		// GAS
		if ($yr_lvl == 'Senior High School 2' && $strand == 'GAS' && $sem =='1st Semester') {
			$data2 = array(
				array(
					'subj_code'		=>'SJPCS13',
					'description'	=>'21st Century Literature from the
										 Philippines and the Worlds',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPCS14',
					'description'	=>'Contemporary Philippine Arts from the Regions',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPCS17',
					'description'	=>'Physics Education and Health 3',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPAT2',
					'description'	=>'Practical Research 2',
					'units'			=>'20',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPAT3',
					'description'	=>'Filipino sa Piling Larang',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPAT6',
					'description'	=>'Entreprenuership',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPGAS 3',
					'description'	=>'Social Science 1',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPABM5',
					'description'	=>'Applied Economics',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					)
				);
			$this->Esshs_model->insert_data2($data2);
			//set flashdata  for alert
			$this->session->set_flashdata('msg','Successfully Added!');
			redirect('Esshs_controller/form');
		}
		if ($yr_lvl == 'Senior High School 2' && $strand == 'GAS' && $sem == '2nd Semester') {
			$data2 = array(
				array(
					'subj_code'		=>'SJPCS15',
					'description'	=>'Understanding Culture, Society and Politics',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPCS16',
					'description'	=>'Media and Information Litercy',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPCS18',
					'description'	=>'Physics Education and Health 4',
					'units'			=>'20',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPAT4',
					'description'	=>'English for Academic and Professional Purposes',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPAT4',
					'description'	=>'Inquiries, Investigations and Immersion',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPGAS4',
					'description'	=>'Disaster Readiness and Risk Reduction',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPSTEM7',
					'description'	=>'General Biology2 (Lecture and Lab)',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPSTEM1',
					'description'	=>'Pre-Calculus',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPABM7',
					'description'	=>'Principles of Marketing',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPOJT',
					'description'	=>'Works Immersion/Culminating Activity',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					)
				);
			$this->Esshs_model->insert_data2($data2);
			//set flashdata  for alert
			$this->session->set_flashdata('msg','Successfully Added!');
			redirect('Esshs_controller/form');
		}
		// ABM
		if ($yr_lvl == 'Senior High School 2' && $strand == 'ABM' && $sem == '1st Semester') {
			$data2 = array(
				array(
					'subj_code'		=>'SJPCS13',
					'description'	=>'21st Century Literature from the
										 Philippines and the Worlds',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPCS14',
					'description'	=>'Contemporary Philippine Arts from the Regions',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPCS17',
					'description'	=>'Physics Education and Health 3',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPAT2',
					'description'	=>'Practical Research 2',
					'units'			=>'20',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPAT3',
					'description'	=>'Filipino sa Piling Larang',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPAT6',
					'description'	=>'Entreprenuership',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPABM4',
					'description'	=>'Fundamentals of Accountancy, Business and Management2',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPABM5',
					'description'	=>'Applied Economics',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					)
				);
			$this->Esshs_model->insert_data2($data2);
			//set flashdata  for alert
			$this->session->set_flashdata('msg','Successfully Added!');
			redirect('Esshs_controller/form');
		}
		if ($yr_lvl == 'Senior High School' && $strand == 'ABM' && $sem == '2nd Semester') {
			$data2 = array(
				array(
					'subj_code'		=>'SJPCS15',
					'description'	=>'Understanding Culture, Society and Politics',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPCS16',
					'description'	=>'Media and Information Litercy',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPCS18',
					'description'	=>'Physics Education and Health 4',
					'units'			=>'20',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPAT4',
					'description'	=>'English for Academic and Professional Purposes',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPAT4',
					'description'	=>'Inquiries, Investigations and Immersion',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPABM6',
					'description'	=>'Business Finance',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPABM7',
					'description'	=>'Principles of Marketing',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPABM8',
					'description'	=>'Business Ethics and Social Responsibility',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					),
				array(
					'subj_code'		=>'SJPOJT',
					'description'	=>'Works Immersion/Culminating Activity',
					'units'			=>'80',
					'student_id'	=>$this->input->post(htmlspecialchars("stu_id"))
					)
				);
			$this->Esshs_model->insert_data2($data2);
			//set flashdata  for alert
			$this->session->set_flashdata('msg','Successfully Added!');
			redirect('Esshs_controller/form');
		}
		

	}
	public function form_validation(){
		$this->load->view('ESSHS/form_validation');
	}
	public function form_wizards(){
		$this->load->view('ESSHS/form_wizards');
	}
	public function register(){
		$this->load->library('form_validation');
	}
	public function fetch(){
		
	}




}
?>
