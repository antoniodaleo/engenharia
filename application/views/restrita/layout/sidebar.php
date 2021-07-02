    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('/') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
        <i class="fab fa-slideshare"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Engenharia Lobato</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Home -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('restrita/home') ?>">
        <i class="fa fa-home" aria-hidden="true"></i>
          <span>Home</span></a>
      </li>
    
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Gerenciamento Site
      </div>

      <!-- GERENCIAMENTO SITE -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <i class="fas fa-sitemap"></i>
          <span>SITE</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="collapseOne" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Escolha uma opção:</h6>
            <a title="Gerenciar Home" class="collapse-item" href="<?php echo base_url('restrita/site'); ?>"><i class="fas fa-home"></i></i>&nbsp; Home</a>
            <a title="Gerenciar Sobre Nos" class="collapse-item" href="<?php echo base_url('restrita/about'); ?>"><i class="fas fa-question-circle"></i>&nbsp; Sobre Nós</a>
            <a title="Gerenciar Servicos" class="collapse-item" href="<?php echo base_url('restrita/services'); ?>"><i class="fas fa-wrench"></i></i>&nbsp; Serviços</a>
            <a title="Gerenciar Contato" class="collapse-item" href="<?php echo base_url('restrita/contact'); ?>"><i class="fas fa-address-book"></i>&nbsp; Contato</a>          
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
            <a class="nav-link" href="<?php echo base_url('restrita/usuarios')?>">
            <i class="fa fa-users" aria-hidden="true"></i>
              <span>Usuarios</span></a>
          </li>

          <!-- Nav Item - Conf de sistema -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('restrita/sistema')?>">
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