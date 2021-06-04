<?php


   $conn = new mysqli("localhost","root","","dropdown");
   $sql = "DELETE FROM catdropdown WHERE category_id='$_GET[id]'";
   if(mysqli_query($conn,$sql))  
   
       header("refresh:1; url=catdropdown.php");       
			  
   else
	    echo"error";
 
	
?>