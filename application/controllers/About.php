<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('Crud_model'); 
	}

	public function index()
	{

		$data = array(
			'about' => $this->core_model->get_by_id('about', array('about_id'=>1)), 
			'sistema' => $this->core_model->get_by_id('sistema', array('sistema_id'=>1)), 

		); 
		
		/*
		echo '<pre>'; 
		print_r($data['about']);
		exit();
 		*/
		$this->load->view('layout/header', $data);
		$this->load->view('about'); 
		$this->load->view('layout/footer');
	}

	public function savedata()
	{
		if($this->input->post('type')==1)
		{
			$email=$this->input->post('email');
			$this->Crud_model->saverecords($email);	
			echo json_encode(array(
				"statusCode"=>200
			));
		} 
	}
}