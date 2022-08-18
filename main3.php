
<?php 
session_start();

	include("connection.php");
	include("functions.php");


	$user_data = check_login($con);
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$check_in = $_POST['check_in'];
		$check_out = $_POST['check_out'];
		$room_type = $_POST['room_type'];
        $rooms=$_POST['rooms'];
		

		if(!empty($check_in) && !empty($check_out) && !empty($room_type) && is_numeric($rooms) )
		{

			
			
			$query = "insert into book_now (check_in,check_out,room_type,rooms) values ('$check_in','$check_out','$room_type','$rooms')";

			mysqli_query($con, $query);
       

			header("Location: main3.php");
			die;
		}else
		{
            echo "<script>alert('enter some valid information!')</script>";
		}
	}
   ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Novotel</title>
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
.btn{
	background-color: 
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
	          <li class="nav-item active"><a href="main3.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="rooms.php" class="nav-link">Rooms</a></li>
	          <li class="nav-item"><a href="restaurant.php" class="nav-link">Restaurant</a></li>
	          <li class="nav-item"><a href="about_new.php" class="nav-link">About</a></li>
	          <li class="nav-item"> <a class="nav-link" href="logout.php" >Logout</a></li>
			 
	        </ul>
			
	      </div>
		  <p class="logout_name">Hello, <?php echo $user_data['firstname']; ?></p>
	    </div>
		
	  </nav>
	  
    <!-- END nav -->
		<div class="hero">
			<div class="container-wrap d-flex justify-content-end align-items-end">
				<a href="https://www.youtube.com/watch?v=ism1XqnZJEg" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
					<span class="ion-ios-play play"></span>
				</a>
			</div>
	    <section class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image:url(res/images/bg_1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center">
	          <div class="col-md-8 ftco-animate">
	          	<div class="text mb-5 pb-5">
		            <h1 class="mb-3">Novotel</h1>
		            <h2>More than a hotel... an experience</h2>
	            </div>
	          </div>
	        </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image:url(res/images/bg_2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center">
	          <div class="col-md-8 ftco-animate">
	          	<div class="text mb-5 pb-5">
		            <h1 class="mb-3">Experience Epic Beauty</h1>
		            <h2>Novotel Hotel &amp; Resort</h2>
	            </div>
	          </div>
	        </div>
	        </div>
	      </div>
	    </section>
	  </div>

    <section class="ftco-booking ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12 pr-1 aside-stretch">
    				<form action="#" method="post" class="booking-form">
	        		<div class="row">
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap bg-white align-self-stretch py-3 px-4">
				    					<label for="#">Check-in Date</label>
				    					<input type="date"  name="check_in" placeholder="Check-in date">
			    					</div>
			    				</div>
	        			</div>
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap bg-white align-self-stretch py-3 px-4">
				    					<label for="#">Check-out Date</label>
				    					<input type="date"  name="check_out" placeholder="Check-out date">
			    					</div>
			    				</div>
	        			</div>
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap bg-white align-self-stretch py-3 px-4">
			      					<label for="#">Room</label>
			      					<input type="text"  name="room_type" placeholder="room_type">
				            </div>
		              </div>
	        			</div>
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap bg-white align-self-stretch py-3 px-4">
			      					<label for="#">no. of rooms</label>
			      				    <input type="number" name="rooms" placeholder="no. of rooms">
				            </div>
		              </div>
					</div>
					<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap bg-white align-self-stretch py-3 px-4">
									  <input type="submit" class="btn" value="book now">
				            </div>
		              </div>
					</div>
					
	        			<div class="col-md d-flex">
	        				<div class="form-group d-flex align-self-stretch">
			              <a href="#" class="btn btn-black py-5 py-md-3 px-4 align-self-stretch d-block"><span>Check Availability <small>Best Price Guaranteed!</small></span></a>
			            </div>
	        			</div>
	        		</div>
	        	</form>
	    		</div>
    		</div>
    	</div>
    </section>


		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-wrap">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-3">
						<a href="#" class="services-wrap img align-items-end d-flex" style="background-image: url(res/images/room-3.jpg);">
							<div class="text text-center pb-2">
								<h3>Special Rooms</h3>
							</div>
						</a>
					</div>
					<div class="col-md-3">
						<a href="#" class="services-wrap img align-items-end d-flex" style="background-image: url(res/images/swimming-pool.jpg);">
							<div class="text text-center pb-2">
								<h3>Swimming Pool</h3>
							</div>
						</a>
					</div>
					<div class="col-md-3">
						<a href="#" class="services-wrap img align-items-end d-flex" style="background-image: url(res/images/resto.jpg);">
							<div class="text text-center pb-2">
								<h3>Restaurant</h3>
							</div>
						</a>
					</div>
					<div class="col-md-3">
						<div class="services-wrap services-overlay img align-items-center d-flex" style="background-image: url(res/images/sleep.jpg);">
							<div class="text text-center pb-2">
								<h3 class="mb-0">Suites &amp; Rooms</h3>
								<span>Special Rooms</span>
								<div class="d-flex mt-2 justify-content-center">
								<div class="icon">
									<a href="#"><span class="ion-ios-arrow-forward"></span></a>
								</div>
								</div>
							</div>
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

    <section class="ftco-section bg-light ftco-room">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Novotel Rooms</span>
            <h2 class="mb-4">Hotel Master's Rooms</h2>
          </div>
        </div>  
    		<div class="row no-gutters">
    			<div class="col-lg-6">
    				<div class="room-wrap">
    					<div class="img d-flex align-items-center" style="background-image: url(res/images/bg_3.jpg);">
    						<div class="text text-center px-4 py-4">
    							<h2>Welcome to <a href="index.html">Novotel</a> Hotel</h2>
    							<p>This 5-star hotel is 1.8 mi (2.9 km) from Biswa Bangla Convention Centre and 3.2 mi (5.1 km) from Mother's Wax Museum. </p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<a href="#" class="img" style="background-image: url(res/images/room-1.jpg);"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">RS5500</span> <span class="per">per night</span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Suite Room</a></h3>
	    						<p class="pt-1"><a href="rooms_single.php" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>

    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<a href="#" class="img order-md-last" style="background-image: url(res/images/room-2.jpg);"></a>
    					<div class="half right-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">RS7100</span> <span class="per">per night</span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Family Room</a></h3>
	    						<p class="pt-1"><a href="rooms_single.php" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<a href="#" class="img order-md-last" style="background-image: url(res/images/room-3.jpg);"></a>
    					<div class="half right-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">RS4500</span> <span class="per">per night</span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Deluxe Room</a></h3>
	    						<p class="pt-1"><a href="rooms_single.php" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>

    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<a href="#" class="img" style="background-image: url(res/images/room-4.jpg);"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">RS6500</span> <span class="per">per night</span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Luxury Room</a></h3>
	    						<p class="pt-1"><a href="rooms_single.php" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<a href="#" class="img" style="background-image: url(res/images/room-6.jpg);"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">RS4100</span> <span class="per">per night</span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Superior Room</a></h3>
	    						<p class="pt-1"><a href="rooms_single.php" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
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


    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Read Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog_single.php" class="block-20" style="background-image: url('res/images/image_1.jpg');">
              </a>
              <div class="text mt-3 text-center">
              	<div class="meta mb-2">
                  <div><a href="#">July 03, 2022</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Getting to nearby attractions is a breeze with the area shuttle (surcharge). Enjoy a meal at The Square or snacks in the coffee shop/café. </a></h3>
                <p><a href="#" class="btn-custom">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog_single.php" class="block-20" style="background-image: url('res/images/image_2.jpg');">
              </a>
              <div class="text mt-3 text-center">
              	<div class="meta mb-2">
                  <div><a href="#">July 03, 2022</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#"> You can take advantage of recreational amenities such as a 24-hour health club and a sauna.</a></h3>
                <p><a href="#" class="btn-custom">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog_single.php" class="block-20" style="background-image: url('res/images/image_3.jpg');">
              </a>
              <div class="text mt-3 text-center">
              	<div class="meta mb-2">
                  <div><a href="#">July 03, 2022</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Complimentary wireless Internet access keeps you connected, and satellite programming is available for your entertainment. </a></h3>
                <p><a href="#" class="btn-custom">Read more</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="instagram">
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