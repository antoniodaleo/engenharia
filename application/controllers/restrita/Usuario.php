<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function index()
	{
		$this->load->view('restrita/layout/header');
		$this->load->view('restrita/usuario');
		$this->load->view('restrita/layout/footer');
	}
}