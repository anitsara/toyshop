<?php
$sql = mysqli_connect("localhost","root","","mystore");
$query="SELECT quantity FROM products";
if($query>20)
{
  echo "In Stock";
 }
 else
 {
  echo " Out of stock";
  }
?>