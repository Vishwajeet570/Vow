<?php 
session_start();

	include("connection.php");
	include("functions.php");


	$user_data = check_login($con);
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Novotel </title>
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
	          <li class="nav-item active"><a href="restaurant.php" class="nav-link">Restaurant</a></li>
	          <li class="nav-item"><a href="about_new.php" class="nav-link">About</a></li>
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
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="main3.php">Home</a></span> <span>Restaurant</span></p>
	            <h1 class="mb-4 bread">Restaurant</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

	<section class="ftco-section ftco-menu" style="background-image: url(res/images/restaurant-pattern.jpg);">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Restaurant</span>
            <h2>Restaurant</h2>
          </div>
        </div>
				<div class="row">
        	<div class="col-md-6">
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img order-md-last" style="background-image: url(res/images/menu-1.jpg);"></div>
        			<div class="desc pr-3 text-md-right">
	        			<div class="d-md-flex text align-items-center">
	        				<h3 class="order-md-last heading-left"><span>Grilled Crab with Onion</span></h3>
	        				<span class="price price-left">RS410</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Grilled steak and onions is an easy recipe to make on the grill.</p>
	        			</div>
        			</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img order-md-last" style="background-image: url(res/images/menu-2.jpg);"></div>
        			<div class="desc pr-3 text-md-right">
	        			<div class="d-md-flex text align-items-center">
	        				<h3 class="order-md-last heading-left"><span>Grilled Crab with potatoes</span></h3>
	        				<span class="price price-left">RS490</span>
	        			</div>
	        			<div class="d-block">
	        				<p> The steak starts with a simple yet flavorful rub, and we serve it with a bold red wine.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img order-md-last" style="background-image: url(res/images/menu-3.jpg);"></div>
        			<div class="desc pr-3 text-md-right">
	        			<div class="d-md-flex text align-items-center">
	        				<h3 class="order-md-last heading-left"><span>Seafood paella</span></h3>
	        				<span class="price price-left">RS510</span>
	        			</div>
	        			<div class="d-block">
	        				<p>The sea is lapping just by your feet, a warm breeze whips the tablecloth around your legs and a steamy pan of paella sits in front of you.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img order-md-last" style="background-image: url(res/images/menu-4.jpg);"></div>
        			<div class="desc pr-3 text-md-right">
	        			<div class="d-md-flex text align-items-center">
	        				<h3 class="order-md-last heading-left"><span> Som tam</span></h3>
	        				<span class="price price-left">RS610</span>
	        			</div>
	        			<div class="d-block">
	        				<p> Toss in tamarind juice, fish sauce, peanuts, dried shrimp, tomatoes, lime juice, sugar cane paste, string beans and a handful of grated green papaya.</p>
	        			</div>
	        		</div>
        		</div>
        	</div>

        	<div class="col-md-6">
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(res/images/menu-5.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-md-flex text align-items-center">
	        				<h3><span>Poutine</span></h3>
	        				<span class="price">RS409.91</span>
	        			</div>
	        			<div class="d-block">
	        				<p>French fries smothered in cheese curds and brown gravy. </p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(res/images/menu-6.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-md-flex text align-items-center">
	        				<h3><span>Tacos</span></h3>
	        				<span class="price">RS200.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A fresh, handmade tortilla stuffed with small chunks of grilled beef rubbed in oil</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(res/images/menu-7.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-md-flex text align-items-center">
	        				<h3><span>Buttered toast with Marmite</span></h3>
	        				<span class="price">RS208.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>a piece of grilled bread into a reason to go on living. For extra yum (or yuck) factor, add a layer of marmalade.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(res/images/menu-8.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-md-flex text align-items-center">
	        				<h3><span>HOT &amp; Marzipan</span></h3>
	        				<span class="price">RS510.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Don't be fooled by cheap imitations, which use soy paste or almond essence.For extra yum (or yuck) factor, add a layer of marmalade.It tastes very delicious</p>
	        			</div>
	        		</div>
        		</div>
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