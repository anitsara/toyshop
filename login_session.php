<?
include('logs.php');

if(isset($_SESSION['login_user'])){
	header("location:shops_session.php");
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

