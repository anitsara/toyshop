<?php
    session_start();
    $database_name = "mystore";
    $conn = mysqli_connect("localhost","root","",$database_name);
    require 'item.php';
	
	mysqli_query($conn,'insert into order_details(name,date,status,username) values("New Order","'.date('Y-m-d').'",0,"acc2")';
	$ordersid = mysqli_insert_id($conn);
	echo $order_id;
	  $cart = unserialize ( serialize ($_SESSION ['cart'] ));
	 for($i = 0; $i < count ($cart); $i ++) {
		 mysqli_query($conn,'insert into orders_products(product_id,order_id,price,quantity) values('.$cart[$i]->id.','.order_id.','.$cart[$i]->price.','.$cart[$i]->quantity.')');
	 }
	unset[$_SESSION['cart']);
	
	
?>
Thanks for buying products. Click<a href="shop.php>Here</a>to continue buy product.