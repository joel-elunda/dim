<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$this->load->view('head');
		$this->load->view('sign_up');
		$this->load->view('foot');
	}

	public function login_view() {
		$this->load->view('head');
		$this->load->view('login');
		$this->load->view('foot');
	}

	private function sign_up_data() { 
		return array(
			'name' =>  $this -> input -> post('name'),
			'email' =>  $this -> input -> post('email'),
			'password' =>  $this -> input -> post('password'),
			'type' => 0
		);
	}
 

	public function sign_up() {

		$this -> form_validation -> set_rules('name', 'nom de l\'utilisateur', 'required', 
			array('required' => 'Le champ %s est obligatoire.')	
		); 
		
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

		$this -> form_validation -> set_rules('confirm', 'confirmation', 'required|matches[password]', 
			array(
				'required' => 'Le champ %s est obligatoire.',
				'matches' => 'Votre valeur de %s est différente du mot de passe.')
		); 

		if($this -> form_validation -> run()) {  

			$this -> UserModel -> add($this -> sign_up_data());
			
			$this -> load -> view('head');
			$this -> load -> view('index');
			$this -> load -> view('foot');
			 			
		} else { 
            $this -> load -> view('head');
            $this -> load -> view('sign_up');
            $this -> load -> view('foot');
		}
	}


	public function login() {

        $email = $this -> input -> post('email');
		$password = $this -> input -> post('password');
		
        $user = array(
            'email' => $email,
            'password' => $password
        );

        $result = $this -> UserModel -> check_authentification($user);

        if(count($result) > 0)  {
            $user = $result[0];
            $user = array(
                'id' => $user -> id,
                'name' => $user -> name,
                'is_connected' => true
			);
			
            $this -> session -> set_userdata($user);
            redirect('account/home');
        }
        else  {
            $user = array(
                'error_email' => 'email ou mot de passe incorrect.'
            );
            
            $this -> session -> set_flashdata($user);
            $form_auth = $this -> load -> view('login', [], true);
            $user = array('page' => $form_auth);
			
			$this -> login_view();
			
        }
    }

    public function home()  {
        if($this -> session -> is_connected)  {
            $this -> load -> view('head');
            $this -> load -> view('index');
            $this -> load -> view('foot');
        }
        else {
            redirect('account/home');
        }
    }

    public function logout()   {
        $this -> session -> unset_userdata('is_connected');
        redirect('account/home');
    }
}