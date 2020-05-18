<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
 
	public function index() {  
		$this->load->view('admin/index'); 
	}











	

	public function _404() {
		$this->load->view('admin/404'); 
	}

	public function basic_table() {
		$this->load->view('admin/basic-table'); 
	}

	public function blank() {
		$this->load->view('admin/blank'); 
	}

	public function map_google() {
		$this->load->view('admin/map-google'); 
	}

	public function profile() {
		$this->load->view('admin/profile'); 
	}
}
