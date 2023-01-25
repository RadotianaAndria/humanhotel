<?php error_reporting(0); ?>
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
	      <a class="navbar-brand" href="#"><img src="<?php echo base_url() ?>assets/image/logo.png" style="width:100px; height: 95px;"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="#" class="nav-link">Accueil</a></li>
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

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(<?php echo base_url() ?>assets/image/salon\ vert.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-12 ftco-animate text-center">
          	<div class="text mb-5 pb-3">
	            <h1 class="mb-3">Human Hotel</h1>
	            <h2>Hotel / Restaurant / Bar </h2>
            </div>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(<?php echo base_url() ?>assets/image/lit\ simple.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-12 ftco-animate text-center">
          	<div class="text mb-5 pb-3">
	            <h1 class="mb-3">Human Hotel</h1>
	            <h2>Vivez de séjour inoubliable</h2>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>

    <section class="ftco-booking">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12">
    				<form action="https://www.booking.com/hotel/mg/human-antananarivo1.fr.html" method ="get" class="booking-form">
						<div class="row">
							<div style="margin-top: 10px;" class="col-md d-flex">
								<div class="form-group d-flex align-self-stretch">
									<input type="submit" value="Réserver" class="btn btn-primary py-3 px-4 align-self-stretch">
								</div>
							</div>
						</div>
	        		</form>
	    		</div>
    		</div>
    	</div>
    </section>


    <section class="ftco-section ftc-no-pb ftc-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center">
						<video style = "width: 450px; height: 335px" controls>
							<source src="<?php echo base_url()?>assets/video/pub original.mp4" type="video/mp4">
						  </video>
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4">Bienvenue chez human hotel</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p>Bienvenue à Human Hotel. Nous sommes un hôtel restaurant de luxe situé à Ivato Antananarivo. Notre personnel professionnel et chaleureux veillera à ce que votre séjour chez nous soit mémorable, que vous voyagiez en famille ou entre amis ou que vous recherchiez simplement une évasion. Nos chambres sont conçues pour offrir un maximum de confort, notre restaurant propose une large gamme de plats inspirés de la riche histoire culinaire de Madagascar et d'autres pays et notre bar offre un lieu élégant pour prendre un verre après le dîner ou avant de partir en ville</p>
							<ul class="ftco-social d-flex">
                <li class="ftco-animate"><a href="https://www.facebook.com/profile.php?id=100083182899990"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="mailto:contact@humanhotel-mg.com"><span class="icon-google-plus"></span></a></li>
                
              </ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
			<div class="col-md-4 d-flex align-sel Searchf-stretch ftco-animate">
				<div class="media block-6 services py-4 d-block text-center">
				  <div class="d-flex justify-content-center">
					  <div class="icon d-flex align-items-center justify-content-center">
						  <span class="flaticon-car"></span>
					  </div>
				  </div>
				  <div class="media-body p-2 mt-2">
					<h3 class="heading mb-3">Service transfert</h3>
					<p>Transfert Aéroport - Hotel ou/et Hotel - Aéroport</p>
				  </div>
				</div>      
			</div>
			
			<div class="col-md-4 d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services py-4 d-block text-center">
				<div class="d-flex justify-content-center">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="flaticon-serving-dish"></span>
					</div>
				</div>
				<div class="media-body p-2 mt-2">
					<h3 class="heading mb-3">Restaurant</h3>
					<p>Le meilleur endroit pour déguster des bons plats</p>
				</div>
				</div>    
			</div>
			
			<div class="col-md-4 d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services py-4 d-block text-center">
				<div class="d-flex justify-content-center">
					<div class="icon d-flex align-items-center justify-content-center">
						<!-- <span class="flaticon-reception-bell"></span> -->
						<span>
							<img src="<?php echo base_url()?>assets/images/martinis.png" alt="ERROR" width="43px">
						</span>
					</div>
				</div>
				<div class="media-body p-2 mt-2">
					<h3 class="heading mb-3">Bar</h3>
					<p>L'hôtel propose une vaste carte des vins, de bière et des jus</p>
				</div>
				</div>      
			</div>
		
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Nos chambres</h2>
          </div>
        </div>    		
    		<div class="row">
				<?php for($i=0; $i<count($chambre)-1; $i++) {?>
					<div class="col-sm col-md-6 col-lg-3 ftco-animate">
						<div class="room">
							<a href="<?php echo base_url('Welcome/details/' . $chambre[$i]->IDCATEGORIECHAMBRE); ?>" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url() ?>assets/image/<?php echo $chambre[$i]->PHOTO; ?>);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3 text-center">
								<h3 class="mb-3"><a href="<?php echo base_url('Welcome/details/' . $chambre[$i]->IDCATEGORIECHAMBRE); ?>"><?php echo $chambre[$i]->LIBELE ?></a></h3>
								<p><span class="price mr-2">Ar <?php echo $chambre[$i]->PRIX ?></span> <span class="per">par nuit</span></p>
								<hr>
								<p class="pt-1"><a href="<?php echo base_url('Welcome/details/' . $chambre[$i]->IDCATEGORIECHAMBRE); ?>" class="btn-custom">Voir détails <span class="icon-long-arrow-right"></span></a></p>
							</div>
						</div>
					</div>
				<?php } ?>
    			<div class="col-sm col-md-6 col-lg-3 ftco-animate">
						<div class="room">
							<a href="<?php echo base_url('Welcome/details/' . $chambre[3]->IDCATEGORIECHAMBRE); ?>" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url() ?>assets/image/<?php echo $chambre[3]->PHOTO; ?>);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3 text-center">
								<h3 class="mb-5"><a href="<?php echo base_url('Welcome/details/' . $chambre[3]->IDCATEGORIECHAMBRE); ?>"><?php echo $chambre[3]->LIBELE ?></a></h3>
								<p><span class="price mr-2">Ar <?php echo $chambre[3]->PRIX ?></span> <span class="per">par nuit</span></p>
								<hr>
								<p class="pt-1"><a href="<?php echo base_url('Welcome/details/' . $chambre[3]->IDCATEGORIECHAMBRE); ?>" class="btn-custom">Voir détails <span class="icon-long-arrow-right"></span></a></p>
							</div>
						</div>
					</div>
    		</div>
    	</div>
    </section>

    <!-- <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(<?php echo base_url() ?>assets/images/bg_1.jpg);">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="50000">0</strong>
		                <span>Happy Guests</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="3000">0</strong>
		                <span>Rooms</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="1000">0</strong>
		                <span>Staffs</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Destination</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section> -->


    <!-- <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 ftco-animate">
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel ftco-owl">
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(<?php echo base_url() ?>assets/images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Nathan Smith</p>
		                    <span class="position">Guests</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(<?php echo base_url() ?>assets/images/person_2.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Nathan Smith</p>
		                    <span class="position">Guests</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(<?php echo base_url() ?>assets/images/person_3.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Nathan Smith</p>
		                    <span class="position">Guests</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(<?php echo base_url() ?>assets/images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Nathan Smith</p>
		                    <span class="position">Guests</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(<?php echo base_url() ?>assets/images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Nathan Smith</p>
		                    <span class="position">Guests</span>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section> -->


    <!-- <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo base_url() ?>assets/images/image_1.jpg');">
              </a>
              <div class="text mt-3 d-block">
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo base_url() ?>assets/images/image_2.jpg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo base_url() ?>assets/images/image_3.jpg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo base_url() ?>assets/images/image_4.jpg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- <section class="instagram">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2><span>Instagram</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-1.jpg" class="insta-img image-popup" style="background-image: url(<?php echo base_url() ?>assets/images/insta-1.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-2.jpg" class="insta-img image-popup" style="background-image: url(<?php echo base_url() ?>assets/images/insta-2.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-3.jpg" class="insta-img image-popup" style="background-image: url(<?php echo base_url() ?>assets/images/insta-3.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-4.jpg" class="insta-img image-popup" style="background-image: url(<?php echo base_url() ?>assets/images/insta-4.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-5.jpg" class="insta-img image-popup" style="background-image: url(<?php echo base_url() ?>assets/images/insta-5.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section> -->

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <!-- <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Deluxe Hotel</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Rooms</a></li>
                <li><a href="#" class="py-2 d-block">Amenities</a></li>
                <li><a href="#" class="py-2 d-block">Gift Card</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacy</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Career</a></li>
                <li><a href="#" class="py-2 d-block">About Us</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div> -->
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
    <?php
	if($error != null){?>
		<script>alert("<?php echo $error; ?>")</script>
<?php } 
	if($success != null) {?>
		<script>alert("<?php echo $success; ?>")</script>
<?php } ?>
  </body>
</html>