<?php
 	session_start();
	
			  include("includes/publicHeader1.php");
		$db = mysqli_connect("localhost","root","","databasenew");

              if(isset($_REQUEST["submit"]))
{
                  
                    $username = $_REQUEST['username'];
                    $password = $_REQUEST['password'];
					
					
					
	$query="select * from login where username='$username' && password='$password'";
			     
	$result=mysqli_query($db,$query);
 $rowcount=mysqli_num_rows($result);
 $row=mysqli_fetch_array($result);
 if($rowcount==1&&($row['status']==1))
 {
	
	$_SESSION["user"]=$username;
	$user=$_SESSION["user"];
    $sql="select cid from login where username = '$user'";
	$result = mysqli_query($db,$sql);
	$rows = mysqli_fetch_assoc($result);
	$_SESSION['id']=$rows['cid'];
   header('location:shop1.php');
  }
  else
  {
   echo "Wrong";
   }

                   if($username=="")
                        echo "Fill in all the fields";
                   
				 if($username=="admin"&&$password="admin")
				 {
					 header('location:admin.php');
				 }
		
}
       ?>
	
  


<div class="login-wrap">
<div class="login-html">
<div class="login-form">
    <br/>
    <div id="login">  
        <form method="post">
<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Log In</label>
            
<table align="center">
                
             
                
                 
                    <td>
                        &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp; <img src="images/username.png"/>&nbsp;&nbsp;
                       <input type="text" name="username" id="username" 
                               required autofocus placeholder="Username"/>
                    </td>
                </tr>
				<td>
				</td>
                <tr>
                    <td>
                       &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  <img src="images/password.png"/>&nbsp;&nbsp;
                        <input type="password" name="password" id="password"
                               required placeholder="Password"/>
                    </td>
                </tr>
                <br>
                <tr>
                    <td style="text-align: right;">
                        <div id="forgot">
                           &nbsp;  &nbsp;  &nbsp;   &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="registration.php"> <font color="white" ><span>NEW MEMBER</span></font></a>
						   <br>
						   <br>
					   &nbsp;  &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="forgotpass.php"> <font color="white" ><span>FORGOT PASSWORD</span></font></a>
                           
                        </div>
                           <br>
                           <br>
						   <br>
                                          &nbsp;  &nbsp;  &nbsp;  &nbsp; <input type="submit" class="button" name="submit" 
										  id="submit" value="Sign In"/>
                    </td>
                </tr>
            </table>
             
           
        </form>
		
    </div>
</div>
</div>
</div>

