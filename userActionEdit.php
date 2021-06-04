<?php

        include("includes/publicheader.php"); 
        include("includes/menu.php");
    
   include 'includes/dbConnect.php';
?>

<div id="content" align="center">
    <?php
     
        if (isset($_REQUEST['val']))
        {
            $sql = "select * FROM login where id={$_REQUEST['val']}";
            $result=mysqli_query($conn,$sql); 
            $row = mysqli_fetch_array($result); 
        }
        else if (extract($_POST))
        {
            $pass = $_REQUEST['pass'];
	    $status = $_REQUEST['status'];
                             
            $all = array($pass, $status);
               
            $flag = 0;
            foreach ($all as $field)
                if($field == "")
                    $flag = 1;
            $error = array();
       
            if($flag == 1)
                echo "<div id='error2'>Fill in all the fields</div>";
            else if(!empty($error))
                echo "<div id='error2'>Check: " . implode(", ", $error) . "</div>";  
            else if (extract($_POST))
            {
		$sql = "";
				
                 if (isset($_POST['update']))
                {
					
                    $sql = "select * from login where id={$_REQUEST['uniqueId']}";
					
                                 $result=mysqli_query($conn,$sql); 
               			 $row = mysqli_fetch_array($result);                 

                    if ($row['password']!=$pass || $row['status']!=$status)
                    {
						
                        $sql = "update login set password='{$pass}', status={$status}
                             where id={$_REQUEST['uniqueId']}"; 
				
			$res=mysqli_query($conn,$sql);			
	if($res)
	{
  		echo "<div id='error2'>Updated</div>";
		header("location:registrationdetails.php?info=Updated");
	}
	else
	{
		echo "<div id='error2'>Error,Try Again</div>";
		header("location:registrationdetails.php?info=Error,Try Again");
	}					
   }
					
                    
                   
 }
 }
}
    ?>
    <form method="post" action="userActionEdit.php">
        <div id="form_label">
            <?php
                if(isset($_REQUEST['val']) || isset($_POST['update']))
                    echo "Edit user Details";
              
            ?>
        </div>
        <div>
        <?php
if(isset($_GET['info'])) //check error is passed then
{
	echo "<span  id='e1' style='color:#FF0000;'>".$_GET['info']."</span>";
	//Receiving the error to show in <span tag>
}
?>
</div>
        <table align="center">
            <?php
                if(isset($_REQUEST['val']))
                    echo "<input type='hidden' name='uniqueId' id='uniqueId'
                                value='{$_REQUEST['val']}' />";
                if(isset($_POST['update']))
                    echo "<input type='hidden' name='uniqueId' id='uniqueId'
                                value='{$_REQUEST['uniqueId']}' />";
            ?>
            
<tr>
                            <td width='200px'><b>User Name</b></td>
                            <td>
                             <?php
							 if(isset($_REQUEST['val']))
                                    echo " <b><font color='#FF0000'>{$row['username']}</font></b>";
                              
							 ?>
							
							</td>
               </tr>
    <tr>
                <td width="150px">Password</td>
                <td><input type="text" name="pass" id="pass"
                    value="<?php
                                if(isset($_REQUEST['val']))
                                    echo $row['password'];
                                if(extract($_POST))
                                    echo $pass;
                            ?>"
                    placeholder="password"/></td>
            </tr>

            
                <td width="150px">status</td>
                    
                 <td>
                    <input type="radio" name="status" required
                        id="yes" value="1" 
                        <?php 
                            if((isset($_REQUEST['val']) && $row['status']==1) ||
                                (extract($_POST) && $status==1))
                                echo "checked";
                        ?> />
                    <label for="yes">Active</label>
                    &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="status" 
                        id="no" value="0" 
                        <?php
                            if((isset($_REQUEST['val']) && $row['status']==0) ||
                                (extract($_POST) && $status==0))
                                echo "checked";
                        ?> />
                    <label for="no">Deactive</label>
                </td>
                
                
                
            </tr>      
            
        </table>
        <br/>
        <input type="button" value="Back" onClick="location.href='registrationdetails.php';" />
        <input type="submit" 
                    <?php
                        if(isset($_REQUEST['val']) || isset($_POST['update']))
                            echo "id='update' name='update' value='Update'";
                        else
                            echo "id='add' name='add' value='Add'";
                    ?> 
        />
        <br/><br/>
    </form>
</div>

