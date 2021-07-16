<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

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
            'titulo' => 'Email recebidas', 
            
            'email' => $this->core_model->get_all_email('email'),
			
			'styles' => array(
				'vendor/datatables/dataTables.bootstrap4.min.css',
			),

			'scripts' =>array(
				 'vendor/datatables/jquery.dataTables.min.js',
				 'vendor/datatables/dataTables.bootstrap4.min.js',
				 'vendor/datatables/app.js'

			),
        ); 

		/*
        echo '<pre>'; 
        print_r($data['email']); 
        exit(); 
		 */

		
		$this->load->view('restrita/layout/header', $data); 
		$this->load->view('restrita/email/index');
		$this->load->view('restrita/layout/footer'); 

            
    }

	public function mensagem($email_id){
		if(!$email_id || !$this->core_model->get_by_id('email', array('email_id' => $email_id))){
            
            $this->session->set_flashdata('error', 'Email não encontrada');
            redirect('restrita/email');  
            //exit('Usuario não cadastrado');
        
        }else{



            $data = array(
                'titulo' => 'Ler Email',
                'email' => $this->core_model->get_by_id('email', array('email_id' => $email_id)),
            ); 
            /* 
			echo '<pre>'; 
			print_r($data['email']);
			exit(); 
			*/
            $this->load->view('restrita/layout/header',$data);
            $this->load->view('restrita/email/mensagem');
            $this->load->view('restrita/layout/footer');

        }
    }

	public function del($email_id = null){
        if(!$email_id || !$this->core_model->get_by_id('email',array('email_id' => $email_id))){
            $this->session->set_flashdata('error', 'Email não encontrado'); 
            redirect('restrita/email');
        }else{

            $this->core_model->delete('email', array('email_id' => $email_id));
            $this->session->set_flashdata('sucesso', 'Email deletado com sucesso'); 
            redirect('restrita/email');
        }
    }


}

