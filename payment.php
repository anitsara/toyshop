<?php

session_start();
include "shopindex.php";
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$number=$_POST["number"];
$names=$_POST["name1"];	
$check="INSERT INTO `credit`(`names`,`name`, `number`)
VALUES ('$names','$name','$number')";
$test=mysqli_query($conn,$check);
header("Location: success.php");
}
if(isset($_POST["sub"]))
{
$name=$_POST["name"];
$price=$_POST["amt"];	

$check="INSERT INTO `cod`(`name`, `price`) VALUES ('$name','$price')";
$test=mysqli_query($conn,$check);
header("Location: success.php");
}
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Toys Shop </title>
<!--meta tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script>
addEventListener("load", function () {
setTimeout(hideURLbar, 0);
}, false);

function hideURLbar() {
window.scrollTo(0, 1);
}
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
<!--checkout-->
<link rel="stylesheet" type="text/css" href="css/checkout.css">
<!--//checkout-->
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
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
						    <form action="logout.php" method="get" target="_blank">
                              <button type="button" onclick="window.location.href='logout.php'"> <span class="fa fa-sign-out-alt"></span></button>
                           </form>
						   </li>
                      
                     </ul>
                  </div>
               </div>
</div>
</div>

</div>
</div>
<!--//headder-->
<!-- banner -->
<div class="inner_page-banner one-img">
</div>
<!-- short -->
<div class="using-border py-3">
<div class="inner_breadcrumb  ml-4">
<ul class="short_ls">
<li>
<a href="index1.php">Home</a>

</li>

</ul>
</div>
</div>
<!-- //short-->
<!-- top Products -->
<section class="checkout py-lg-4 py-md-3 py-sm-3 py-3">
<div class="container py-lg-5 py-md-4 py-sm-4 py-3">
<div class="ads-grid_shop">
<div class="shop_inner_inf">
<div class="privacy about">
<h3>Pay<span>ment</span></h3>
<!--/tabs-->
<div class="responsive_tabs">
<div id="horizontalTab">
<ul class="resp-tabs-list">
<li>Cash on delivery (COD)</li>
<li>Credit/Debit</li>

</ul>
<div class="resp-tabs-container">
<!--/tab_one-->
<div class="tab1">


<h5>COD</h5>

<div class="check_box_one cashon_delivery">


<script type="text/javascript">
function ShowHideDiv(chkPassport) {
var dvPassport = document.getElementById("dvPassport");
dvPassport.style.display = chkPassport.checked ? "block" : "none";
}
</script>
<form action="#" method="POST" class="creditly-card-form agileinfo_form">
<label for="chkPassport">
<input type="checkbox" id="chkPassport" onclick="ShowHideDiv(this)" />
We also accept Credit/Debit card on delivery. Please Check with the agent.
<br>
<br>
<div id="dvPassport" style="display: none">

Name:
<input id="txtPassportNumber" class="form-control" type="text" name="name"  value="<?php echo $_SESSION['user']?>" readonly  />
Amount:
<input id="txtPassportNumber" class="form-control" type="text" name="amt" value="<?php 
$conn = mysqli_connect("localhost","root","","mystore");
$user=$_SESSION['user'];
$query="select amt from checkout where name='$user'";
$result=mysqli_query($conn,$query);
$rows = mysqli_fetch_assoc($result);
echo $rows['amt']; ?>" readonly />
<div class="checkout-right-basket">
<input type="submit" name="sub" value="submit"> <br>

</div>
</form>
</div>
<br>

</label>



<br>
</div>





</div>
<!--//tab_one-->
<div class="tab2">
<div class="pay_info">
<form method="POST" class="creditly-card-form agileinfo_form">
<section class="creditly-wrapper wthree, w3_agileits_wrapper">
<div class="credit-card-wrapper">
<div class="first-row form-group">
<div class="controls">
<label class="control-label">Name</label>
<input class="billing-address-name form-control" type="text" name="name1"  value="<?php echo $_SESSION['user']?>" readonly />
</div>
<div class="controls">
<label class="control-label">Name on Card</label>
<input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith" required />
</div>
<div class="w3_agileits_card_number_grids">
<div class="w3_agileits_card_number_grid_left">
<div class="controls">

<label class="control-label">Card Number</label>
<input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number"
autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;" required />
</div>
</div>
<div class="w3_agileits_card_number_grid_right">
<div class="controls">
<label class="control-label">CVV</label>
<input class="security-code form-control" inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;"  required />
</div>
</div>
<div class="clear"> </div>
</div>
<div class="controls">
<label class="control-label">Expiration Date</label>
<input class="expiration-month-and-year form-control" type="text" name="expiration" placeholder="MM / YY"  required />
</div>
<div class="checkout-right-basket">
<input type="submit" name="submit" value="submit"> <br>

</div>

</div>

</div>
</section>
</form>
</div>
</div>

<!--//tabs-->
</div>
</div>
<!-- //payment -->
<div class="clearfix"></div>
</div>
</div>
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
<p>25478 Road St.121<br>USA New Hill
<p>
</div>
<div class="address-gried mt-3">
<span class="fas fa-phone-volume"></span>
<p> +(000)123 4565<br>+(010)123 4565</p>
</div>
<div class=" address-gried mt-3">
<span class="far fa-envelope"></span>
<p><a href="mailto:info@example.com">info@example1.com</a>
<br><a href="mailto:info@example.com">info@example2.com</a>
</p>
</div>
</div>
</div>
</div>
</section>
<!--//subscribe-address-->
<section class="sub-below-address py-lg-4 py-md-3 py-sm-3 py-3">
<div class="container py-lg-5 py-md-5 py-sm-4 py-3">
<h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Get In Touch Us</h3>
<div class="icons mt-4 text-center">
<ul>
<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
<li><a href="#"><span class="fas fa-envelope"></span></a></li>
<li><a href="#"><span class="fas fa-rss"></span></a></li>
<li><a href="#"><span class="fab fa-vk"></span></a></li>
</ul>
<p class="my-3">velit sagittis vehicula. Duis posuere 
ex in mollis iaculis. Suspendisse tincidunt
velit sagittis vehicula. Duis posuere 
velit sagittis vehicula. Duis posuere 
</p>
</div>
<div class="email-sub-agile">
<form action="#" method="post">
<div class="form-group sub-info-mail">
<input type="email" class="form-control email-sub-agile" placeholder="Email">
</div>
<div class="text-center">
<button type="submit" class="btn subscrib-btnn">Subscribe</button>
</div>
</form>
</div>
</div>
</section>
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
<!--// cart-js -->
<!-- easy-responsive-tabs -->
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true, // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function (event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!-- credit-card -->
<script src="js/creditly.js"></script>
<link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />
<script>
$(function () {
var creditly = Creditly.initialize(
'.creditly-wrapper .expiration-month-and-year',
'.creditly-wrapper .credit-card-number',
'.creditly-wrapper .security-code',
'.creditly-wrapper .card-type');

$(".creditly-card-form .submit").click(function (e) {
e.preventDefault();
var output = creditly.validate();
if (output) {
// Your validated credit card output
console.log(output);
}
});
});
</script>
<!-- //credit-card -->
<!-- start-smoth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
jQuery(document).ready(function ($) {
$(".scroll").click(function (event) {
event.preventDefault();
$('html,body').animate({
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
</html>