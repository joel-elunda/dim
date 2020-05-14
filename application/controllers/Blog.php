<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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
		$this->load->view('blog-single');
		$this->load->view('foot');
	}

	private function get_current_date() {
		$data = getdate();
		return array(
			'weekday' => $data['weekday'],
			'month' => $data['month'],
			'day' => $data['mday']
		);
	}

	public function bloger_data() {
		return array( 
			'email' => $this -> input -> post('email'),
			'message' => $this -> input -> post('message'),
			'date' => get_current_date()
		);
	}

	public function send_comment() {
		 
		$this -> form_validation -> set_rules('email', 'email',  'required|valid_email', 
			array(
				'required' => 'Le champ %s est obligatoire.',
				'valid_email' => 'Saisissez un email valide.'
			)
		); 

		$this -> form_validation -> set_rules('message', 'message', 'required', 
			array(
				'required' => 'Le champ %s est obligatoire.'
			)
		); 

		if($this -> form_validation -> run()) {  

			$this -> BlogModel -> add($this -> bloger_data());
			$this -> BlogModel -> 
			$this -> index();
			 			
		} else { 
            $this -> index();
		}

	}
}
