<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

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
            'titulo' => 'Servicos cadastrados', 
            
            'styles' => array(
                'vendor/datatables/dataTables.bootstrap4.min.css',
            ),

            'scripts' =>array(
                 'vendor/datatables/jquery.dataTables.min.js',
                 'vendor/datatables/dataTables.bootstrap4.min.js',
                 'vendor/datatables/app.js'

            ),

            'services' => $this->core_model->get_all('service'),

        ); 

        //echo '<pre>'; 
        //print_r($data['services']); 
        //exit(); 

		$this->load->view('restrita/layout/header', $data); 
		$this->load->view('restrita/services/index');
		$this->load->view('restrita/layout/footer'); 

            
    }

    public function edit($service_id = NULL) {
       
        if(!$service_id || !$this->core_model->get_by_id('service', array('service_id' => $service_id))){
            
            $this->session->set_flashdata('error', 'Servico não encontrado');
            redirect('restrita/services');  
            //exit('Usuario não cadastrado');
        
        }else{

            //Validazione del Formulario;
            $this->form_validation->set_rules('service_titulo','','trim|required');
            $this->form_validation->set_rules('service_descricao','','trim|required');
            $this->form_validation->set_rules('service_icona','','trim|required');



            if($this->form_validation->run()){

                $data = elements(  
                    array(
                        'service_titulo',   
                        'service_descricao',     
                        'service_icona',

                        ), $this->input->post()
                ); 


                $data = $this->security->xss_clean($data); 
                $this->core_model->update('service', $data, array('service_id' => $service_id));

                //Se for diferente, atualiza o grupo
                $this->session->set_flashdata('sucesso', 'Dados salvos com successo'); 
                redirect('restrita/services'); 
            }else{

                $data = array(
                    'titulo' => 'Editar Servico',
                    'services' => $this->core_model->get_by_id('service', array('service_id' => $service_id)),
                ); 
                
                
                $this->load->view('restrita/layout/header',$data);
                $this->load->view('restrita/services/edit');
                $this->load->view('restrita/layout/footer');

            }
        }

    }

    public function add(){

        $this->form_validation->set_rules('service_titulo','','trim|required|is_unique[service.service_titulo]');
        $this->form_validation->set_rules('service_descricao','','trim|required');
        $this->form_validation->set_rules('service_icona','','trim|required');


        if($this->form_validation->run()){

            $data = elements(  
                array(
                    'service_titulo',
                    'service_descricao',
                    'service_icona',
                    ), $this->input->post()
            ); 


            $data = $this->security->xss_clean($data); 
            $this->core_model->insert('service', $data);

            //Se for diferente, atualiza o grupo
            $this->session->set_flashdata('sucesso', 'Dados salvos com successo'); 
            redirect('restrita/services'); 
        }else{

            $data = array(
                'titulo' => 'Adicionar Servico',
            ); 
            
            
            $this->load->view('restrita/layout/header',$data);
            $this->load->view('restrita/services/add');
            $this->load->view('restrita/layout/footer');

        }


    }


    public function del($service_id = null){
        if(!$service_id || !$this->core_model->get_by_id('service', array('service_id' => $service_id))){
            $this->session->set_flashdata('error', 'Serviço não encontrado'); 
            redirect('restrita/services');
        }else{

            $this->core_model->delete('service', array('service_id' => $service_id));
            $this->session->set_flashdata('sucesso', 'Serviço deletado com sucesso'); 
            redirect('restrita/services');
        }
    }


    public function service_titulo($titulo){
        $service_id = $this->input->post('service_id'); 

        echo '<pre>'; 
        print_r($service_id); 
        exit; 

        if($this->core_model->get_by_id('service', array('service_titulo' =>$titulo, 'service_id !=' => $service_id ))){
            
            $this->form_validation->set_message('service_titulo','Esse servico já existe');

            return false; 

        }else{

            return true;          
        }
    }
	
}


	

	
