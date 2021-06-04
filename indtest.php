<?php
session_start();
$db = mysqli_connect("localhost","root","","databasenew");

if(isset($_REQUEST["submit"]))
{
 $username=$_REQUEST["username"];
 $password=$_REQUEST["password"];
 $query=mysqli_query($db,"select * from login where username='$username' && password='$password'");
 $rowcount=mysqli_num_rows($query);
 if($rowcount==true)
 {
	$_SESSION["username"]=$username;
   header('location:welcom.php');
  }
  else
  {
   echo "Wrong";
   }
}
   ?>

     <form method="post" >
            
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
                           
                        </div>
                           <br>
                           <br>
                                          &nbsp;  &nbsp;  &nbsp;  &nbsp; <input type="submit" class="button" name="submit" 
										  id="submit" value="Sign In"/>
                    </td>
                </tr>
            </table>
             
           
        </form>
		