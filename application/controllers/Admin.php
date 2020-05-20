<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct () {
        parent:: __construct(); 
    }
 
	public function index() {  
		$this-> login_view();
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

			$user = $this -> admin_data();
			$result = $this -> UserModel -> check_authentification($user);
		

			if(count($result) > 0)  {
				
				$data = $result[0]; 
				$data = array(
					'id' => $data -> id,
					'name' => $data -> name,
					'email' => $data -> email,
					'type' => $data -> type,
					'is_connected' => true
				); 
 
				
				if($data['type'] == 1) { 
					$this -> session -> set_userdata($data);
					redirect('admin/home'); 
				} else {
					$this -> load -> view('admin/errAdmin');
				}
			
			}
			
		} else {
			print_r($this -> admin_data());
			$this -> login_view();
		}
	}

	public function ajax_upload() {
		if(isset($_FILES['image_file']['name'])) {

			$config['upload_path'] = "./upload/";
			$config['allowed_types'] = "jpg|jpeg|png|gif";
			$this -> load -> library('upload', $config);

			if($this -> upload -> do_upload('image_file')) {
				echo $this -> upload -> display_errors();
			} else {
				$data = $this -> upload -> data();
				echo '<img src="'.base_url().'upload/'.$data["file_name"].'"/>';
			}

		}
	}

	private function upload_data() {
		return array(
			'image' => '',
			'titre' => $this -> input -> post('titre'),
			'description' => $this -> input -> post('description'),
			'date' => $this -> input -> post('date')
		);
	}

	public function upload_release() {
 

		

		if($this -> form_validation -> run()) {
			print_r($this -> upload_data());
			
		} else {
			print_r($this -> upload_data());
		}
	}


	public function home() {
		$this->load->view('admin/index'); 
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

	public function errorAdmin() {
		$this->load->view('admin/errAdmin'); 
	}

	public function users() {
		$data['users'] = $this -> UserModel -> fetch_all_users(); 
		$this->load->view('admin/users', $data); 
	}

	public function fontawesome() {
		$this->load->view('admin/fontawesome');
	}

	public function blank() {
		$this->load->view('admin/blank'); 
	}

	public function release() {
		$this->load->view('admin/release'); 
	}

	public function actu() {
		$this->load->view('admin/actu'); 
	}
 

}
