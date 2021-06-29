<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('Crud_model'); 
	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('contact'); 
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