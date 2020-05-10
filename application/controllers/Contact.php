<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
	public function index()
	{
		$this->load->view('head');
		$this->load->view('contact');
		$this->load->view('foot');
	}

	private function contact_data() {
		return array(
			'name' => $this -> input -> post('name'),
			'email' => $this -> input -> post('email'),
			'subject' => $this -> input -> post('subject'),
			'message' => $this -> input -> post('message')
		);
	}

	public function send() {

		$this -> form_validation -> set_rules('name', 'nom de l\'utilisateur', 'required', 
			array('required' => 'Le champ %s est obligatoire.')	
		); 
		
		$this -> form_validation -> set_rules('email', 'email',  'required|valid_email', 
			array(
				'required' => 'Le champ %s est obligatoire.',
				'valid_email' => 'Saisissez un email valide.'
			)
		); 
		
		$this -> form_validation -> set_rules('subject', 'sujet', 'required', 
			array(
				'required' => 'Le champ %s est obligatoire.'
			)
		); 

		$this -> form_validation -> set_rules('message', 'message', 'required', 
			array(
				'required' => 'Le champ %s est obligatoire.'
			)
		); 

		if($this -> form_validation -> run()) {  

			$to = 'dimbusinessfamily@gmail.com';
			$name = $_POST["name"];
			$email= $_POST["email"];
			$message = $_POST["message"];
			$subject = $_POST["subject"];
		
			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
			$message ='<table style="width:100%">
				<tr>
					<td>'. $name. '</td>
				</tr>
				<tr><td>Email: '. $email .'</td></tr>
				<tr><td>subject: '. $subject .'</td></tr>
				<tr><td>Text: '. $message .'</td></tr>
				
			</table>';
		
			if (@mail($to, $email, $message, $headers)) {
				echo 'The message has been sent.';
			}else {
				echo 'failed';
			}
			
			 			
		} else { 
            $this -> index();
		}
	}
}