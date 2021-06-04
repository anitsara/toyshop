<?php
session_start();
   // require_once("includes/session.php");
	
  // if (!isset($_SESSION['username']))
   //     header('location:redirect.php');
   // if ($_SESSION['type']!="admin")
    //    header('location:redirect.php');
	include("includes/publicHeader.php");
      include("includes/menu.php");
   include 'includes/dbConnect.php';
   if($_SESSION["user"]==true)
             {
	             echo "Welcome ".$_SESSION["user"];
			 }
			 else
			 {
				 header('location:logintest.php');
			 }
?>

<div id="content1">
    <div id="left">
      
        <div id="scroll">
            <ul>
                <?php
                    $sql = "select id, heading from notification where
                         status=1";
                 $results=mysqli_query($conn,$sql);
	                          
                    if(mysqli_num_rows($results)>0)
                        while ($row = mysqli_fetch_array($results))
                            echo "<li>
                                    <a href='admin.php?val=1#{$row['id']}'>
                                        {$row['heading']}
                                    </a>
                                  </li>";
                    else
                        echo "HURRY UP, THE STOCKS ARE GETTING OVER";
                ?>
            </ul>
        </div>
    </div>
    <div id="right">
        <?php
            echo "<div id='heading'>";
            if (isset($_REQUEST['val']))
                echo "ATTENTION PLEASE";
            else
                echo "KIDDY SHOP";
            echo "</div>";
            if (isset($_REQUEST['val']))
            {
                $sql = "select id, heading, content from notification
                    where status=0";
                
                $result=mysqli_query($conn,$sql);     
                if(mysqli_num_rows($result)>0)
                {
                    echo "<ol>";
                    while ($row = mysqli_fetch_array($result))
                        echo "<li>
                                <a name='{$row['id']}'></a>
                                <b>{$row['heading']}</b>
                                <p>" . nl2br(stripslashes($row['content'])) . "</p>
                              </li>";
                    echo "</ol>";
					
					echo"<a href='admin.php'><img src='images/back.png'/>&nbsp;&nbsp;Back</a>";
                }
                else
                    echo "HURRY UP, THE STOCKS ARE GETTING OVER";
              //  unset($_SESSION['notification']);
            }
            else
            {            
        ?>
                <p>Welcome to our shop. Hope you all have a good time. Our shop is all about for kids.</p>
                <p>This project is about the online toys shop. This project has online purchase facility.</p>
                <p>In this there is add to cart facility. The site is fully responsive one.</p>
                <p>There is different mode of payments available. Which is upto the choice of customer.</p>
                <p>There is css, jss , html and php is used.</p>

        <?php
            }
        ?>
    </div>
</div>
<div style="clear:both;"></div>

