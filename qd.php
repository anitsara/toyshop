<?php
//Database Connection
include 'conn.php';
//Get ID from Database
if(isset($_GET['qd_id'])){
 $sql = "SELECT quantity FROM products WHERE id =" .$_GET['qd_id'];
 $result = mysqli_query($conn, $sql);
 
 $row = mysqli_fetch_array($result);
 $qty=$_POST['quantity'];
 $qu=$row['quantity'];
 $t=$qu-$qty;
 $update = "UPDATE products SET quantity='$t' WHERE id = ".$_GET['qd_id'];
 $up = mysqli_query($conn,$update);
 
}

