<?php
   // require_once("includes/session.php");
	include("includes/publicHeader.php");
   
   include("includes/menu.php");
   require("includes/pagination.php");
    include("includes/paginationVariables.php");
    include 'includes/dbConnect.php';
   
?>

<script>
    $(document).ready(function() 
        { 
            $("#sort").tablesorter({ 
            3: {sorter: false}
            });
              $("#sort").dataTable({
                "sPaginationType": "full_numbers",
                "bLengthChange": false,
                "bAutoWidth": false,
                "bSort": false
            });
        } 
    );
        
    $(window).bind('scroll', function(){
        if($(this).scrollTop() > 200) {
            $("#scroll").fadeIn();
        }
        else
            $("#scroll").fadeOut();
    });
</script>

<div id="display" align="center">
    <div id="page_label">User Details </div>
    <div id="display_table">
        <form method="post" action="registrationdetails.php">
            <table id="sort" class="tablesorter2">
                <thead>
                    <tr>
                       
                        
                        <th width="175px">User Name</th>
                         <th width="175px">Password</th>
                        <th width="175px">Email-Id</th>
                        <th width="60px">Status</th>
                        <th width="60px">Action</th>
                       
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // Query to get row count
                        $sql = "select id,username,password,email,status from login";
                        $result=mysqli_query($conn,$sql); 
                        $rows=mysqli_num_rows($result);
                        // Actual query to be displayed
                        $sql = $sql . " order by id";
                      
                      $result=mysqli_query($conn,$sql); 
				
                        if(mysqli_num_rows($result)>0)
                        {
                            while ($row = mysqli_fetch_array($result))
                            {
								
								 echo "<tr>
                                        
                                        <td>{$row['username']}</td>
										<td>{$row['password']}</td>
                                                                                                                                                                                                 <td>{$row['email']}</td>
										<td>{$row['status']}</td>
										<td align='center'>
                       <a href='userActionEdit.php?val={$row['id']}'>";
					   echo "<img src='images/edit.png' title='Edit Details'></a> 
									 </tr>";
					    
                                
                            }
                        }
                    ?>                                                            
                </tbody>
                 
            </table>
            <br/>
            <center><input type="button" value="Back" onClick="location.href='admin.php';" /></center>
            
           
            
        </form>        
    </div>
    <br/>
   
</div>
<?php
if(isset($_GET['info'])) //check error is passed then
{
	echo "<span  id='e1' style='color:#FF0000;'>".$_GET['info']."</span>";
	//Receiving the error to show in <span tag>
}
?>

