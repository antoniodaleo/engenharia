
<?php $this->load->view('restrita/layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

  <?php $this->load->view('restrita/layout/navbar'); ?>
 
  <!-- Begin Page Content -->
  <div class="container-fluid">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url('restrita/services') ?>">Servicos</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo ;?></li>
    </ol>
  </nav>

 
  <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <!-- Link para voltar menu Usuario -->
      <div class="card-header py-3">
        <a title="Voltar" href="<?php echo base_url('restrita/services'); ?>" class="btn btn-success btn-sm float-right" > <i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</a>
      </div>

      <!-- Formulario -->
      <div class="card-body">
        <form method="post" name="form_edit">



            <!-- Primeira Linha -->
          <div class="form-group row">
            <div class="col-md-4">
              <label>Titulo</label>
              <input type="text" class="form-control" name="service_titulo" placeholder="Servico titulo.." value="<?php echo set_value('service_titulo'); ?>">
              <?php echo form_error('service_titulo','<small class="form-text text-danger">','</small>',''); ?>  
            </div>
            <div class="col-md-8">
              <label>Descricão</label>
              <input type="text" class="form-control" name="service_descricao" placeholder="Servico descrição..." value="<?php echo set_value('service_descricao'); ?>">
              <?php echo form_error('service_descricao','<small class="form-text text-danger">','</small>',''); ?>  
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label>Escolha + de 400 Iconas - Visita o site <a href="https://www.flaticon.com/" target="_blank">Flaticon</a></label>
              <input type="text" class="form-control" name="service_icona" placeholder="Servico icona..." value="<?php echo set_value('service_icona'); ?>">
              <?php echo form_error('service_icona','<small class="form-text text-danger">','</small>',''); ?>  

            </div>
            <div class="col-md-7">
                <label >Copia o codigo html da icona no site <a href="https://www.flaticon.com/" target="_blank">Flaticon</a> e cola na caixinha ao lado | Veja o exemplo abaixo</label>
                <input type="text" class="form-control" name="service_icona" placeholder="<i></i>" value="<i class='flaticon-industrial-robot'></i>" disabled>


            </div>
          </div>
            

          <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        </form>


      </div>
      
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->