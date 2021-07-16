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

		$data = array(
			'titulo' => 'Sobre Nós', 
			'about' => $this->core_model->get_all('about'), 
			
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


	public function core($about_id = null){
		if(!$about_id){
            
             //Validazione del Formulario;
			$this->form_validation->set_rules('about_titulo','','trim|required');
			$this->form_validation->set_rules('about_subtitulo','','trim|required');
            $this->form_validation->set_rules('about_descricao','','trim|required');

			$this->form_validation->set_rules('about_qld_1','','trim|required');
			$this->form_validation->set_rules('about_descricao_qld_1','','trim|required');
			$this->form_validation->set_rules('about_icona_1','','trim|required');

			
			$this->form_validation->set_rules('about_qld_2','','trim|required');
			$this->form_validation->set_rules('about_descricao_qld_2','','trim|required');
			$this->form_validation->set_rules('about_icona_2','','trim|required');


			$this->form_validation->set_rules('about_qld_3','','trim|required');
			$this->form_validation->set_rules('about_descricao_qld_3','','trim|required');
			$this->form_validation->set_rules('about_icona_3','','trim|required');


            if($this->form_validation->run()){

                $data = elements(  
                    array(
						'about_titulo',
						'about_subtitulo',
                        'about_descricao',
						'about_qld_1',
						'about_descricao_qld_1',                        
						'about_icona_1',

						'about_qld_2',
						'about_descricao_qld_2',                        
						'about_icona_2',

						'about_qld_3',
						'about_descricao_qld_3',                        
						'about_icona_3',                  
                        
					
					), $this->input->post()
                ); 


                $data = html_escape($data);
				$this->core_model->insert('about', $data); 
				redirect('restrita/about');  
			}else{
				
				$data = array(
					'titulo' => 'Cadastrar qualidades', 
					//'about' => $this->core_model->get_all('about'), 
					
				);
				
				/* 
				echo '<pre>'; 
				print_r($data['about']); 
				exit(); 
				*/
				
				$this->load->view('restrita/layout/header', $data); 
				$this->load->view('restrita/about/core');
				$this->load->view('restrita/layout/footer'); 

			}
        
        }else{

			if(!$about = $this->core_model->get_by_id('about', array('about_id' => $about_id))){
				$this->session->set_flahdata('erro', 'A qualidade não foi encontrada'); 
                
                redirect('restrita/about'); 
			}else{
				//Validazione del Formulario;
				$this->form_validation->set_rules('about_titulo','','trim|required');
				$this->form_validation->set_rules('about_subtitulo','','trim|required');
				$this->form_validation->set_rules('about_descricao','','trim|required');

				$this->form_validation->set_rules('about_qld_1','','trim|required');
				$this->form_validation->set_rules('about_descricao_qld_1','','trim|required');
				$this->form_validation->set_rules('about_icona_1','','trim|required');

				$this->form_validation->set_rules('about_qld_2','','trim|required');
				$this->form_validation->set_rules('about_descricao_qld_2','','trim|required');
				$this->form_validation->set_rules('about_icona_2','','trim|required');


				$this->form_validation->set_rules('about_qld_3','','trim|required');
				$this->form_validation->set_rules('about_descricao_qld_3','','trim|required');
				$this->form_validation->set_rules('about_icona_3','','trim|required');




				if($this->form_validation->run()){

					$data = elements(  
						array(
							'about_titulo',
							'about_subtitulo',
							'about_descricao',
							'about_qld_1',
							'about_descricao_qld_1',                        
							'about_icona_1',

							'about_qld_2',
							'about_descricao_qld_2',                        
							'about_icona_2',
	
							'about_qld_3',
							'about_descricao_qld_3',                        
							'about_icona_3', 


											
						), $this->input->post()
					); 

					$data = html_escape($data); 

					$this->core_model->update('about',$data, array('about_id' =>$about_id));
					$this->session->set_flashdata('sucesso', 'Dados salvos com successo'); 
					redirect('restrita/about'); 
				
				}else{

					$data = array(
						'titulo' => 'Sobre Nós', 
						'about' => $about , 
						
					);
					
					/* 
					echo '<pre>'; 
					print_r($data['about']); 
					exit(); 
					*/
					
					$this->load->view('restrita/layout/header', $data); 
					$this->load->view('restrita/about/core');
					$this->load->view('restrita/layout/footer'); 

           		}

			}//End if 
           
        }
		
	}

	public function del($about_id = null){
        if(!$about_id || !$this->core_model->get_by_id('about', array('about_id' => $about_id))){
            $this->session->set_flashdata('error', 'Argumento não encontrado'); 
            redirect('restrita/about');
        }else{

            $this->core_model->delete('about', array('about_id' => $about_id));
            $this->session->set_flashdata('sucesso', 'Argumento deletado com sucesso'); 
            redirect('restrita/about');
        }
    }



	
}// END CLASS