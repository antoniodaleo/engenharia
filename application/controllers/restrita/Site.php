<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct(){
		parent::__construct(); 

		
		if (!$this->ion_auth->logged_in())
		{
			$this->session->set_flashdata('info', 'Sua sessão expirou!'); 
		  	redirect('restrita/login');
		}
		
		

	}

	public function index(){

		$data = array(
			'titulo' => 'Home do site', 

		);


		$this->load->view('restrita/layout/header', $data); 
		$this->load->view('restrita/site/index');
		$this->load->view('restrita/layout/footer'); 
	}
}