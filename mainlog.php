
<?php 
session_start();

	include("connection.php");
	include("functions.php");


	$user_data = check_login($con);
   ?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Vow</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="rings/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="rings/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="rings/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="rings/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="rings/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <style>
       .names{
           color: black;
           font-size: 25px;
           font-weight:bold;
       }
   </style>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="rings/images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header class="full_bg">
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="mainlog.php"> Vow</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="mainlog.php">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.php">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="service.php">Service</a>
                              </li>
                            
                              <li class="nav-item">
                                 <a class="nav-link" href="main3.php">Book now</a>
                              </li>
                              <li class="nav-item">
                              
                              <a class="nav-link" href="logout.php" >Logout</a>
                              </li>
                           </ul>
                           <p class=" names" >Hello, <?php echo $user_data['firstname']; ?></p>
                        </div>
                      
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
         <!-- end header -->
         <!-- banner -->
         <section class="banner_main">
            <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="carousel-caption  banner_po">
                           <div class="row">
                              <div class="col-lg-8 col-md-9 ">
                                 <div class="build_box">
                                    <h1>Wedding <span class="orang"> Couple</span></h1>
                                    <p>Welcome Quotes. We are made for goodness. We are made for love. </p>
                                    <a class="read_more quote_btn" href="Javascript:void(0)" role="button">Get A Quote</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption banner_po">
                           <div class="row">
                              <div class="col-lg-8 col-md-9 ">
                                 <div class="build_box">
                                    <h1>Palmy <span class="orang">Marriage</span></h1>
                                    <p>To get the full value of joy you must have someone to divide it with</p>
                                    <a class="read_more quote_btn" href="Javascript:void(0)" role="button">Get A Quote</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption banner_po">
                           <div class="row">
                              <div class="col-lg-8 col-md-9 ">
                                 <div class="build_box">
                                    <h1>Happy  <span class="orang"> marriage</span></h1>
                                    <p>“Marriage is a gift from God to us. The quality of our marriage is our gift back to him.”</p>
                                    <a class="read_more quote_btn" href="Javascript:void(0)" role="button">Get A Quote</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <i class="fa fa-angle-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </section>
      </header>
      <!-- end banner -->
      <!-- play -->
      <div class="section">
         <div class="container">
            <div class="row">
               <div class="col-md-8 offset-md-2 col-sm-8 offset-sm-2">
                  <div class="play_btn text_align_center">
                     <img src="rings/images/play.png" alt="#"/>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end play -->
      <!-- our plane -->
      <div class="plane">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="titlepage">
                     <h2>Our Plane</h2>
                     <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod t dolor in reprehenderit in voluptate </span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="plan_bax text_align_center">
                     <figure><img src="rings/images/plan_img.jpg" alt="#"/></figure>
                     <div  id="ho_plan" class="plan_text">
                        <h3>FLOWER DECORATIONS</h3>
                        <p>It is perfect for an outdoor daytime wedding ceremony since its entire beauty lies in its placement and adequate lighting. </p>
                        <a class="read_more" href="Javascript:void(0)">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="plan_bax text_align_center">
                     <figure><img src="rings/images/plan_img1.jpg" alt="#"/></figure>
                     <div  id="ho_plan" class="plan_text">
                        <h3>BEST RESTAURANT</h3>
                        <p>We see our customers as invited guests to a party, and we are the hosts. It’s our job every day to make every important aspect . </p>
                        <a class="read_more" href="Javascript:void(0)">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="plan_bax text_align_center">
                     <figure><img src="rings/images/plan_img2.jpg" alt="#"/></figure>
                     <div  id="ho_plan" class="plan_text">
                        <h3>HONEYMOON</h3>
                        <p>A hotel should relieve travelers of their insecurity and loneliness. It should make them feel warm and cozy. </p>
                        <a class="read_more" href="Javascript:void(0)">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- our plane -->
      <!-- groomsmen -->
      <div class="groomsmen">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="titlepage">
                     <h2>Bridesmaids And Groomsmen</h2>
                     <span></span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="brid text_align_center">
                     <figure><img src="rings/images/ber_img.jpg" alt="#"/></figure>
                     <h3>  </h3>
                  </div>
               </div>
               <div class="col-md-4 margin_top70">
                  <div class="brid text_align_center">
                     <figure><img src="rings/images/ber_img1.jpg" alt="#"/></figure>
                     <h3> </h3>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="brid text_align_center">
                     <figure><img src="rings/images/ber_img2.jpg" alt="#"/></figure>
                     <h3>  </h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- groomsmen -->
      <!-- about -->
      <div class="about">
         <div class="container ">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>About Our Company</h2>
                     <span>The Vow is a Wedding web application that allows customers to book Wedding services quickly and easily. It will do all the bookings of the Wedding from the Engagement to the Honeymoon. User can select the best deals according to their requirements and can have a track record of the money being spent in the Wedding. </span>
                     <a class="read_more" href="Javascript:void(0)"> Read More</a>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="rings/images/about.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- blog -->
      <div class="blog">
         <div class="container ">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Available Hotels and restaurants</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="blog_bg margin_bottom30">
                     <div class="row d_flex">
                        <div class="col-md-6">
                           <div class="blog_img">
                              <figure><img src="https://travelmontenegro.me/wp-content/uploads/2018/05/splendid-hotel-becici.jpg" alt="#"/></figure>
                              <span>06<br>Feb</span>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="marriage_text">
                              <span>Post by : Marriage </span>
                              <h3>Novetel</h3>
                              <p>With a stay at Novotel Kolkata Hotel & Residences Hotel in Kolkata (New Town), you'll be steps from Axis Mall and a 4-minute drive from Ecospace Business Park. This 5-star hotel is 1.8 mi (2.9 km) from Biswa Bangla Convention Centre and 3.2 mi (5.1 km) from Mother's Wax Museum. Make yourself at home in one of the 340 air-conditioned rooms featuring refrigerators and minibars. Your bed comes with down comforters and premium bedding. Complimentary wireless Internet access keeps you connected, and satellite programming is available for your entertainment. Bathrooms have complimentary toiletries and hair dryers. Pamper yourself with a visit to the spa, which offers massages, body treatments, and facials. You can take advantage of recreational amenities such as a 24-hour health club and a sauna. Additional features at this hotel include complimentary wireless Internet access, concierge services, and babysitting/childcare (surcharge).</p>
                              <h4><strong>Like</strong> <strong class="padd_right">Comment</strong></h4>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
              
            </div>
         </div>
      </div>
      <!-- end blog -->
      <!-- says -->
      <div class="says">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>What Is Says Our GROOMS</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="proj" class="carousel slide says_ban" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#proj" data-slide-to="0" class="active"></li>
                        <li data-target="#proj" data-slide-to="1"></li>
                        <li data-target="#proj" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption relative3">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="readert">
                                          <div class="readert_img text_align_center">
                                             <figure><img src="rings/images/saya.png" alt="#"/></figure>
                                          </div>
                                          <div class="readert_text">
                                             <h3>Shrinal Priti</h3>
                                             <p>On arrival, we found a lovely card from the staff congratulating us on our wedding and a huge box of chocolates!  </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative3">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="readert">
                                          <div class="readert_img text_align_center">
                                             <figure><img src="rings/images/saya.png" alt="#"/></figure>
                                          </div>
                                          <div class="readert_text">
                                             <h3>Nilanjal Khushi</h3>
                                             <p>One member of staff even bought us a drink when he was off work to wish us all the best.</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative3">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="readert">
                                          <div class="readert_img text_align_center">
                                             <figure><img src="rings/images/saya.png" alt="#"/></figure>
                                          </div>
                                          <div class="readert_text">
                                             <h3>Nikhil Nisha</h3>
                                             <p> No detail was too small, and nothing was overlooked.</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <a class="carousel-control-prev" href="#proj" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#proj" role="button" data-slide="next">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end says -->
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="ru_bg">
                     <div class="row">
                        <div class="col-md-3">
                          <a href="mainlogin.php"> <img class="logo_fooetr" src="rings/images/ring.png" alt="#"/></a>
                        </div>
                        <div class="col-md-9">
                           <ul class="lacation">
                              <li><i class="fa fa-map-marker" aria-hidden="true"></i>178 Mishrilal nagar </li>
                              <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> G(+91) 9777777725</li>
                              <li><i class="fa fa-envelope" aria-hidden="true"></i> welcome@gmail.com</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
           
               
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-8 offset-md-2">
                        <p>© 2022 All Rights Reserved. <a href="https://html.design/"> </a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="rings/js/jquery.min.js"></script>
      <script src="rings/js/bootstrap.bundle.min.js"></script>
      <script src="rings/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="rings/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="rings/js/custom.js"></script>
   </body>
</html>