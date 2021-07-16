<?php $this->load->view('restrita/layout/sidebar'); ?>


      <!-- Main Content -->
      <div id="content">

        <?php $this->load->view('restrita/layout/navbar'); ?>
       
        <!-- Begin Page Content -->
        <div class="container-fluid">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('restrita/about') ?>">About</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo ;?></li>
          </ol>
        </nav>

       
        <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <!-- Link para voltar menu Usuario -->
            <div class="card-header py-3">
              <a title="About" href="<?php echo base_url('restrita/about'); ?>" class="btn btn-success btn-sm float-right" target="_blank" > <i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</a>
            </div>

            <!-- Mensagem de sucesso -->
            <?php if($message = $this->session->flashdata('sucesso')): ?>
              <div class="row">
                <div class="col-md-12">
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong><i class="fas fa-check-circle"></i></i>&nbsp;<?php echo $message ?></strong> 
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                </div>
              </div>    
            <?php endif; ?>

            <!-- Mensagem de erro -->
            <?php if($message = $this->session->flashdata('error')): ?>

              <div class="row">
                <div class="col-md-12">
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;<?php echo $message ?></strong> 
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                </div>
              </div>    
              
            <?php endif; ?>



            <!-- Formulario -->
            <div class="card-body">
                <?php
                    $attributos = array(
                      'name' => 'form_core', 
                    ); 

                    if(isset($about)){
                      $about_id = $about->about_id; 
                    }else{
                      $about_id = ''; 
                    }
                  ?>
                <?php echo form_open('restrita/about/core/'.$about_id); ?>
                  
                <!-- Primeira -->
                <h4>Sobre Nós</h4>
                
                <!-- Helper  -->
                <div class="form-group row">
                  <div class="col-md-12">
                    <p>
                      <a class="btn btn-info" data-toggle="collapse" href="#collapseTitulo" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Titulo ?
                      </a>
                      <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapseDescricao" aria-expanded="false" aria-controls="collapseExample">
                        Descricao ? 
                      </button>
                    </p>
                    <div class="collapse" id="collapseTitulo">
                      <div class="card card-body">
                          <p>Inserir o titulo no Header da pagina Sobre Nós</p>
                      </div>
                    </div>  

                    <div class="collapse" id="collapseDescricao">
                      <div class="card card-body">
                          <p>Inserir a descrição abaixo da foto principal na pagina Sobre Nós</p>
                      </div>
                    </div>  
                  </div>
                </div>
                <!-- Fine Helper  -->

                <div class="form-group row">
                    <div class="col-md-6">
                        <label>Titulo</label>
                        <input type="text" class="form-control" name="about_titulo" placeholder="Titulo" value="<?php echo (isset($about) ? $about->about_titulo : set_value('Titulo')); ?>">
                        <?php echo form_error('about_titulo','<small class="form-text text-danger">','</small>'); ?>  
                    </div>
                    <div class="col-md-6">
                        <label>Subtitlo</label>
                        <input type="text" class="form-control" name="about_subtitulo" placeholder="SubTitulo" value="<?php echo (isset($about) ? $about->about_subtitulo : set_value('Subtitulo')); ?>">
                        <?php echo form_error('about_subtitulo','<small class="form-text text-danger">','</small>',''); ?>  
                    </div>
                </div>
                
                <!-- Segunda -->
                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Descrição</label>
                        <textarea type="text" class="form-control" name="about_descricao" placeholder="Descricao" ><?php echo (isset($about) ? $about->about_descricao : set_value('Descricao')); ?></textarea>
                        <?php echo form_error('about_descricao','<small class="form-text text-danger">','</small>',''); ?>  
                    </div>
                </div>
                
                <hr>
                <!-- Fine Helper  -->

                <!-- Terçeira -->
                  
                <h4>Qualidade da empresa</h4>
                <!-- Helper  -->
                <div class="form-group row">
                  <div class="col-md-12">
                    <p>
                      <a class="btn btn-info" data-toggle="collapse" href="#collapseQualidade" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Qualidades ?
                      </a>
                    </p>
                    <div class="collapse" id="collapseQualidade">
                      <div class="card card-body">
                          <p>No lado direito de Subtitulo e Descrição existe uma seção com a possibilidade de
                          adicionar 3 qualidades da empresa. </p>
                      </div>
                    </div>  
                  </div>
                </div>
                <!-- Fine Helper  -->


                <!-- Qualidade 1 -->
                <div class="form-group row">   
                  <div class="col-md-6">
                    <label>1) Qualidade</label>
                    <input type="text" class="form-control" name="about_qld_1" placeholder="Titulo" value="<?php echo (isset($about) ? $about->about_qld_1 : set_value('Qualidade 1')); ?>">
                    <?php echo form_error('about_qld_1','<small class="form-text text-danger">','</small>'); ?>  
                  </div>


                  <div class="col-md-6">
                    <label>Descrição Qualidade</label>
                    <textarea type="text" class="form-control" name="about_descricao_qld_1" placeholder="Descricao" ><?php echo (isset($about) ? $about->about_descricao_qld_1 : set_value('Descricao Qualidade 1')); ?></textarea>
                    <?php echo form_error('about_descricao_qld_1','<small class="form-text text-danger">','</small>',''); ?>  
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-5">
                    <label>Escolha + de 400 Iconas - Visita o site <a href="https://www.flaticon.com/" target="_blank">Flaticon</a></label>
                    <input type="text" class="form-control" name="about_icona_1" placeholder="Quadidade icona..." value="<?php echo (isset($about) ? $about->about_icona_1 : set_value('Icona'));  ?>">
                    <?php echo form_error('about_icona_1','<small class="form-text text-danger">','</small>',''); ?>  

                  </div>
                  <div class="col-md-7">
                      <label >Copia o codigo html da icona no site <a href="https://www.flaticon.com/" target="_blank">Flaticon</a> e cola na caixinha ao lado | Veja o exemplo abaixo</label>
                      <input type="text" class="form-control" name="service_icona_1" placeholder="<i></i>" value="<i class='flaticon-industrial-robot'></i>" disabled>
                  </div>
                </div>

                <hr>
                 <!-- Qualidade 2 -->
                <div class="form-group row">   
                  <div class="col-md-6">
                    <label>2) Qualidade</label>
                    <input type="text" class="form-control" name="about_qld_2" placeholder="Titulo" value="<?php echo (isset($about) ? $about->about_qld_2 : set_value('Qualidade 2')); ?>">
                    <?php echo form_error('about_qld_2','<small class="form-text text-danger">','</small>'); ?>  
                  </div>


                  <div class="col-md-6">
                    <label>Descrição Qualidade</label>
                    <textarea type="text" class="form-control" name="about_descricao_qld_2" placeholder="Descricao" ><?php echo (isset($about) ? $about->about_descricao_qld_2 : set_value('Descricao Qualidade 2')); ?></textarea>
                    <?php echo form_error('about_descricao_qld_2','<small class="form-text text-danger">','</small>',''); ?>  
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-5">
                    <label>Escolha + de 400 Iconas - Visita o site <a href="https://www.flaticon.com/" target="_blank">Flaticon</a></label>
                    <input type="text" class="form-control" name="about_icona_2" placeholder="Quadidade icona..." value="<?php echo (isset($about) ? $about->about_icona_2 : set_value('Icona'));  ?>">
                    <?php echo form_error('about_icona_2','<small class="form-text text-danger">','</small>',''); ?>  

                  </div>
                  <div class="col-md-7">
                      <label >Copia o codigo html da icona no site <a href="https://www.flaticon.com/" target="_blank">Flaticon</a> e cola na caixinha ao lado | Veja o exemplo abaixo</label>
                      <input type="text" class="form-control" name="service_icona" placeholder="<i></i>" value="<i class='flaticon-industrial-robot'></i>" disabled>
                  </div>
                </div>

                <hr>
                <!-- Qualidade 3 -->
                <div class="form-group row">   
                  <div class="col-md-6">
                    <label>3) Qualidade</label>
                    <input type="text" class="form-control" name="about_qld_3" placeholder="Titulo" value="<?php echo (isset($about) ? $about->about_qld_3 : set_value('Qualidade 3')); ?>">
                    <?php echo form_error('about_qld_3','<small class="form-text text-danger">','</small>'); ?>  
                  </div>


                  <div class="col-md-6">
                    <label>Descrição Qualidade</label>
                    <textarea type="text" class="form-control" name="about_descricao_qld_3" placeholder="Descricao" ><?php echo (isset($about) ? $about->about_descricao_qld_3 : set_value('Descricao Qualidade 3')); ?></textarea>
                    <?php echo form_error('about_descricao_qld_3','<small class="form-text text-danger">','</small>',''); ?>  
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-5">
                    <label>Escolha + de 400 Iconas - Visita o site <a href="https://www.flaticon.com/" target="_blank">Flaticon</a></label>
                    <input type="text" class="form-control" name="about_icona_3" placeholder="Quadidade icona..." value="<?php echo (isset($about) ? $about->about_icona_3 : set_value('Icona'));  ?>">
                    <?php echo form_error('about_icona_3','<small class="form-text text-danger">','</small>',''); ?>  

                  </div>
                  <div class="col-md-7">
                      <label >Copia o codigo html da icona no site <a href="https://www.flaticon.com/" target="_blank">Flaticon</a> e cola na caixinha ao lado | Veja o exemplo abaixo</label>
                      <input type="text" class="form-control" name="service_icona" placeholder="<i></i>" value="<i class='flaticon-industrial-robot'></i>" disabled>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>


                <?php echo form_close(); ?>
            </div>
            
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
