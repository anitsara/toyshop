<?php
   require_once("includes/session.php");
    if (isset($_SESSION['username']))
       header('location:redirect.php');
    include("includes/publicHeader.php");
    include("includes/menu.php");
?>

<div id="content">
    <br/>
    <div id="login">  
        <form method="post" action="login.php">

    <br/>
     
        <form method="post" action="login.php">
         
            <?php
			
			session_start();
			
			
			
                if(extract($_POST))
                {
					
                    include 'includes/dbConnect.php';
                  
                    $username = $_REQUEST['username'];
                    $password = $_REQUEST['password'];
                    $all = array($username, $password);
                    $flag = 0;
                    foreach ($all as $field)
                        if($field == "")
                            $flag = 1;
                    
                    if($flag == 1)
                        echo "Fill in all the fields";
                    else
                    {
                      
                        $sql = "select username,password,email,status,usertype from logins where username='{$username}' and password='{$password}' and status=1 ";
                                
        $results=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($results);
	
        $user=$row['username'];
	$pass=$row['password'];
	$type=$row['usertype'];
        if(($user==$username)&&($pass==$password))
	{
		$_SESSION['type'] = $row['role'];
	    $_SESSION['password'] = $row['password'];
		$_SESSION['username'] = $row['username'];
                 
				 if($user=="admin"||$type=="admin")
				 {
					 header('location:admin.php');
				 }
				 else{
					  header('location:indexxx.php');
				 }
		
	}
        else
	{?>
	<h3><center><?php echo "Incorrect Username/Password";?></h3>
	<?php
	}
					
			}
                }
            ?>
        </form>
    </div>
</div>

<?php
    //include("includes/footer.php");  
?>