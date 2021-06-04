<?php
   require_once("includes/session.php");
	include("includes/publicHeader.php");
   
   include("includes/menu.php");
   require("includes/pagination.php");
    include("includes/paginationVariables.php");
    include 'includes/dbConnect.php';
   
?>
<head>
<style>
table
{
	border-collapse:collapse;
	width:50%;
	color:white;
	color: #d96459;
	font-family: monospace;
	font-size: 15px;
	text-align:center;
}
th{
	background-color: #d96459;
	color:white;
}
.variablecolor{
color: blue;}
</style>
<table>
<tr>
  <th>Id</th>
  <th>Product Name</th>
  <th>Quantity</th>
  <th>Description</th>
 
 </tr>
<?php
echo "<br>";
echo "<br>";
$conn = new mysqli("localhost","root","","mystore");
$sql = "SELECT id,product_name,quantity  FROM products ";
$result=mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)){
    echo "<tr><td>".$row["id"]."</td><td>".$row["product_name"]."</td><td>".$row["quantity"]."</td>";
    echo "<td>"; 
	if($row["quantity"]<20)
	{
 	echo '<span style="color: green;">Out of stock</span>';
	}
	else
	{
		echo '<span style="color:violet;">In stock</span>';
	}
	echo "</td></tr>";
}
   echo "</table>";
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
 
 