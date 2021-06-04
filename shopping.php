<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Toys Shop</title>
      <!--meta tags -->
    
      
      <style type="text/css">
      .alert, #loader{
		  display:none;
	  }
	  </style>

      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--Shoping cart-->
      <link rel="stylesheet" href="css/shop.css" type="text/css" />
      <!--//Shoping cart-->
     
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.js"></script>
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
                     <p>+(000)123 4567 89</p>
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
                  <h1><a class="navbar-brand" href="indexxx.php">KIDDY SHOP</a></h1>
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
					        <form action="index.php" method="get" target="_blank">
                              <button type="button" onclick="window.location.href='index.php'"> <span class="far fa-user"></span></button>
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
               <ul class="navbar-nav ">
                  <li class="nav-item ">
                     <a class="nav-link" href="indexxx.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a href="about.php" class="nav-link">About</a>
                  </li>
                  <li class="nav-item">
                     <a href="service.php" class="nav-link">Service</a>
                  </li>
                  <li class="nav-item active">
                     <a href="shop.php" class="nav-link">Shop Now</a>
                  </li>
				  <li class="nav-item">
                     <a href="gallery.php" class="nav-link">Gallery</a>
                  </li>
                  <li class="nav-item">
                     <a href="contact.php" class="nav-link">Contact</a>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
	  </div>
	  	
      <!--//headder-->
      <!-- banner -->
      <div class="inner_page-banner one-img">
      </div>
      <!--//banner -->
      <!-- short -->
      <!-- //short-->
      <!--show Now-->  
      <!--show Now-->  
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
	 
         <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Toys Shop</h3>
			   <div class="row">
			<div class="col-md-10 col-md-offset-1">
            <div class="alert alert-success alert-dismissible" role="alert">
			<div id="result"><center><img src="images/giphy.gif" id="loader"></center></div>
			</div>
			</div>
			</div>  
            <div class="row">
               <div class="side-bar col-lg-3">
                  <div class="search-hotel">
                     <h3 class="agileits-sear-head">Search Here..</h3>
                     <form action="#" method="post">
                        <input type="search" placeholder="Product name..." name="search" required="">
                        <input type="submit" value=" ">
                     </form>
                  </div>
              
				 
                  <!-- reviews -->
                                    <div class="customer-rev left-side">
                     <h3 class="agileits-sear-head">Customer Review</h3>
                     
                         <h3 class="agileits-sear-head"><?php include 'rating.php'; ?></h3>
                      
                  </div>

				  
				  <!-- //reviews -->
                  <!-- deals -->
                  			  <hr>
				  <!-- //reviews -->
                           
				 <!-- deals -->
                 
				  <div class="deal-leftmk left-side">
                  <h3 class="agileits-sear-head">Special Deals</h3>

				   <?php
			
                  $database_name = "mystore";
                  $conn = mysqli_connect("localhost","root","",$database_name);
				  $sql = "SELECT * FROM products ";
                  $result=mysqli_query($conn,$sql);
                  while($row = mysqli_fetch_array($result)){
                  echo  '<div class="row special-sec1">';
                  echo  '<div class="col-xs-4 img-deals">';
				  echo  "<img src='images/".$row['image']."'>" ;
                  echo  '</div>';
                  echo '<div class="col-xs-8 img-deal1">';
				 echo  "<h3>".$row["product_name"]."</h3>";?>
                 <?php echo "Rs"."&nbsp". $row["price"]; ?></a>
				
                        </div>
                        <div class="clearfix"></div>
                     </div>
                     
                  
				  <?php
				  }
				  ?>
				  </div>
                  <!-- //deals -->
               </div>
		       
             <div class="left-ads-display col-lg-9">
                  <div class="row">
                           <?php
			
             require 'customer.class.php';
			 $objCustomer = new customer;
			 $objCustomer->setEmail('anit.sara2010@gmail');
		     $customer = $objCustomer->getCustomerByEmailId();
			 
			 $_SESSION['cid'] = $customer['id'];
			 require 'workshop.class.php';
			 $objWorkshop = new workshop();
			 $workshops = $objWorkshop->getAllWorkshops();
			 foreach($workshops as $key  => $workshop) {
			?>
                              
		  <div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
                  <div class="product-toys-info">
                       <div class="men-pro-item">
                            <div class="men-thumb-item">
	                           <img src="images/<?=$workshop['image']; ?>">
		                     
								 <span class="product-new-top">New</span>
                                 </div>
							     <div class="item-info-product">
                                 <div class="info-product-price">
                                   <div class="grid_meta">
                                       <div class="product_price">
                                       <h5><?=$workshop['product_name']; ?></h5>   
                                      <strong> <span style="font-size: 18px;">&#x20b9;</span>
										<?=number_format($workshop['price'], 2) ?></strong>
										<button class="btn btn-success" onclick="addToCart(<?=$workshop['id'];?>)" role="button">
										  Add To Cart</button>
									   </div>
									   
									   </div>
									   
							 
										  
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                        </div>
                      </div>
					
                  </div>
               
			<?php
			 }
			?>
			
            </div>
         </div>
      </section>
	        
      <!-- //show Now-->
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
                  <p>123  Street<br>ABC, XYZ
                  <p>
               </div>
               <div class="address-gried mt-3">
                  <span class="fas fa-phone-volume"></span>
                  <p> +(000)123 4567<br>+(010)123 12345</p>
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
               © 2018 Toys-Shop. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
            </p>
         </div>
      </footer>
      <!-- //footer -->
      <!-- Modal 1-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="register-form">
                     <form action="#" method="post">
                        <div class="fields-grid">
                           <div class="styled-input">
                              <input type="text" placeholder="Your Name" name="Your Name" required="">
                           </div>
                           <div class="styled-input">
                              <input type="email" placeholder="Your Email" name="Your Email" required="">
                           </div>
                           <div class="styled-input">
                              <input type="password" placeholder="password" name="password" required="">
                           </div>
                           <button type="submit" class="btn subscrib-btnn">Login</button>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- //Modal 1-->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- cart-js -->
       <script src="js/minicart.js"></script>
      <script>
         toys.render();
         
         toys.cart.on('toys_checkout', function (evt) {
         	var items, len, i;
         
         	if (this.subtotal() > 0) {
         		items = this.items();
         
         		for (i = 0, len = items.length; i < len; i++) {}
         	}
         });
      </script>
      <!-- //cart-js -->
		<!-- price range (top products) -->
		<script src="js/jquery-ui.js"></script>
		<script>
			//<![CDATA[ 
			$(window).load(function () {
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 9000,
					values: [50, 6000],
					slide: function (event, ui) {
						$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
					}
				});
				$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

			}); //]]>
		</script>
		<!-- //price range (top products) -->

      <!-- start-smoth-scrolling -->
       <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('php,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
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
      <!-- //bootstrap working--> 
   </body>
   <script type="text/javascript">
     function addToCart(wid)
	 {
		 $('#loader').show();
		 $.ajax({
			url: "action.php",
            date: "wid=" + wid + "&action=add",
            method: "post"			
		 }).done(function(response){
			  $('#loader').hide();
			 $('.alert').show();
			 $('#result').html(response);		 
	 }
</script>   
</html>
