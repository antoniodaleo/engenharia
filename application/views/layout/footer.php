<!-- Footer -->
<section class="widget-section padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-6 sm-padding">
        <div class="widget-content">
          <a href="#"><img src="assets/img/logo-light.png" alt="brand"></a>
          <p>Building your own home is about desire, fantasy. But it’s achievable anyone can do it.</p>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6 sm-padding">
        <div class="widget-content">
          <h4>Company</h4>
          <ul class="widget-links">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Our Services</a></li>
            <li><a href="#">Clients Reviews</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 sm-padding">
        <div class="widget-content">
          <h4>Headquaters</h4>
          <p>962 Fifth Avenue, 3rd Floor New York, NY10022</p>
          <span><a href="http://html.dynamiclayers.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a8e0cdc4c4c7e8e9c4cdd0c9fcc0cdc5cd86c6cddc">[email&#160;protected]</a></span>
          <span>(+123) 456 789 101</span>
        </div>
      </div>

      <!-- Email Subscribe -->
      <div class="col-lg-4 col-sm-6 sm-padding">
        <div class="widget-content">
        <h4>Newslatter Subscription</h4>
        <p>Subscribe and get 10% off from our <br>architecture company.</p>
        <div class="subscribe-box clearfix">
          <div class="subscribe-form-wrap">
            <div action="#" class="subscribe-form">
              <input type="email" name="email" id="email" class="form-input" placeholder="Enter Your Email Address...">         
              <button type="submit" class="submit-btn" id="butsave">Subscribe</button>
          
              <div id="subscribe-result">
                <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                </div>
                
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div><!--End Row-->
  </div><!--End Container-->
</section>


<footer class="footer-section align-center">
    <div class="container">
        <p><a href="templateshub.net">Templates Hub</a></p>
    </div>
</footer>
<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_carrot-up"></i></a>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="<?php echo base_url('assets/js/vendor/jquery-1.12.4.min.js') ?>"></script>

    
<script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js') ?>"></script>

<script src="<?php echo base_url('assets/js/vendor/tether.min.js') ?>"></script>

<script src="<?php echo base_url('assets/js/vendor/headroom.min.js') ?>"></script>

<script src="<?php echo base_url('assets/js/vendor/owl.carousel.min.js') ?>"></script>

<script src="<?php echo base_url('assets/js/vendor/smooth-scroll.min.js') ?>"></script>

<script src="<?php echo base_url('assets/js/vendor/venobox.min.js') ?>"></script>

<script src="<?php echo base_url('assets/js/vendor/jquery.ajaxchimp.min.js') ?>"></script>

<script src="<?php echo base_url('assets/js/vendor/slick.min.js') ?>"></script>

<script src="<?php echo base_url('assets/js/vendor/waypoints.min.js') ?>"></script>

<script src="<?php echo base_url('assets/js/vendor/odometer.min.js') ?>"></script>

<script src="<?php echo base_url('assets/js/vendor/wow.min.js') ?>"></script>

<script src="<?php echo base_url('assets/js/main.js') ?>"></script>


<script>
    $(document).ready(function() {
        $('#butsave').on('click', function() {
        
            var email = $('#email').val();
            if(email!="" ){
                $("#butsave").attr("disabled", "disabled");
                $.ajax({
                    url: "<?php echo base_url("Home/savedata");?>",
                    type: "POST",
                    data: {
                        type: 1,
                        email: email,
                        
                    },
                    cache: false,
                    success: function(dataResult){
                        var dataResult = JSON.parse(dataResult);
                        if(dataResult.statusCode==200){
                            $("#butsave").removeAttr("disabled");
                            $('#fupForm').find('input:text').val('');
                            $("#success").show();
                            $('#success').html('Email cadastrada com sucesso !'); 						
                        }
                        else if(dataResult.statusCode==201){
                        alert("Error occured !");
                        }
                        
                    }
                });
            }
            else{
                alert('Preencher os campos !');
            }
        });
    });
</script>
</body>

<!-- index.html  29 Nov 2019 03:30:38 GMT -->
</html>