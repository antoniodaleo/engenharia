<?php $this->load->view('layout/nav') ?>


<section class="page-header padding">
<div class="container">
<div class="page-content text-center">
<h2>Nosso servicos</h2>
<p>Construction & Building Html Template.</p>
</div>
</div>
</section>


<section class="service-section bg-grey padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="service-carousel" class="service-carousel box-shadow owl-carousel">

                    <!-- Facciamo il PHP-->
                    <?php foreach($service as $s): ?>
                    <div class="service-item">
                        <div class="service-icon">
                            <?php echo $s->service_icona ; ?>  
                        </div>
                        <h3><?php echo $s->service_titulo ; ?>  </h3>
                        <p><?php echo $s->service_descricao ; ?>  </p>
                        <a href="#" class="read-more">Fale conosco</a>
                        <div class="overlay-icon">
                            <?php echo $s->service_icona ; ?>  
                        </div>
                    </div>
                    <?php endforeach;  ?>
                
                
                
                
                </div>
            </div>
        </div>
    </div>
</section>
