<?php
        require_once("includes/session.php");
	    include("includes/publicHeader1.php");
   //     include("includes/header.php"); 
        
   //     include("includes/function.php");

if(isset($_POST['submit']))
    {
	 	$db = mysqli_connect("localhost","root","","databasenew");

                  
                    $username = ($_POST['username']);
                       
				    $newpassword = ($_POST['newpassword']);
					$repassword = ($_POST['repassword']);
					
     					
	$query=mysqli_query($db,"SELECT username FROM login WHERE username='$username'");
	$row=mysqli_fetch_assoc($query);
    
	if($username=="")
                        echo "Fill in all the fields";
                   
		if($newpassword==$repassword && $username==$row['username'] )
		{
			$querychange=mysqli_query($db,"UPDATE login SET password='$newpassword' WHERE username='$username'");
		    session_destroy();
		}
		else
		{
			echo("does not match");
		}
    
}
?>

<div class="login-wrap">
<div class="login-html">
<div class="login-form">
<br/>

    <form method="post" action="forgotpass.php">
	<br>
	<br>
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">FORGOT PASSWORD</label>
<div id="login">        
<div id="form_label">
        </div>
        <table >
            <tr>
                <td><span>Username</span></td>
                <td><input type="text" name="username" id="username"
                    value="" required /></td>
            </tr>
			 
           <tr>
                <td><span>Password</span></td>
                <td><input type="password" name="newpassword" id="newpassword"
                    value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required /></td>
            </tr>
			<tr>
                <td><span>Retype Password</span></td>
                <td><input type="password" name="repassword" id="repassword"
                    value="" required /></td>
            </tr>
        </table>
        <br/>
        &nbsp;  &nbsp;  &nbsp; <input type="submit" value="Login" name="submit" />
        <br><br>
		&nbsp; &nbsp;  &nbsp; <input type="button" value="Back" onClick="location.href='logintest.php';" /> 
		  <br>
      
        <br/><br/>
    </form>
    
</div>
</div>
</div>
</div>