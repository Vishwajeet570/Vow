<?php 
session_start();

	include("connection.php");
	include("functions.php");


	$user_data = check_login($con);
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Novetel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="res/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="res/css/animate.css">
    
    <link rel="stylesheet" href="res/css/owl.carousel.min.css">
    <link rel="stylesheet" href="res/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="res/css/magnific-popup.css">

    <link rel="stylesheet" href="res/css/aos.css">

    <link rel="stylesheet" href="res/css/ionicons.min.css">

    <link rel="stylesheet" href="res/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="res/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="res/css/flaticon.css">
    <link rel="stylesheet" href="res/css/icomoon.css">
    <link rel="stylesheet" href="res/css/style.css">
  </head>
  <style>
	  .logout_name  {
    color: red;
    margin-top: 15px;
    margin-bottom: 1rem;
	font-weight: bold;
	
}
.ftco-booking .container div[class*=col-] {
    padding-right: 0px;
    padding-left: 3px;
}
.linker{
    height: 40px;
    width: 100%;
    top: 20px;
    position: sticky;
    background-color: transparent;
    z-index: 3;
  }
 
.linker img{
  height: 60px;
  width: 100px;
 
}
.linker img:hover{
  filter: invert();
}
  </style>
  <body>
  

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <a href="mainlog.php"><img class="linker" class="nav-item" src="https://img.pngio.com/back-png-image-background-png-arts-back-png-1200_630.png" alt=""></a>
	    <div class="container">
      
	      <a class="navbar-brand" href="main3.php">Novotel</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
         
	          <li class="nav-item"><a href="main3.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="rooms.php" class="nav-link">Rooms</a></li>
	          <li class="nav-item"><a href="restaurant.php" class="nav-link">Restaurant</a></li>
	          <li class="nav-item active"><a href="about_new.php" class="nav-link">About</a></li>
            <li class="nav-item"> <a class="nav-link" href="logout.php" >Logout</a></li>
            
	        </ul>
	      </div>
        <p class="logout_name">Hello, <?php echo $user_data['firstname']; ?></p>
	    </div>
      
	  </nav>
    
    <!-- END nav -->
		<div class="hero-wrap" style="background-image: url('res/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="main3.php">Home</a></span> <span>About</span></p>
	            <h1 class="mb-4 bread">About us</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
	
		<section class="ftco-section ftc-no-pb ftc-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 img-3 d-flex justify-content-center align-items-center" style="background-image: url(res/images/bg_2.jpg);">
						<a href="https://www.youtube.com/watch?v=_vbNOKm_tKM" class="icon popup-vimeo d-flex justify-content-center align-items-center">
							<span class="icon-play"></span>
						</a>
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section heading-section-wo-line pt-md-5 mb-5">
	          	<div class="ml-md-0">
		          	<span class="subheading">Welcome to Novotel Hotel</span>
		            <h2 class="mb-4">Welcome To Our Hotel</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p>With a stay at Novotel Kolkata Hotel & Residences Hotel in Kolkata (New Town), you'll be steps from Axis Mall and a 4-minute drive from Ecospace Business Park. This 5-star hotel is 1.8 mi (2.9 km) from Biswa Bangla Convention Centre and 3.2 mi (5.1 km) from Mother's Wax Museum. Make yourself at home in one of the 340 air-conditioned rooms featuring refrigerators and minibars. Your bed comes with down comforters and premium bedding.</p>
							<p>Complimentary wireless Internet access keeps you connected, and satellite programming is available for your entertainment. Bathrooms have complimentary toiletries and hair dryers. </p>
							<ul class="ftco-social d-flex">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Welcome to Novotel Hotel</span>
            <h2 class="mb-4">A New Vision of Luxury Hotel</h2>
          </div>
        </div>  
        <div class="row d-flex">
          <div class="col-md pr-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-reception-bell"></span>
              	</div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Friendly Service</h3>
              </div>
            </div>      
          </div>
          <div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services active py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-serving-dish"></span>
              	</div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Get Breakfast</h3>
              </div>
            </div>    
          </div>
          <div class="col-md px-md-1 d-flex align-sel Searchf-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-car"></span>
              	</div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Transfer Services</h3>
              </div>
            </div>      
          </div>
          <div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-spa"></span>
              	</div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Suits &amp; SPA</h3>
              </div>
            </div>      
          </div>
          <div class="col-md pl-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="ion-ios-bed"></span>
              	</div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Cozy Rooms</h3>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb px-0">
			<div class="container-fluid px-0">
				<div class="row no-gutters justify-content-end">
					<div class="col-md-12">
						<div id="home" class="video-hero" style="height: 800px; background-image: url(res/images/bg_1.jpg); background-size:cover; background-position: center center;">
							<a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=ism1XqnZJEg',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>
							<div class="container">
								<div class="row justify-content-start d-flex align-items-end height-text ">
									<div class="col-md-8">
										<div class="text">
											<h1>We're Most Recommended Hotel</h1>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section testimony-section bg-light">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4">Our Happy Guest Says</h2>
          </div>
        </div>  
        <div class="row justify-content-center">
          <div class="col-md-8 ftco-animate">
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel ftco-owl">
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(res/images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                  	<p class="star"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
		                    <p class="mb-4">A comfortable, clean hotel with excellent dining facilities and surprisingly friendly and efficient staff</p>
		                    <p class="name">Pranav Upadhyay</p>
		                    <span class="position">Guests</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(res/images/person_2.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                  	<p class="star"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
		                    <p class="mb-4">The bar is small, intimate and well stocked but the prices seem high to me.</p>
		                    <p class="name">Kabir  Singh</p>
		                    <span class="position">Guests</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(res/images/person_3.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                  	<p class="star"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
		                    <p class="mb-4">They are actually cheaper than anywhere else. Service pretty efficient as well.</p>
		                    <p class="name">Jethalal gada</p>
		                    <span class="position">Guests</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(res/images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                  	<p class="star"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
		                    <p class="mb-4">Someone told me you could hear the aircraft from the rooms. I didn't hear anything from any room, including the bars</p>
		                    <p class="name">Ajay Devgan</p>
		                    <span class="position">Guests</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(res/images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                  	<p class="star"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
		                    <p class="mb-4"> TV is basic. No pay to view films. CNN and BBC news 24 are the only constantly available English speaking channels with BBC Prime available on a sporadic basis.</p>
		                    <p class="name">Hansa Upadhyay</p>
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
    </section>

    <section class="instagram ftco-section ftco-no-pb">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Photos</span>
            <h2><span>Instagram</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 col-md ftco-animate">
            <a href="res/images/insta-1.jpg" class="insta-img image-popup" style="background-image: url(res/images/insta-1.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="res/images/insta-2.jpg" class="insta-img image-popup" style="background-image: url(res/images/insta-2.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="res/images/insta-3.jpg" class="insta-img image-popup" style="background-image: url(res/images/insta-3.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="res/images/insta-4.jpg" class="insta-img image-popup" style="background-image: url(res/images/insta-4.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="res/images/insta-5.jpg" class="insta-img image-popup" style="background-image: url(res/images/insta-5.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

   
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Novotel</h2>
              <p>With a stay at Novotel Kolkata Hotel & Residences Hotel in Kolkata (New Town), you'll be steps from Axis Mall and a 4-minute drive from Ecospace Business Park. </p>
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
	                <li><span class="icon icon-map-marker"></span><span class="text">176 MISHRILAL NAGAR, DEWAS</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 898 898 9090</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">Novotel@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="icon-heart color-danger" aria-hidden="true"></i>  <a  target="_blank">by Vishwajeet Singh Rathore , Pranav Upadhyay, Nilanjal Choudhary</a> <a  target="_blank"></a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="res/js/jquery.min.js"></script>
  <script src="res/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="res/js/popper.min.js"></script>
  <script src="res/js/bootstrap.min.js"></script>
  <script src="res/js/jquery.easing.1.3.js"></script>
  <script src="res/js/jquery.waypoints.min.js"></script>
  <script src="res/js/jquery.stellar.min.js"></script>
  <script src="res/js/owl.carousel.min.js"></script>
  <script src="res/js/jquery.magnific-popup.min.js"></script>
  <script src="res/js/aos.js"></script>
  <script src="res/js/jquery.animateNumber.min.js"></script>
  <script src="res/js/jquery.mb.YTPlayer.min.js"></script>
  <script src="res/js/bootstrap-datepicker.js"></script>
  <!-- // <script src="js/jquery.timepicker.min.js"></script> -->
  <script src="res/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="res/js/google-map.js"></script>
  <script src="res/js/main.js"></script>
    
  </body>
</html>