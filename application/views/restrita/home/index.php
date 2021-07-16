

<?php $this->load->view('restrita/layout/sidebar'); ?>

    

      <!-- Main Content -->
      <div id="content">

        <?php $this->load->view('restrita/layout/navbar'); ?>
       
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Home</h1>

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

          <!-- Mensagem de info -->
          <?php if($message = $this->session->flashdata('info')): ?>
            <div class="row">
              <div class="col-md-12">
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;<?php echo $message ?></strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              </div>
            </div>    
          <?php endif; ?>

          <?php /* 
          <!-- 1º  Content -->
            <div class="row">
              <!-- Total de vendas -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">TITULO</div>
                        <div class="h5 mb-0 font-weight-bold text-success"></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-shopping-cart text-success"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Total de servicos -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">TITULO</div>
                        <div class="h5 mb-0 font-weight-bold text-primary"><?php //8echo 'R$&nbsp;'. $soma_ordem_servicos->ordem_servico_valor_total ?>  </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-shopping-basket fa-2x text-primary"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Contas a pagar -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">TITULO</div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-danger"><?php //echo 'R$&nbsp;'.$total_pagar->conta_pagar_valor; ?></div>
                          </div>
                  
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-money-bill-alt fa-3x text-danger"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Contas a receber -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">TITULO</div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-warning"><?php //echo 'R$&nbsp;'.($total_receber->conta_receber_valor == null ? '0,00' : $total_receber->conta_receber_valor) ; ?></div>
                          </div>
                  
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-hand-holding-usd fa-3x text-warning"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          */ ?>
          <!-- 2º Content -->
          <div class="row">
            <div class="col-lg-6 mb-4">
              <!-- ELENCO DE EMAIL -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success">Mensagem recebida</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 15rem;" src="<?php echo base_url('assets/restrita/img/email.svg') ?>" alt="">
                  </div>
                  
                  <!-- TABELA COM EMAIL RECEBIDAS -->
                  <div class="table-responsive">
                      <table class="table table-striped table-borderless">
                          <thead>
                              <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Mensagem</th>
                              </tr>
                          </thead>
                          
                          <tbody>
                            <?php foreach($email as $e): ?>
                              <tr>
                                <td class="text-left"><?php echo $e->email_id ?></td>
                                <td class="text-left"><?php echo $e->email_descricao ?></td>
                                <td class="text-center"><?php echo $e->email_mensagem  ?></td>
                              </tr>
                            <?php endforeach; ?>
                          </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-lg-6 mb-4">
              <!-- SERVICOS -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Serviços</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 9rem;" src="<?php echo base_url('assets/restrita/img/servicos.svg') ?>" alt="">
                  </div>
                  <!-- TABELA COM SERVICOS -->
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Nome do servicço</th>
                          <th class="text-center">Descrição</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($servico as $s): ?>
                          <tr>
                            <td class="text-left"><?php echo $s->service_titulo ?></td>
                            <td class="text-center"><?php echo $s->service_descricao  ?></td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     