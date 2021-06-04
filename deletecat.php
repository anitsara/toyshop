<?php

   $conn = new mysqli("localhost","root","","dropdown");
   $sql = "DELETE FROM dropdown WHERE id='$_GET[id]'";
   if(mysqli_query($conn,$sql))  
   
       header("refresh:1; url=view_category.php");       
			  
   else
	    echo"error";
 
	
?>