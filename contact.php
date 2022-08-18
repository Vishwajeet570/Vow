<?php 
session_start();

	include("connection.php");
	include("functions.php");


	$user_data = check_login($con);
   if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$name = $_POST['name'];
		$message = $_POST['message'];
		$email_id = $_POST['email_id'];
      $phone_no=$_POST['phone_no'];
		

		if(!empty($name) && !empty($message)   && !is_numeric($name) && !empty($email_id) && !empty($phone_no) && is_numeric($phone_no) )
		{

			
			
			$query = "insert into book_now (name,message,email_id,phone_no) values ('$name','$message','$email_id','$phone_no')";

			mysqli_query($con, $query);
       

			header("Location: mainlog.php");
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
                              <li class="nav-item">
                                 <a class="nav-link" href="about.php">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="service.php">Service</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="blog.php">Blog</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="contact.php">Contact Us</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="C:\xampp\htdocs\vows\lgplbvqoedssuknb\index.html">Book now</a>
                              </li>
                              <li class="nav-item">
                              
                              <a class="nav-link" href="logout.php" >Logout</a>
                              </li>
                              <p class=" names" >Hello, <?php echo $user_data['firstname']; ?></p>
                           </ul>
                        </div>
                     
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
         <!-- end header -->
         <!-- banner -->
      </header>
      <!-- end banner -->
      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Book now</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-6">
                  <form id="request" class="main_form" method="post">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" name="name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone number" type="type" name="phone_no">                          
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="email_id"> 
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" name="message"></textarea>
                        </div>
                        <div class="col-md-6 col-sm-6">
                           <button class="send_btn">Send</button>
                        </div>
                        <div class="col-md-6 col-sm-6">
                           <ul class="social_icon">
                              <li><a href="Javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6">
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="378" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
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
                        <p>© 2019 All Rights Reserved. <a href="https://html.design/"> Free Html Templates</a></p>
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