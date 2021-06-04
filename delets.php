<?php

   $conn = new mysqli("localhost","root","","dropdown");
   $sql = "DELETE FROM dropdown WHERE id='$_GET[id]'";
   if(mysqli_query($conn,$sql))  
   
       header("refresh:1; url=subcategory.php");       
			  
   else
	    echo"error";
 
	
?>