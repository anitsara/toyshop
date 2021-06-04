<?php
   session_start();

	$error='';
	if(isset($_POST['submit'])){
	if(isset($_POST['username'])|| empty($_POST['password'])){
	$error = "Username or Pasword is invalid";
	}
	else{
	       $username=$_POST['username'];
		   $password=$_POST['password'];
		   
		   $connection=mysql_connect("localhost","root","");
		   
		   $username=stripslashes($username);
		   $password=stripslashes($password);
           $username =mysql_real_escape_string($username);
		   $password =mysql_real_escape_string($password);
           
		   $db=mysql_select_db("databasenew",$connection);
		   
		   $query = mysql_query("select * from login where password='$password' AND username='$username'",$connection);
           $rows = mysql_num_rows($query);
		  
                 if($rows == 1){
                        $_SESSION['login_user']=$username;
						header("location:prof.php");
						}
                   else
				   {
				    $error = "INVALID";
					}
                mysql_close($connection);
	
	}
			
     }
			?>