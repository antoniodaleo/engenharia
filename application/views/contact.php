<?php $this->load->view('layout/nav') ?>

<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="350" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.9756317862425!2d-38.49792998592956!3d-3.8153420446874504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74f928229fb7d%3A0xa0fc59418c085fce!2sR.%20Ara%C3%BAjo%20Torre%C3%A3o%2C%20547%20-%20Messejana%2C%20Fortaleza%20-%20CE%2C%2060841-470!5e0!3m2!1spt-BR!2sbr!4v1624952994760!5m2!1spt-BR!2sbr" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.emojilib.com/"></a></div><style>.mapouter{position:relative;text-align:right;height:350px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:100%;}</style></div>
<section class="contact-section bg-grey padding">
<div class="dots"></div>
    <div class="container">
    <div class="contact-wrap d-flex align-items-center row">
    <div class="col-md-6 padding-15">
    <div class="contact-info">
    <h2>Entre em contato conosco <br>envia uma mensagem!</h2>
    <p>Redison is a different kind of architecture practice. Founded by LoganCee in 1991, we’re an employee-owned firm pursuing a democratic design process that values everyone’s input.</p>
    <h3>Rua araujo Torreão, 547 <br>Fortaleza, CE </h3>
    <h4><span>Email:</span> lobato@lobato.com <br> <span>Telefone:</span> +85 98860 1287<br> <span>Fax:</span> +88 (0) 202 0000 001</h4>
    </div>
    </div>
    <div class="col-md-6 padding-15">
    <div class="contact-form">
    <form action="#" method="post" id="ajax_form" class="form-horizontal">
    <div class="form-group colum-row row">
    <div class="col-sm-6">
        <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
    </div>
    <div class="col-sm-6">
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
    </div>
    </div>
    <div class="form-group row">
    <div class="col-md-12">
    <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>
    </div>
    </div>
    <div class="form-group row">
    <div class="col-md-12">
    <button id="submit" class="default-btn" type="submit">Send Message</button>
    </div>
    </div>
    <div id="form-messages" class="alert" role="alert"></div>
    </form>
    </div>
    </div>
    </div>
    </div>
</section>

