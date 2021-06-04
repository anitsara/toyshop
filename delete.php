<?php

   $conn = new mysqli("localhost","root","","mystore");
   $sql = "DELETE FROM products WHERE id='$_GET[id]'";
   if(mysqli_query($conn,$sql))  
   
       header("refresh:1; url=inventorylist.php");       
			  
   else
	    echo"error";
 
	
?>