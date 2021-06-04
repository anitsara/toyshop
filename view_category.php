<?php
   require_once("includes/session.php");
	include("includes/publicHeader.php");
   
   include("includes/menu.php");
   require("includes/pagination.php");
    include("includes/paginationVariables.php");
    include 'includes/dbConnect.php';
   
?>

<?php
echo "<br>";
echo "<br>";
$conn = new mysqli("localhost","root","","dropdown");
$sql = "SELECT * FROM dropdown ";
$result=mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)){
   echo "ID:".$row["id"] ."<br>". "&nbsp". "&nbsp". "CATEGORY:".$row["subcategory"] . "&nbsp"."."."<a href=deletecat.php?id=".$row['id'].">Delete</a>"."."."<br>";
   }
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
 
 