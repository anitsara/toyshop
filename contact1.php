<?php
session_start();
include "msconnect.php";
if(isset($_POST["submit"]))
{
  $name=$_POST["name"];
  $email=$_POST["email"];
  $phone=$_POST["phone"];
  $message=$_POST["message"];
  $check= " INSERT INTO `message`( `name`, `email`,`phone`,`message`) VALUES ('$name', '$email','$phone','$message')";
  $test=mysqli_query($con,$check);
}
?>
<!DOCTYPE html>
<html >
   <head>
      <title>KIDDY SHOP</title>
    
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
	   <link href="css/fontawesome.min1.css" rel="stylesheet" type="text/css" media="all">
      <!--Shoping cart-->
      <link rel="stylesheet" href="css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
   </head>
   <body>
      <!--headder-->
      <div class="header-outs" id="home">
      <div class="header-bar">
         <div class="info-top-grid">
            <div class="info-contact-agile">
               <ul>
                  <li>
                     <span class="fas fa-phone-volume"></span>
                     <p>+(000)123 456 789 </p>
                  </li>
                  <li>
                     <span class="fas fa-envelope"></span>
                     <p><a href="mailto:anit.sara2010@gmail.com">anit.sara2010@gmail.com</a></p>
                  </li>
                  <li>
                  </li>
               </ul>
            </div>
         </div>
            <div class="container-fluid">
               <div class="hedder-up row">
                  <div class="col-lg-3 col-md-3 logo-head">
                     <h1><a class="navbar-brand" href="index1.php">KIDDY SHOP</a></h1>
                  </div>
                  <div class="col-lg-5 col-md-6 search-right">
                     <form class="form-inline my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search">
                        <button class="btn" type="submit">Search</button>
                     </form>
                  </div>
                  <div class="col-lg-4 col-md-3 right-side-cart">
                     <div class="cart-icons">
                        <ul>
                           <li>
					        <form action="logintest.php" method="get" target="_blank">
                              <button type="button" onclick="window.location.href='logintest.php'"> <span class="far fa-user"></span></button>
                           </form>
						    </li>
							 <li>
						    <form action="logout.php" method="get" target="_blank">
                              <button type="button" onclick="window.location.href='logout.php'"> <span class="fa fa-sign-out-alt"></span></button>
                           </form>
						   </li>
                       <a href="cartss.php"><li class="toyscart toyscart2 cart cart box_1">
                          
                            
                              <button class="top_toys_cart" type="submit" name="submit" value="">
                              <span class="fas fa-cart-arrow-down"></span>
                              </button>
                           
                        </li></a>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         <nav class="navbar navbar-expand-lg navbar-light">
               <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
              <li class="nav-item">
                        <a class="nav-link" href="index1.php">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                        <a href="about1.php" class="nav-link">About</a>
                     </li>
                     <li class="nav-item">
                        <a href="service1.php" class="nav-link">Service</a>
                     </li>
                     <li class="nav-item">
                        <a href="shop1.php" class="nav-link">Shop Now</a>
                     </li>
                      <li class="nav-item">
                        <a href="gallery1.php" class="nav-link">Gallery</a>
                     </li>
                      <li class="nav-item active">
                        <a href="contact1.php" class="nav-link">Contact</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      <!--//headder-->
      <!-- banner -->
      <div class="inner_page-banner one-img">
      </div>
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="index1.php">Home</a>
                  <span>/ /</span>
               </li>
               <li>Contact</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--contact -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Contact US</h3>
            <div class="contact-list-grid">
               <form action="#" method="POST">
                  <div class=" agile-wls-contact-mid">
                     <div class="form-group contact-forms">
                        <input type="text" class="form-control" placeholder="Name" name="name">
                     </div>
                     <div class="form-group contact-forms">
                        <input type="email" class="form-control" placeholder="email" name="email">
                     </div>
                     <div class="form-group contact-forms">
                        <input type="text" class="form-control" placeholder="Phone" name="phone">
                     </div>
                     <div class="form-group contact-forms">
                        <textarea class="form-control" rows="3" name="message"></textarea>
                     </div>
                     <button type="submit" name="submit" class="btn btn-block sent-butnn">Send</button>
                  </div>
               </form>
            </div>
         </div>
         <!--//contact-map -->
      </section>
	
	  
      <!--subscribe-address-->
      <section class="subscribe">
         <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6 col-md-6 map-info-right px-0">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
            </div>
            <div class="col-lg-6 col-md-6 address-w3l-right text-center">
               <div class="address-gried ">
                  <span class="far fa-map"></span>
                  <p>123 Street<br>ABC, XYZ
                  <p>
               </div>
               <div class="address-gried mt-3">
                  <span class="fas fa-phone-volume"></span>
                  <p> +(000)123 4567<br>+(010)123 4567</p>
               </div>
               <div class=" address-gried mt-3">
                  <span class="far fa-envelope"></span>
                  <p><a href="mailto:kiddy@gmail.com">kiddy@gmail.com</a>
                     <br><a href="mailto:anit.sara2010@gmail.com">anit.sara2010@gmail.com</a>
                  </p>
               </div>
            </div>
         </div>
		 </div>
      </section>
      <!--//subscribe-address-->
      <!--//subscribe-->
      <!-- footer -->
       <footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
         <div class="copy-agile-right">
            <p> 
               © 2018 KIDDY SHOP. All Rights Reserved
            </p>
         </div>
      </footer>
      <!-- //footer -->
      <!-- Modal 1-->
      
 
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- cart-js -->
     
      
      <!-- //cart-js -->
      
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->      <!-- //OnScroll-Number-Increase-JavaScript -->
   </body>
</html>