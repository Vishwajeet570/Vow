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
   <body class="main-layout inner_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
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
                              <a href="mainlog.php">Vow</a>
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
                              <li class="nav-item ">
                                 <a class="nav-link" href="mainlog.php">Home</a>
                              </li>
                              <li class="nav-item active">
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
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>About</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about -->
      <div class="about">
         <div class="container ">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>About Our Company</h2>
                     <span>The Vow is a Wedding web application that allows customers to book Wedding services quickly and easily. It will do all the bookings of the Wedding from the Engagement to the Honeymoon. User can select the best deals according to their requirements and can have a track record of the money being spent in the Wedding.</span>
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