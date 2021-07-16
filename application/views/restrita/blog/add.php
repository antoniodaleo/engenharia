
<?php $this->load->view('restrita/layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

  <?php $this->load->view('restrita/layout/navbar'); ?>
 
  <!-- Begin Page Content -->
  <div class="container-fluid">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url('restrita/blog') ?>">Blog</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo ;?></li>
    </ol>
  </nav>

 
  <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <!-- Link para voltar menu Usuario -->
      <div class="card-header py-3">
        <a title="Voltar" href="<?php echo base_url('restrita/blog'); ?>" class="btn btn-success btn-sm float-right" > <i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</a>
      </div>

      <!-- Formulario -->
      <div class="card-body">
        <form method="post" name="form_add">


        <!-- Primeira Linha -->
        <div class="form-group row">
            <div class="col-md-2">
                <label>ID do post</label>
                <input type="text" name="blog_id" readonly class="form-control b-0" value=""> 
            </div>
            <div class="col-md-7">
                <label>Titulo do post</label>
                <input type="text" name="blog_titulo" class="form-control" value="">
                <?php echo form_error('blog_titulo','<div class="text-danger">','</div>') ?>
            </div>
            <div class="col-md-3">
                <label>Data do post</label>                                         
                <input type="date" class="form-control" name="blog_data" placeholder="Data do post" value="">
                <?php echo form_error('blog_data','<small class="form-text text-danger">','</small>',''); ?>  
            </div>
        </div>


        <!-- Segunda Linha -->
        <div class="form-group row">
            <div class="col-md-12">
                <label>Descrição do post</label>
                <textarea name="blog_descricao" id="" class="form-control"><?php echo (isset($post) ? $post->post_descricao : set_value('post_descricao')) ; ?></textarea>
                <?php echo form_error('blog_descricao','<div class="text-danger">','</div>') ?>
            </div>
        </div>
          
        <!-- Terza Linha -->
        <div class="form-grou row">
            <div class="col-md-12">
                <label >Escreva seu artigo</label>
                <textarea name="blog_body" id="blog_body" class="form-control"></textarea>
                <?php echo form_error('blog_body','<div class="text-danger">','</div>') ?>
            </div>

        </div>

         <!-- Quarta linha de dados -->
         <div class="form-row">
            <div class="form-group col-md-8">
                <label>Imagens do post</label>
                <div id="fileuploader"> 
                            
                </div>
                <div id="erro_uploaded" class="text-danger">

                </div>

                <?php echo form_error('fotos_produtos', '<div class="text-danger">','</div>'); ?>
            </div>
        </div>
                      
        <!-- Quinta linha de dados -->
        <div class="form-row">
            <div class="col-md-12">

            <?php if(isset($blog)): ?>

            <div id="uploaded_image" class="text-danger">
                <?php foreach($fotos_produto as $foto): ?>
                    <ul style="list-style: none; display: inline-block">
                        <li>
                            <img src="<?php echo base_url('uploads/produtos/'.$foto->foto_caminho) ;?>" width="80" class="img-thumbnail mr-1 mb-2"  >
                            <input type="hidden" name="fotos_produtos[]" value="<?php echo $foto->foto_caminho ;?>">
                            <a href="javascript:(void)" class="btn btn-danger d-block btn-icon mx-auto mb-30 btn-remove"><i class="fas fa-times"></i></a>
                        </li>
                    </ul>
                <?php endforeach; ?>
            </div>

            <?php else: ?>

                <div id="uploaded_image" class="text-danger">

                </div>

            <?php endif; ?>
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