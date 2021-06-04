<?php
session_start();
if($_SESSION["username"]==true)
{
echo $_SESSION["username"];
}
else
{
	header('location:logintest.php');
}
?>
<a href="logsout.php">Logout</a>
<div class="login-wrap">
<div class="login-html">
<div class="login-form">
    <br/>
    <div id="login">  
        <form method="post" action="indexxx.php">
<input type="submit" class="button" name="submit" id="submit" value="Go to Home"/>
</form>
</div>
</div>
</div>
</div>