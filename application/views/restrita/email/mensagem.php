
<?php $this->load->view('restrita/layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

  <?php $this->load->view('restrita/layout/navbar'); ?>
 
  <!-- Begin Page Content -->
  <div class="container-fluid">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url('restrita/email') ?>">Email</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo ;?></li>
    </ol>
  </nav>

 
  <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <!-- Link para voltar menu Usuario -->
      <div class="card-header py-3">
        <a title="Voltar" href="<?php echo base_url('restrita/email'); ?>" class="btn btn-success btn-sm float-right" > <i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</a>
      </div>

      <!-- Formulario -->
      <div class="card-body">
        
            <!-- Primeira Linha -->
            <div class="form-group row">
              <div class="col-md-4">
                <label>Email</label>
                <input type="text" class="form-control" disabled name="email_descricao" placeholder="Email.." value="<?php echo $email->email_descricao; ?>">
              </div>
              <div class="col-md-4">
                <label>Nome</label>
                <input type="text" class="form-control" disabled name="service_descricao" placeholder="Nome ..."  value="<?php echo $email->email_nome; ?>">
              </div>
              <div class="col-md-4">
                <label>Data</label>
                <input type="date" class="form-control " disabled name="conta_pagar_data_vencimento" value="<?php echo $email->email_data; ?>">
              </div>
            </div>
             <!-- Segunda Linha -->
            <div class="form-group row">
              <div class="col-md-12">
                <label>Mensagem</label>

                <textarea class="form-control" disabled><?php echo $email->email_mensagem ?></textarea>
              </div>
            </div>


        <input type="hidden" class="form-control" name="service_id" placeholder="" value="<?php echo $email->email_id; ?>">

      </div>
      
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->