<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actu extends CI_Controller {

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
		$this->load->view('cases');
		$this->load->view('foot');
	}

	
	public function suscribe() {
		$user_email = $this -> input -> post('email');

		$this -> form_validation -> set_rules('email', 'email',  'required|valid_email', 
			array(
				'required' => 'Le champ %s est obligatoire.',
				'valid_email' => 'Saisissez un email valide.'
			)
		);  
		
		if($this -> form_validation -> run()) {  

			$this -> BlogModel -> add_suscriber($user_email); 
			$this -> index();
						
		} else { 
			$this -> index();
		}
	}


}