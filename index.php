<?php 
session_start();

include("connection.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$password = $_POST['password'];
		$email_id = $_POST['email_id'];
		

		if(!empty($firstname) && !empty($password) && !empty($lastname)  && !is_numeric($lastname)  && !is_numeric($firstname) && !empty($email_id) )
		{

			
			$user_id = random_num(20);
			$query = "insert into users (user_id,firstname,password,lastname,email_id) values ('$user_id','$firstname','$password','$lastname','$email_id')";

			mysqli_query($con, $query);

			header("Location: index.php");
			die;
		}else
		{
			echo "<script>alert('enter some valid information!')</script>";
		}
	}


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    
    $email_id = $_POST['email_id'];
    $password = $_POST['password'];

    if(!empty($email_id) && !empty($password))
    {

        
        $query = "select * from users where email_id = '$email_id' limit 1";
        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {

                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password)
                {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: mainlog.php");
                    die;
                }
            }
        }
        
        echo "<script>alert('wrong username or password!')</script>";
    }else
    {
        echo "<script>alert('wrong username or password!')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>settle</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" href="css/loginstyle.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- top -->
      <div class="full_bg">
         <!-- header inner -->
         <div class="top_section">
            <div class="container-fluid">
               <div class="row">
                  <div class=" col-md-2 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/The_vow.svg/1024px-The_vow.svg.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
         <!-- end header -->
         <div class="slider_main">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-8">
                     <!-- carousel code -->
                     <div id="carouselExampleIndicators" class="carousel slide">
                        <ol class="carousel-indicators">
                           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                           <!-- first slide -->
                           <div class="carousel-item active">
                              <div class="carousel-caption d-md-block cuplle">
                                 <h3 data-animation="animated bounceInLeft">
                                    Love
                                 </h3>
                                 <h3 data-animation="animated bounceInLeft">
                                    Wedding Couple
                                 </h3>
                                 <h3 data-animation="animated bounceInLeft">
                                    Groom Woman
                                 </h3>
                                 <button class="btn btn-primary  read_more whitebg" data-animation="animated bounceInLeft">Contact Us</button>
                              </div>
                           </div>
                           <!-- second slide -->
                           <div class="carousel-item">
                              <div class="carousel-caption d-md-block cuplle">
                                 <h3 data-animation="animated bounceInLeft">
                                    Discount
                                 </h3>
                                 <h3 data-animation="animated bounceInLeft">
                                    20% OFF
                                 </h3>
                                 <h3 data-animation="animated bounceInLeft">
                                    For this week
                                 </h3>
                                 <button class="btn btn-primary  read_more whitebg" data-animation="animated bounceInLeft">BOOk NOW</button>
                              </div>
                           </div>
                           <!-- third slide -->
                           <div class="carousel-item">
                              <div class="carousel-caption d-md-block cuplle">
                                 <h3 data-animation="animated bounceInLeft">
                                    Best
                                 </h3>
                                 <h3 data-animation="animated bounceInLeft">
                                    Hotels
                                 </h3>
                                 <h3 data-animation="animated bounceInLeft">
                                    Now available
                                 </h3>
                                 <button class="btn btn-primary  read_more whitebg" data-animation="animated bounceInLeft">BOOK NOW</button>
                              </div>
                           </div>
                        </div>
                        <!-- controls -->
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end banner -->
      <div id="myHeader" class="header diki">
         <div class="container">
            <div class="row">
              
               <div class="col-md-2">
                  <div class="sealo">
                     <ul>
                        
                        <section>
                           <div class="rt-container">
                                 <div class="col-rt-12">
                                     <div class="Scriptcontent">
                                     
                               <!-- Login Form Popup HTML -->
                                         <center>
                       <label class="modal-btn" for="modal-toggle">Login/Signup</label>  
                                         </center>
                           <input id="modal-toggle" type="checkbox">
                           <label class="modal-backdrop" for="modal-toggle"></label>
                           <div class="modal-content">
                               <label class="modal-close-btn" for="modal-toggle">
                                   <svg width="30" height="30">
                                   <line x1="5" y1="5" x2="20" y2="20"/>
                                     <line x1="20" y1="5" x2="5" y2="20"/>
                                   </svg>
                                </label>
                               <div class="tabs">
                       <!--  LOG IN  -->
                                   <input class="radio" id="tab-1" name="tabs-name" type="radio" checked>
                                   <label for="tab-1" class="table"><span>Login</span></label>
                                   <div class="tabs-content">
                                      <div class="login_socnet">
                                          <a href="" class="fa fa-vk" aria-hidden="true"></a>
                                          <a href="" class="fa fa-google-plus" aria-hidden="true"></a>
                                          <a href="" class="fa fa-facebook" aria-hidden="true"></a>
                                      </div>
                                      <form  method="post">
                                          <input type="email" name="email_id" placeholder="Email" required>
                                          <input type="password" name="password" placeholder="Password" required>
                                          <input type="submit" value="Login">
                                      </form>
                                      <form class="forgot-password"  action="">
                                          <input id="forgot-password-toggle" type="checkbox">
                                          <label for="forgot-password-toggle">forgot password?</label>
                                          <div class="forgot-password-content">
                                              <input type="email" placeholder="enter your email" required>
                                              <input type="submit" value="go">
                                          </div>
                                      </form>
                                   </div>
                       <!--  SIGN UP  -->
                                   <input class="radio" id="tab-2" name="tabs-name" type="radio">
                                   <label for="tab-2" class="table"><span>Sign up</span></label>
                                   <div class="tabs-content">
                                       <div class="login_socnet">
                                          <a href="" class="fa fa-vk" aria-hidden="true"></a>
                                          <a href="" class="fa fa-google-plus" aria-hidden="true"></a>
                                          <a href="" class="fa fa-facebook" aria-hidden="true"></a>
                                      </div>
                                      <form method="post">
                                       <input type="firstname" name="firstname" placeholder="firstname" required>
                                       <input type="lastname" name="lastname" placeholder="lastname" required>
                                          <input type="email" name="email_id" placeholder="Email" required>
                                          <input type="password" name="password" placeholder="Password" required>
                                          
                                          <input type="submit" value="Signup">
                                      </form>
                                   </div>
                               </div>
                           </div>
                       <!-- partial -->
                       
                                 
                                  
                                 </div>
                             </div>
                           </div>
                       </section>
                             <script src='https://use.fontawesome.com/7fcc5972f1.js'></script><script  src="./script.js"></script> 
                       
                       
                           <!-- Analytics -->
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about -->
      <div class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>About Us</h2>
                  </div>
               </div>
               <div class="col-md-10 offset-md-1">
                  <div class="about_img text_align_center">
                     <figure><img src="images/about.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-8 offset-md-2">
                  <div class="about_img text_align_center">
                     <p>Vow is a Wedding web application that allows customers to book Wedding services quickly and easily. It will do all the bookings of the Wedding from the Engagement to the Honeymoon. User can select the best deals according to their requirements and can have a track record of the money being spent in the Wedding. It reduces the field work for the Wedding arrangements, reduces man power and is a great time saver.
                     </p>
                     <a class="read_more" href="about.html">About More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- couple -->
      <div class="couple">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-7">
                  <div class="titlepage text_align_left">
                     <span>Our introduction</span>
                     <h2>Meet Happy Couple</h2>
                     <p> On arrival, we found a lovely card from the staff congratulating us on our wedding and a huge box of chocolates! When they could tell we were disappointed with the grey weather when we arrived, they suggested a multitude of things we could do, offered us transport, suggested places to eat and drink. No detail was too small, and nothing was overlooked. One member of staff even bought us a drink when he was off work to wish us all the best.
                     </p>
                     <a class="read_more whitebg" href="Javascript:void(0)">See More</a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="doi">
                     <figure><img src="images/mul.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- couple -->
      <!-- gallery -->
      <div class="gallery">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Gallery</h2>
                  </div>
               </div>
            </div>
            <div class="tz-gallery">
               <div class="row">
                  <div class="col-md-4">
                     <div class="row">
                        <div class="col-md-12 ma_bottom30">
                           <div class="lightbox">
                              <img src="images/g1.jpg" alt="Bridge">
                              <div class="view_main">
                                 <h3>Couple</h3>
                                 <a class="view_btn" href="images/g1.jpg"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 ma_bottom30">
                           <div class="lightbox">
                              <img src="https://static.india.com/wp-content/uploads/2021/12/pjimage-2021-12-15T083622.723-369x246.jpg" alt="Bridge">
                              <div class="view_main">
                                 <h3>Couple</h3>
                                 <a class="view_btn" href="images/g4.jpg"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="row">
                        <div class="col-md-12 ma_bottom30">
                           <div class="lightbox">
                              <img src="https://net916.com/wp-content/uploads/2021/02/wedding-jewelry-collection-net916-370x400.jpg" alt="Bridge">
                              <div class="view_main">
                                 <h3>Couple</h3>
                                 <a class="view_btn" href="images/g2.jpg"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 ma_bottom30">
                           <div class="lightbox">
                              <img src="images/g5.jpg" alt="Bridge">
                              <div class="view_main">
                                 <h3>Couple</h3>
                                 <a class="view_btn" href="images/g5.jpg"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="row">
                        <div class="col-md-12 ma_bottom30">
                           <div class="lightbox">
                              <img src="images/g3.jpg" alt="Bridge">
                              <div class="view_main">
                                 <h3>Couple</h3>
                                 <a class="view_btn" href="images/g3.jpg"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 ma_bottom30">
                           <div class="lightbox">
                              <img src="images/g6.jpg" alt="Bridge">
                              <div class="view_main">
                                 <h3>Couple</h3>
                                 <a class="view_btn" href="images/g6.jpg"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <p class="text_align_center">Love is a partnership of two unique people who bring out the very best in each other, and who know that even though they are wonderful as individuals, they are even better together.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end gallery -->
     
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row border_bo1 ">
                  <div class="col-md-4">
                     <a class="logof" href="index.html"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/The_vow.svg/1024px-The_vow.svg.png" alt="#"/></a> 
                     <form class="form_subscri">
                        <div class="row">
                           <div class="col-md-12">
                              <h3>Subscribe Now</h3>
                           </div>
                           <div class="col-md-12">
                              <input class="subsrib" placeholder="Enter your email" type="text" name="Enter your email">
                           </div>
                           <div class="col-md-12">
                              <button class="subsci_btn">subscribe</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="infoma">
                        <h3>Information</h3>
                        <ul>
                           <li>Vow provides an Online  It will help user to save their time rather than waiting in queue. The client can get the price estimation at home itself without going anywhere.  </li>
                          
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="infoma">
                        <h3>Helpful info</h3>
                        <ul>
                           <li>This application also solves the problem of covid-19 because social distancing can be maintained by this. We also rate Weeding Planners work excellent </li>
                           
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="infoma">
                        <h3>Our Weddings</h3>
                        <ul>
                           <li>Clients are able to know all Wedding areas nearby. Clients are able to book Wedding Services Quickly and easily.	Client are able to know the universal charge of that particular Wedding before booking.
 </li>
                          
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6">
                     <div class="infoma">
                        <h3>Contact Us</h3>
                        <ul class="conta">
                           <li><i class="fa fa-map-marker" aria-hidden="true"></i>Locations 
                           </li>
                           <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i>+91 12345678901</li>
                           <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="Javascript:void(0)"> wedding@gmail.com</a></li>
                        </ul>
                        <ul class="social_icon">
                           <li><a href="Javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2022 All Rights Reserved. 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
      <script src="js/custom.js"></script>
      <script type="text/javascript">
         baguetteBox.run('.tz-gallery');
      </script>
      <script type="text/javascript">
         window.onscroll = function() {myFunction()};
         
         var header = document.getElementById("myHeader");
         var sticky = header.offsetTop;
         
         function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
         }
      </script>
   </body>
</html>