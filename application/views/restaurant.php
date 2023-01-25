<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Human Hotel</title>
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
	          <li class="nav-item"><a href="<?php echo base_url('Welcome/index'); ?>" class="nav-link">Accueil</a></li>
	          <li class="nav-item"><a href="<?php echo base_url('Welcome/rooms'); ?>" class="nav-link">Nos chambres</a></li>
	          <li class="nav-item active"><a href="#" class="nav-link">Restaurant</a></li>
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
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo base_url('Welcome/index'); ?>">Accueil</a></span> <span>Restaurant</span></p>
	            <h1 class="mb-4 bread">Restaurant</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
		
		<section class="ftco-section ftc-no-pb ftc-no-pt">
			<div class="container">
				<div class="row">
					<div class="mt-5 col-md-5 p-md-5 img img-2 img-3 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url() ?>assets/images/about.jpg);">
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section heading-section-wo-line pt-md-4 mb-5">
	          	<div class="ml-md-0">
		          	<!-- <span class="subheading">Notre Restaurant</span> -->
		            <h2 class="mb-4">Restauration</h2>
	            </div>
	          </div>
	          <div class="pb-md-4">
							<p>Le restaurant de notre hôtel offre le cadre idéal pour les petits-déjeuners d'affaires et les déjeuners de détente. Que vous cherchiez à prendre une bouchée rapide avec des collègues ou à savourer un repas tranquille dans notre salle à manger, nous sommes sûrs de satisfaire votre palais. Notre menu propose une gamme d'articles, y compris des salades, des sandwichs, des plats malagasy et plus encore.</p>
							<p>Vous avez le choix de l'endroit où vous souhaitez manger soit au restaurant soit livré en chambre</p>
							<p>Les restaurants, les cuisines et tous les aspects du service de la restauration sont conçus pour créer des expériences mémorables</p>
							<p>La restauration est notre engagement à vous fournir les traitements les plus raffinés et les plus enrichissants. Dès votre entrée dans l'hôtel, nous travaillerons avec vous pour personnaliser votre expérience en fonction de vos envies et de vos besoins.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
					<?php for($i = 0; $i<count($categories); $i++) { ?>
						<div class="col-md-4 mb-4 heading-section text-center ftco-animate">
							<a href="<?php echo base_url('Welcome/detailsMenu/' . $categories[$i]->IDCATEGORIE); ?>">
								<div class="card">
									<img src="<?php echo base_url() ?>assets/image/<?php echo $categories[$i]->PHOTO;?>" alt="Avatar" style="width:350px; height: 350px">
									<div class="container">
										<h2><?php echo $categories[$i]->LIBELE;?></h2>
									</div>
								</div>	
							</a>
						</div>
					<?php } ?>
				</div>
		</section>
		
    

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