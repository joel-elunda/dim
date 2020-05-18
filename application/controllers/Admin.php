<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
 
	public function index() {  
		$this->load->view('admin/index'); 
	}

	public function admin_data() {
		return array(
			'email' => $this -> input -> post('email'),
			'password' => $this -> input -> post('password')
		);
	}


	public function login() {
		$this -> form_validation -> set_rules('email', 'email',  'required|valid_email', 
			array(
				'required' => 'Le champ %s est obligatoire.',
				'valid_email' => 'Saisissez un email valide.'
			)
		); 
		
		$this -> form_validation -> set_rules('password', 'mot de passe', 'required|min_length[8]', 
			array(
				'required' => 'Le champ %s est obligatoire.',
				'min_length' => 'Le champ %s doit comporter au mois 8 caractères.'
			)
		); 

		if($this -> form_validation -> run()) {
			print_r($this -> admin_data());

			/*
			$this -> dataModel -> add($this -> sign_up_data());

			$data = $this -> sign_up_data();
			$result = $this -> dataModel -> check_authentification($data);

			if(count($result) > 0)  {
				$data = $result[0];
				$data = array(
					'id' => $data -> id,
					'name' => $data -> name,
					'email' => $data -> email,
					'is_connected' => true
				);
				
				$this -> session -> set_userdata($data);
				redirect('account/home');
			*/
		} else {
			print_r($this -> admin_data());
			$this -> login_view();
		}
	}




	public function login_view() {
		$this->load->view('admin/login'); 
	}


	public function profile() {
		$this->load->view('admin/profile'); 
	}

	public function error() {
		$this->load->view('admin/error'); 
	}

	public function basic_table() {
		$this->load->view('admin/basic-table'); 
	}

	public function fontawesome() {
		$this->load->view('admin/fontawesome');
	}

	public function blank() {
		$this->load->view('admin/blank'); 
	}

	public function map_google() {
		$this->load->view('admin/map-google'); 
	}

}
