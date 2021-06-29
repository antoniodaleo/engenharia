
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">
                                            <?php echo $titulo ?>
                                        </h3>
                                    </div>
                                    
                                    <div class="card-body">
                                        <?php if($message = $this->session->flashdata('erro') ) : ?>
                                            <div class="alert alert-danger alert-has-icon alert-dismissible show fade">
                                            <div class="alert-icon"><i class="fa fa-exclamation-circle fa-lg"></i> </div>
                                            <div class="alert-body">
                                            <div class="alert-title">Atenção</div>
                                                <button class="close" data-dismiss="alert">
                                                    <span>&times;</span>
                                                </button>
                                                <?php echo $message; ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        
                                        <form>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Senha" />
                                                <label for="inputPassword">Senha</label>
                                            </div>
                                            
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">          
                                                <a class="btn btn-primary" href="">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
           