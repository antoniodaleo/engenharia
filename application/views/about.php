<?php $this->load->view('layout/nav') ?>


<section class="page-header padding">
    <div class="container">
        <div class="page-content text-center">
        <h2>Sobre Nós</h2>
        <p><?php echo $about->about_titulo ?></p>
        </div>
    </div>
</section>

<section class="about-section padding">
    <div class="container">
        <div class="row about-wrap">
            <div class="col-lg-6 sm-padding">
            <div class="about-content wow fadeInLeft">
            <h2><?php echo $about->about_subtitulo ?></h2>
            <p><?php echo $about->about_descricao ?></p>
            <a href="#" class="default-btn">Fale conosco</a>
            </div>
            </div>
            <div class="col-lg-6 sm-padding">
            <ul class="about-promo">
                <li class="about-promo-item wow fadeInUp">
                    <i class="flaticon-factory"></i>
                    <div>
                        <h3><?php echo $about->about_qld_1 ?></h3>
                        <p><?php echo $about->about_descricao_qld_1 ?></p>
                    </div>
                </li>

                <li class="about-promo-item wow fadeInUp" data-wow-delay="300ms">
                    <i class="flaticon-worker"></i>
                    <div>
                        <h3><?php echo $about->about_qld_2 ?></h3>
                        <p><?php echo $about->about_descricao_qld_2 ?></p>
                    </div>
                </li>
                
                <li class="about-promo-item wow fadeInUp" data-wow-delay="500ms">
                    <i class="flaticon-gear"></i>
                    <div>
                        <h3><?php echo $about->about_qld_3 ?></h3>
                        <p><?php echo $about->about_descricao_qld_3 ?></p>
                    </div>
                </li>
            </ul>
            </div>
        </div>
    </div>
</section>




