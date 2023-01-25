<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Human Hotel</title>
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/image/logo.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  </head>
  <body>

  <nav style="height: 100px; margin-top: -15px;" class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo base_url('Welcome/index'); ?>"><img src="<?php echo base_url() ?>assets/image/logo.png" style="width:100px; height: 95px;"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?php echo base_url('Welcome/rooms'); ?>" class="nav-link">Accueil</a></li>
	          <li class="nav-item"><a href="<?php echo base_url('Welcome/rooms'); ?>" class="nav-link">Nos chambres</a></li>
	          <li class="nav-item"><a href="<?php echo base_url('Welcome/restaurant'); ?>" class="nav-link">Restaurant</a></li>
	          <!-- <li class="nav-item"><a href="<?php echo base_url('Welcome/about'); ?>" class="nav-link">A propos</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
	          <li class="nav-item"><a href="<?php echo base_url('Welcome/contact'); ?>" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('<?php echo base_url() ?>assets/images/image_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	        <div class="text">
	                    <p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="<?php echo base_url('Welcome/rooms'); ?>">Accueil</a></span> <span class="mr-2"><a href="<?php echo base_url('Welcome/rooms'); ?>">Restaurant</a></span> <span>MENU</span></p>
	                    <h1 class="mb-4 bread">MENU</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
          	<div class="row">
                <?php for($i=0; $i<count($menu); $i++){ ?>
                    <div class="col-sm col-md-6 col-lg-6 ftco-animate">
                        <div class="room">
                            <div class="pricing-entry d-flex ftco-animate">
						        <div class="img" style="background-image: url(<?php echo base_url() ?>assets/image/<?php echo $menu[$i]->PHOTOS; ?>);"></div>
						        <div class="desc pl-4">
							        <div class="d-flex text align-items-center">
								        <h3><span><?php echo $menu[$i]->NOM;?></span></h3>
								        <span class="price">Ar<?php echo $menu[$i]->PRIX;?></span>
							        </div>
							        <div class="d-block">
								        <p><?php echo $menu[$i]->INGREDIENTS;?></p>
							        </div>
						        </div>
					        </div>
                        </div>
                    </div>
                <?php } ?>
          	</div>
          </div>
      </div>
    </section> <!-- .section -->


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Rado Andriamaro</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/aos.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.timepicker.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url() ?>assets/js/google-map.js"></script>
  <script src="<?php echo base_url() ?>assets/js/main.js"></script>
    
  </body>
</html>