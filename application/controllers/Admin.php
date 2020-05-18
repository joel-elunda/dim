<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
 
	public function index() {  
		$this->load->view('admin/index'); 
	}












	public function profile() {
		$this->load->view('admin/profile'); 
	}

	public function _404() {
		$this->load->view('admin/404.php'); 
	}

	public function basic_table() {
		$this->load->view('admin/basic-table'); 
	}

	public function fontawesome() {
		$this->laod->view('admin/fontawesome');
	}

	public function blank() {
		$this->load->view('admin/blank'); 
	}

	public function map_google() {
		$this->load->view('admin/map-google'); 
	}

}
