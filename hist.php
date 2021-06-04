<?php
    session_start();
    $database_name = "mystore";
    $conn = mysqli_connect("localhost","root","",$database_name);
    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="cartss.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="cartss.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }
    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="cartss.php"</script>';
                }
            }
        }
    }
?>

<!doctype html>
<html>
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
  
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');
        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>
</head>
<body>
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
                     <li class="nav-item active">
                        <a href="shop1.php" class="nav-link">Shop Now</a>
                     </li>
                      <li class="nav-item">
                        <a href="gallery1.php" class="nav-link">Gallery</a>
                     </li>
                      <li class="nav-item ">
                        <a href="contact1.php" class="nav-link">Contact</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
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
               <li>Shop</li>
            </ul>
         </div>
      </div>
	   <h3 class="title2">Purchase History</h3>
        <div class="table-responsive">
            <table class="table table-bordered" width="100">
            <tr>
                <th width="10%">id</th>
                <th width="10%">Name</th>
                <th width="13%">Price</th>
       
            </tr>
<?php
$conn = new mysqli("localhost","root","","mystore");
$id=$_SESSION["id"];
$sql = "SELECT * FROM details where cid = '$id'";
$result = $conn->query($sql);
?>
<?php
 if($result->num_rows>0){
   while($row = $result->fetch_assoc()){
 ?>
 <tr>
  <td><?php echo $row['id']; ?></td>


   
  <td><?php echo $row['pname']; ?></td>
   
  <td><?php echo $row['pprice']; ?></td>
 <?php }} ?> 
	</table>
	
	</div>
	<button type="button" class="btn btn-primary btn-lg" onclick="location.href='shop1.php'">Continue Shopping</button>&nbsp;&nbsp;
<button type="button" class="btn btn-primary btn-lg" onclick="location.href='cartss.php'">Go To Cart</button>
<br>
<br>
</div>
</body>
</html>