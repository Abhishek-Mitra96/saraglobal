<?php
    require_once 'header.php';
?>


    <!-- page-heading start-->
    <section class="cs-page-heading-area" style="background-image: url(images/bg/6.jpg);">
        <div class="container">
            <div class="section-wrap">
                <div class="row animatedParent animateOnce">
                    <div class="col-sm-12">
                        <div class="cs-page-linkbox animated fadeInLeft slow">
                            <h3>contact</h3>
                            <p><a href="index-mp-layout-1.html">Home</a> / <a href="contact-1.html">contact</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-heading end -->


    <!-- contact-one start-->
    <section class="cs-contact-one">
        <div class="container">
            <div class="section-wrap">
                <div class="row animatedParent animateOnce">
                    <div class="col-md-3 col-sm-6 col-xs-6 cs-full-wd480">
                        <div class="cs-contact-col text-center">
                            <div class="animated flipInX slow delay-250">
                                <div class="hexagon">
                                    <span class="icon icon-House"></span>
                                </div>
                            </div>
                            <h3>Meet Us</h3>
                            <p>Architecture Downtown St, Melbourne Australia</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 cs-full-wd480">
                        <div class="cs-contact-col text-center">
                            <div class="animated flipInX slow delay-500">
                                <div class="hexagon">
                                    <span class="icon icon-Phone2"></span>
                                </div>
                            </div>
                            <h3>phone</h3>
                            <p>(+1) 1245 - 15487- 258<br> (+1) 1245 - 15487- 258</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 cs-full-wd480">
                        <div class="cs-contact-col text-center">
                            <div class="animated flipInX slow delay-750">
                                <div class="hexagon">
                                    <span class="icon icon-Message"></span>
                                </div>
                            </div>
                            <h3>email</h3>
                            <a href="#">indo@yormail.com</a>
                            <a href="#">yourmail@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 cs-full-wd480">
                        <div class="cs-contact-col text-center">
                            <div class="animated flipInX slow delay-1000">
                                <div class="hexagon">
                                    <span class="icon icon-WorldWide"></span>
                                </div>
                            </div>
                            <h3>website</h3>
                            <a href="#">http://www.yourwebsite.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-one end -->

    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-12">
    			<hr style="margin: 2px -20px 20px;border-top: 1px solid #000000;">
    		</div>
    	</div>
    </div>
    <br/>


    <!-- map start-->
    <section class="cs-map-area cs-contact-two">
        <div class="container-fluid">
            <div class="section-wrap">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="cs-contact-field pb50">
                          <h5>keep in touch with us</h5>
                          <form>
                            <input type="text" class="form-control cs-contorl" placeholder="Name">
                            <input type="email" class="form-control cs-contorl" id="exampleInputEmail3" placeholder="Email">
                            <input type="text" class="form-control cs-contorl" placeholder="Subject">
                            <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                            <button class="btn btn-default cs-my-btn-brown" type="submit">Send</button>
                          </form>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6">

                        <div id="map" style="width:100%;height:420px;"></div>

							<script>
							function myMap() {
							  var mapCanvas = document.getElementById("map");
							  var mapOptions = {
							    center: new google.maps.LatLng(51.5, -0.2), zoom: 10
							  };
							  var map = new google.maps.Map(mapCanvas, mapOptions);
							}
							</script>

							<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_0eCCKyjl8aRFce-kXMXO915KnAcDTfc&callback=myMap"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- map end -->
    

    <!-- clients start-->
    <section class="cs-clients-area">
        <div class="container">
            <div class="section-wrap">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="clients-carousel">
                            <div class="item">
                                <img src="images/clients/1.png" alt="images/clients/1.png">
                            </div>
                            <div class="item">
                                <img src="images/clients/2.png" alt="images/clients/2.png">
                            </div>
                            <div class="item">
                                <img src="images/clients/3.png" alt="images/clients/3.png">
                            </div>
                            <div class="item">
                                <img src="images/clients/4.png" alt="images/clients/4.png">
                            </div>
                            <div class="item">
                                <img src="images/clients/1.png" alt="images/clients/1.png">
                            </div>
                            <div class="item">
                                <img src="images/clients/2.png" alt="images/clients/2.png">
                            </div>
                            <div class="item">
                                <img src="images/clients/3.png" alt="images/clients/3.png">
                            </div>
                            <div class="item">
                                <img src="images/clients/4.png" alt="images/clients/4.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- clients end -->





    <?php
        require_once 'footer.php';
    ?>

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/revolution.min.js"></script>  
    <script src="js/jquery.fancybox.pack.js"></script> 
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/jquery.isotope.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/imagesloaded.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/css3-animate-it.js"></script>
    <!-- <script src="js/map-script.js"></script> -->
    <script src="js/validate.js"></script>
    <script src="js/custom.js"></script>

    



</body>

<!-- Mirrored from themeinnovation.com/demo2/html/find.arc/contact-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2017 13:24:47 GMT -->
</html>