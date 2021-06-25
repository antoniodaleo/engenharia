


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