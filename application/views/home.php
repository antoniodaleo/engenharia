<?php $this->load->view('layout/nav') ?>


<!-- uno  -->
<div id="main-slider" class="dl-slider">
  <!--
  <div class="single-slide">
    <div class="bg-img kenburns-top-right" style="background-image: url(assets/img/slider-1.jpg);"></div>
      <div class="overlay"></div>
        <div class="slider-content-wrap d-flex align-items-center text-left">
          <div class="container">
            <div class="slider-content">
            <div class="dl-caption medium"><div class="inner-layer"><div data-animation="fade-in-right" data-delay="1s">Laudo Técnico</div></div></div>
            <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="2s">We provide outstanding</div></div>
            </div>
            <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="2.5s">construction services.</div></div></div>
            <div class="dl-caption small"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="3s">We have provided complete remodeling and construction solutions for <br>residential and commercial properties in cities.</div></div></div>
            <div class="dl-btn-group">
            <div class="inner-layer">
            <a href="<?php echo base_url('contact') ?>" class="dl-btn" data-animation="fade-in-left" data-delay="3.5s">Faça um preventivo <i class="arrow_right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  -->
  <div class="single-slide">
    <div class="bg-img kenburns-top-right" style="background-image: url(assets/img/slider-2.jpg);"></div>
      <div class="overlay"></div>
        <div class="slider-content-wrap d-flex align-items-center text-center">
          <div class="container">
            <div class="slider-content">
            <div class="dl-caption medium"><div class="inner-layer"><div data-animation="fade-in-top" data-delay="1s"><?php  echo $about->about_subtitulo ?></div></div></div>
            <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-bottom" data-delay="2s"><?php echo $about->about_titulo ?></div></div>
            </div>
            <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-bottom" data-delay="2.5s">Operamos no setor Industrial</div></div></div>
            <div class="dl-caption small"><div class="inner-layer"><div data-animation="fade-in-bottom" data-delay="3s">Especialista em turbinas e rafinarias <br>estruturas metalicas.</div></div></div>
            <div class="dl-btn-group">
            <div class="inner-layer">
            <a href="<?php echo base_url('contact') ?>" class="dl-btn" data-animation="fade-in-bottom" data-delay="3.5s">Faça um preventivo</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--
  <div class="single-slide">
    <div class="bg-img kenburns-top-right" style="background-image: url(assets/img/slider-3.jpg);"></div>
      <div class="overlay"></div>
        <div class="slider-content-wrap d-flex align-items-center text-right">
          <div class="container">
            <div class="slider-content">
            <div class="dl-caption medium"><div class="inner-layer"><div data-animation="fade-in-left" data-delay="1s">Estruturas Metálicas</div></div></div>
            <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-right" data-delay="2s">We will be happy to take care</div></div>
            </div>
            <div class="dl-caption big"><div class="inner-layer"><div data-animation="fade-in-right" data-delay="2.5s">of your construction works.</div></div></div>
            <div class="dl-caption small"><div class="inner-layer"><div data-animation="fade-in-right" data-delay="3s">We have provided complete remodeling and construction solutions for <br>residential and commercial properties in cities.</div></div></div>
            <div class="dl-btn-group">
            <div class="inner-layer">
            <a href="<?php echo base_url('contact') ?>" class="dl-btn" data-animation="fade-in-right" data-delay="3.5s">Faça um preventivo <i class="arrow_right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  -->
</div>

<!-- due -->
<section class="about-section padding">
  <div class="container">
    <div class="row about-wrap">

      <div class="col-lg-6 sm-padding">
        <div class="about-content wow fadeInLeft">
          <h2><?php echo $about->about_titulo ?></h2>
          <p><?php echo $about->about_descricao ?></p>
          <a href="<?php echo base_url('about') ?>" class="default-btn">Sobre Nós</a>
        </div>
      </div>

      <div class="col-lg-6 sm-padding">
        <ul class="about-promo">

         
          <li class="about-promo-item wow fadeInUp">
            <i class=" <?php echo $about->about_icona_1?>"></i>
            <div>
              <h3><?php echo $about->about_qld_1 ?></h3>
              <p><?php echo $about->about_descricao_qld_1 ?></p>
            </div>
          </li>
        
          <li class="about-promo-item wow fadeInUp" data-wow-delay="300ms">
            <i class=" <?php echo $about->about_icona_2?>"></i>
            <div>
              <h3><?php echo $about->about_qld_2 ?></h3>
              <p><?php echo $about->about_descricao_qld_2 ?></p>
            </div>
          </li>
          <li class="about-promo-item wow fadeInUp" data-wow-delay="500ms">
            <i class=" <?php echo $about->about_icona_3?>"></i>
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


