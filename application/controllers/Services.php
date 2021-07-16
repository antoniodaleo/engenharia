<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('Crud_model'); 
	}

	public function index()
	{
		$data = array(
			'about' => $this->core_model->get_all('about')  , 
			'sistema' => $this->core_model->get_by_id('sistema', array('sistema_id'=>1)), 
			'service' => $this->core_model->get_all('service'), 
		);
		
		/*echo '<pre>'; 
		print_r($data['service']); 
		exit();*/ 
		
		$this->load->view('layout/header', $data);
		$this->load->view('services'); 
		$this->load->view('layout/footer');
	}

	
}