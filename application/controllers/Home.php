<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('Crud_model'); 
	}

	public function index()
	{
		$data = array(
			'about' => $this->core_model->get_by_id('about', array('about_id'=>1))  , 
			'sistema' => $this->core_model->get_by_id('sistema', array('sistema_id'=>1)), 
			'servico' => $this->core_model->get_all('service'), 
		);

		/* 
		echo '<pre>'; 
		print_r($data['sistema']); 
		exit(); 
		*/

		$this->load->view('layout/header',$data);
		$this->load->view('home'); 
		$this->load->view('layout/footer');
	}

	public function savedata()
	{
		if($this->input->post('type')==1)
		{
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$message=$this->input->post('message');
			$this->Crud_model->saverecords($name,$email,$message);	
			echo json_encode(array(
				"statusCode"=>200
			));
		} 
	}

	public function savenewsletter()
	{
		if($this->input->post('type')==1)
		{
			$newsletter_email=$this->input->post('newsletter_email');
			$this->Crud_model->savenewsletter_email($newsletter_email);	
			echo json_encode(array(
				"statusCode"=>200
			));
		} 
	}
}