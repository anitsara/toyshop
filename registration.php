<?php
        require_once("includes/session.php");
	    include("includes/publicHeader1.php");
   //     include("includes/header.php"); 
        
   //     include("includes/function.php");
       
        $conn=mysqli_connect('localhost','root','','databasenew');
?>

<div class="login-wrap">
<div class="login-html">
<div class="login-form">
<br/>
<?php
 		
if (extract($_POST))
       		 {
            $fname = $_REQUEST['fname'];
            $pass = $_REQUEST['pass'];
              $email = $_REQUEST['email'];
			   $date = $_REQUEST['date'];
			 $phone = $_REQUEST['phone'];
            $usertype = $_REQUEST['tid'];
            $all = array($fname,$pass,$usertype);


            $flag = 0;
            foreach ($all as $field)
                if($field == "")
                    $flag = 1;
            $error = array();
            if($flag == 1)
                echo "<div id='error2'>Fill in all the fields</div>";
            else if(!empty($error))
                echo "<div id='error2'>Check: " . implode(", ", $error) . "</div>"; 
				
				
			    $username = mysqli_real_escape_string($conn,$_POST['fname']);//Some clean up :)

                
                $check_for_username = mysqli_query($conn,"SELECT username FROM  login WHERE username='$fname'");
				if(mysqli_num_rows($check_for_username))
				{
					//echo '1';//If there is a  record match in the Database - Not Available
					$flag=2;
					echo "<div id='error2'>ERROR Account Already exist!!! </div>";
				}
				else
				{
					//echo '0';//No Record Found - Username is available 
					$flag=3;
				}	
				 
           
            if(extract($_POST))
                {    
			  
			
				if($flag==3)
				{
				      
                    if (isset($_POST['add']))
                    {
						 
			$sql = "INSERT INTO login(username,password,email,date,phone,status,usertype)values('{$fname}','{$pass}','{$email}','{$date}','{$phone}',1,'{$usertype}')";
//echo $sql;
                      
 
            $res=mysqli_query($conn,$sql);

			$reg=mysqli_insert_id($conn);
if($reg)
  echo "<div id='error2'>Inserted</div>";
else
echo "<div id='error2'>Error,Try Again</div>";

                     	 
                    }
				}
				}
			 }
			 				
        
    ?>
	
	
    <form method="post" action="registration.php">
	<br>
	<br>
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Register</label>
<div id="login">        
<div id="form_label">
            <?php
                if(isset($_REQUEST['val']) || isset($_POST['update']))
                    echo "Edit Registration Details";
                else
                    echo "";
            ?>
        </div>
        <table >
            <?php
                if(isset($_REQUEST['val']))
                    echo "<input type='hidden' name='uniqueId' id='uniqueId'
                                value='{$_REQUEST['val']}' />";
                if(isset($_POST['update']))
                    echo "<input type='hidden' name='uniqueId' id='uniqueId'
                                value='{$_REQUEST['uniqueId']}' />";
            ?>
            
            <tr>
                <td><span>Name</span></td>
                <td><input type="text" name="fname" id="fname"
                     required /></td>
            </tr>
           
             <tr>
                <td><span>Password</span></td>
                <td><input type="password" name="pass" id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                     required />
				</td>
            </tr>
			   <tr>
                <td><span>DOB</span></td>
                <td><input type="date" name="date" id="date"
                     required />
				</td>
            </tr>
            <tr>           
             <td><span>Email</span></td>
                <td><input type="text" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                   required />
				</td>
            </tr>
			     <tr>           
             <td><span>Phone</span></td>
                <td><input type="text" name="phone" pattern="^\d{10}$" id="phone" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');"
                     required />
				</td>
            </tr>
       
       
 <tr>
                <td><span>Type of User</span></td>
                <div id="styled-select">
                 <td width="150" border="1px solid #AAAAAA;"><select name="tid" id="tid"  style="width:215px;" required />
                <option value="">-- Select a User --</option>
                                 <?php
                                        $sql = "select typeid, typename from usertype    where status=1";
        $result=mysqli_query($conn,$sql);
	
                                        
                                        while ($row = mysqli_fetch_array($result))
                                            echo "<option value='{$row['typeid']}'>
                                                                {$row['typename']}</option>";
                                    ?>
                      </select></td>
                </div>
                <br>
              <br>
                
            <tr>
        </table>
        <br/>
        &nbsp;  &nbsp;  &nbsp; <input type="button" value="Back" onClick="location.href='logintest.php';" />
          <br>
          <br>
        &nbsp;  &nbsp;  &nbsp; <input type="submit" 
                    <?php
                        if(isset($_REQUEST['val']) || isset($_POST['update']))
                            echo "id='update' name='update' value='Update'";
                        else
                            echo "id='add' name='add' value='Add'";
                    ?> 
                    
                   

        />
        <br/><br/>
    </form>
     <?php
if(isset($_GET['info'])) //check error is passed then
{
	echo "<span  id='e1' style='color:#FF0000;'>".$_GET['info']."</span>";
	//Receiving the error to show in <span tag>
}
?>
</div>
</div>
</div>
</div>

<script>
var myInput = document.getElementById("pass");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
