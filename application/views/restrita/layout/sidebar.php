    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('/') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-microchip"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Engenharia Lobato</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Home -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('/') ?>">
        <i class="fa fa-home" aria-hidden="true"></i>
          <span>Home</span></a>
      </li>
    
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Modulos
      </div>

      <!-- OPERACAO -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-hdd"></i>
          <span>Api</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="collapseOne" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Escolha uma opção:</h6>
            <a title="Gerenciar Serial Number" class="collapse-item" href="<?php echo base_url('cpu'); ?>"><i class="fas fa-barcode"></i>&nbsp; Serial Number</a>
          </div>
        </div>
      </li>

      <!-- CADASTROS-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-database"></i>
          <span>Cadastros</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="collapseTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Escolha uma opção:</h6>
            <a title="Gerenciar Marca" class="collapse-item" href="<?php echo base_url('marca'); ?>"><i class="fas fa-copyright"></i>&nbsp; Marca</a>
            <a title="Gerenciar Tipo" class="collapse-item" href="<?php echo base_url('tipo'); ?>"><i class="fas fa-desktop"></i>&nbsp; Tipo</a>
            <a title="Gerenciar Modelo" class="collapse-item" href="<?php echo base_url('modelo'); ?>"><i class="fas fa-info-circle"></i>&nbsp; Modelo</a>
            <a title="Gerenciar Andar" class="collapse-item" href="<?php echo base_url('andar'); ?>"><i class="fas fa-building"></i>&nbsp; Andar</a>

          </div>
        </div>
      </li>


     

      <hr class="sidebar-divider">
      <!-- Nav Item - Pages Collapse Menu CONFIGURAÇÕES -->
      <?php if($this->ion_auth->is_admin()): ?>
        <!-- Heading -->
          <div class="sidebar-heading">
            Configurações
          </div>

          <!-- Nav Item - Usuarios -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('usuarios')?>">
            <i class="fa fa-users" aria-hidden="true"></i>
              <span>Usuarios</span></a>
          </li>

          <!-- Nav Item - Conf de sistema -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('sistema')?>">
            <i class="fa fa-cogs" aria-hidden="true"></i>
              <span>Sistema</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">
        
      <?php endif; ?>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">