<!-- tre -->
<section class="service-section bg-grey padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div id="service-carousel" class="service-carousel box-shadow owl-carousel">
        
        <div class="service-item">
          <div class="service-icon">
            <i class="flaticon-3d-printer"></i>
          </div>
          <h3>Laudo Técnico de manutenção Industrial</h3>
          <p>We are committed a sustainable future fostering a collaborative spirit.</p>
          <a href="#" class="read-more">Read More</a>
         
          <div class="overlay-icon">
            <i class="flaticon-3d-printer"></i>
          </div>
        </div>


        <div class="service-item">
        <div class="service-icon">
        <i class="flaticon-industrial-robot"></i>
      </div>


      <h3>Manutenção em Tanque </h3>
      <p>We are committed a sustainable future fostering a collaborative spirit.</p>
      <a href="#" class="read-more">Read More</a>
      <div class="overlay-icon">
      <i class="flaticon-industrial-robot"></i>
      </div>
      </div>
      <div class="service-item">
      <div class="service-icon">
      <i class="flaticon-assembly-line"></i>
      </div>
      <h3>Substituicao de motores</h3>
      <p>We are committed a sustainable future fostering a collaborative spirit.</p>
      <a href="#" class="read-more">Read More</a>
      <div class="overlay-icon">
      <i class="flaticon-assembly-line"></i>
      </div>
      </div>
      <div class="service-item">
      <div class="service-icon">
      <i class="flaticon-conveyor"></i>
      </div>
      <h3>Caldeiraira em geral</h3>
      <p>We are committed a sustainable future fostering a collaborative spirit.</p>
      <a href="#" class="read-more">Read More</a>
      <div class="overlay-icon">
      <i class="flaticon-conveyor"></i>
      </div>
      </div>
      <div class="service-item">
      <div class="service-icon">
      <i class="flaticon-control-system"></i>
      </div>
      <h3>Manutenção mecânicas</h3>
      <p>We are committed a sustainable future fostering a collaborative spirit.</p>
      <a href="#" class="read-more">Read More</a>
      <div class="overlay-icon">
      <i class="flaticon-control-system"></i>
      </div>
      </div>
      </div>
      </div>
    </div>
  </div>
</section>


<!-- quattro -->
<section class="projects-section padding">
  <div class="container">
  <div class="row d-flex align-items-center">
    <div class="col-lg-8 col-md-6">

      <div class="section-heading mb-40">

        <span>Ecologia</span>
        <h2>Servicos de estrutura  <br>metalicas</h2>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 text-right">
      <a href="#" class="default-btn">O que fazemos?</a>
    </div>
    </div>
    <div id="projects-carousel" class="projects-carousel box-shadow owl-carousel">

      <div class="project-item">
        <img src="assets/img/project-1.jpg" alt="projects">
        <div class="overlay"></div>
          <a href="assets/img/project-1.jpg" class="view-icon img-popup" data-gall="project"> <i class="fas fa-expand"></i></a>
        <div class="projects-content">
          <a href="#" class="category">Energia</a>
          <h3><a href="#" class="tittle">Energia Eolica</a></h3>
        </div>
      </div>

      <div class="project-item">
        <img src="assets/img/project-2.jpg" alt="projects">
        <div class="overlay"></div>
          <a href="assets/img/project-2.jpg" class="view-icon img-popup" data-gall="project"> <i class="fas fa-expand"></i></a>
          <div class="projects-content">
          <a href="#" class="category">Arquitetura</a>
          <h3><a href="#" class="tittle">Predios e Edificios</a></h3>
        </div>
      </div>

      <div class="project-item">
        <img src="assets/img/project-3.jpg" alt="projects">
        <div class="overlay"></div>
          <a href="assets//img/project-3.jpg" class="view-icon img-popup" data-gall="project"> <i class="fas fa-expand"></i></a>
          <div class="projects-content">
          <a href="#" class="category">Mecanica</a>
          <h3><a href="#" class="tittle">Elevador e elevador Hidráulicos</a></h3>
          </div>
      </div>

      <div class="project-item">
        <img src="assets/img/project-4.jpg" alt="projects">
        <div class="overlay"></div>
          <a href="assets/img/project-4.jpg" class="view-icon img-popup" data-gall="project"> <i class="fas fa-expand"></i></a>
          <div class="projects-content">
          <a href="#" class="category">Architecture</a>
          <h3><a href="#" class="tittle">Milwauke museum wisconsin</a></h3>
          </div>
      </div>

      <div class="project-item">
        <img src="assets/img/project-5.jpg" alt="projects">
        <div class="overlay"></div>
          <a href="assets/img/project-5.jpg" class="view-icon img-popup" data-gall="project"> <i class="fas fa-expand"></i></a>
          <div class="projects-content">
          <a href="#" class="category">Design</a>
          <h3><a href="#" class="tittle">The dancing house prague</a></h3>
          </div>
      </div>
    </div>
  </div>
</section>

<!-- cinque -->
<section class="content-section padding">
  <div class="container">
    <div class="row content-wrap">
      <div class="col-lg-6 sm-padding wow fadeInLeft" data-wow-delay="100ms">
      <img class="box-shadow" class="box-shadow" src="assets/img/content-1.jpg" alt="img">
      </div>
      <div class="col-lg-6 sm-padding">
        <div class="content-info wow fadeInRight" data-wow-delay="300ms">
          <span>Melhora sua Industria</span>
          <h2>Offerecemos um trabalho serio e etico</h2>
          <p>Somos comprometidos em aumentar seu negocio ou maximizar seu processo. ......</p>
          <a href="<?php echo base_url('contact') ?>" class="default-btn">Fale conosco</a>
        </div>
      </div>
    </div>
  </div>
</section>





