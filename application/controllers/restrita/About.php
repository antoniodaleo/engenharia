<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct(){
		parent::__construct(); 

		
		if (!$this->ion_auth->logged_in())
		{
			$this->session->set_flashdata('info', 'Sua sessão expirou!'); 
		  	redirect('restrita/login');
		}
		
		

	}

	public function index(){
		if(!$this->core_model->get_by_id('about', array('about_id' => 1))){
            
            $this->session->set_flashdata('error', 'Descrição não encontrada');
            redirect('restrita/about');  
            //exit('Usuario não cadastrado');
        
        }else{

            //Validazione del Formulario;
			$this->form_validation->set_rules('about_titulo','','trim|required');
			$this->form_validation->set_rules('about_subtitulo','','trim|required');
            $this->form_validation->set_rules('about_descricao','','trim|required');

			$this->form_validation->set_rules('about_qld_1','','trim|required');
			$this->form_validation->set_rules('about_descricao_qld_1','','trim|required');

			$this->form_validation->set_rules('about_qld_2','','trim|required');
			$this->form_validation->set_rules('about_descricao_qld_2','','trim|required');

			$this->form_validation->set_rules('about_qld_3','','trim|required');
			$this->form_validation->set_rules('about_descricao_qld_3','','trim|required');



            if($this->form_validation->run()){

                $data = elements(  
                    array(
						'about_titulo',
						'about_subtitulo',
                        'about_descricao',
						'about_qld_1',
						'about_descricao_qld_1',                        
						'about_qld_2',
						'about_descricao_qld_2',                        
                        'about_qld_3',
						'about_descricao_qld_3', 
						                   
                        
					
					), $this->input->post()
                ); 


                $data = $this->security->xss_clean($data); 
                $this->core_model->update('about', $data, array('about_id' => 1));

                //Se for diferente, atualiza o grupo
                $this->session->set_flashdata('sucesso', 'Dados salvos com successo'); 
                redirect('restrita/about'); 
            }else{

                $data = array(
					'titulo' => 'Sobre Nós', 
					'about' => $this->core_model->get_by_id('about', array('about_id'=>1)), 
					//'about' => $this->core_model->get_all('about'),
					'sistema' => $this->core_model->get_by_id('sistema', array('sistema_id'=>1)), 

				);
				
				/* 
				echo '<pre>'; 
				print_r($data['about']); 
				exit(); 
				*/
				
				$this->load->view('restrita/layout/header', $data); 
				$this->load->view('restrita/about/index');
				$this->load->view('restrita/layout/footer'); 

            }
        }
		
	}


	

	
}