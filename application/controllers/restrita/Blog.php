<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('Crud_model'); 
	}


    public function index(){

        $data = array(
            'titulo' => 'Gerenciar Blog', 
            
            'styles' => array(
				'vendor/datatables/dataTables.bootstrap4.min.css',
			),

			'scripts' =>array(
				 'vendor/datatables/jquery.dataTables.min.js',
				 'vendor/datatables/dataTables.bootstrap4.min.js',
				 'vendor/datatables/app.js'

			),
            
            'blog' => $this->core_model->get_all('blog'),

        );

        
        $this->load->view('restrita/layout/header', $data);         
        $this->load->view('restrita/blog/index'); 
        $this->load->view('restrita/layout/footer'); 



    }

    public function add(){
        $data = array(
            'titulo' => 'Gerenciar Blog', 
            
            'styles' => array(
				
			),

			'scripts' =>array(
				 
				

			),
            
            //'blog' => $this->core_model->get_all('blog'),

        );

        
        $this->load->view('restrita/layout/header', $data);         
        $this->load->view('restrita/blog/add'); 
        $this->load->view('restrita/layout/footer'); 
    }



}