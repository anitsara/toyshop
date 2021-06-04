<?php
   require_once("includes/session.php");
	include("includes/publicHeader.php");
   
   include("includes/menu.php");
   require("includes/pagination.php");
    include("includes/paginationVariables.php");
    include 'includes/dbConnect.php';
   
?>
<?php
$conn = new mysqli("localhost","root","","mystore");
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
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
</style>
</head>
<br>
<br>
<table>

<tr>
  <th>Id</th>
  <th></th>
  <th></th>
  <th>Product_Name</th>
  <th></th>
  <th></th>
  <th>Price</th>
  <th></th>
  <th></th>
  <th>Quantity</th>
  <th></th>
  <th></th>
  
  <th></th>
  <th></th>
  <th>Stock</th>
  <th></th>
  <th></th>
  <th>Delete</th>
  <th></th>
  <th></th>
  <th>Edit</th>
 </tr>
 <?php
 if($result->num_rows>0){
   while($row = $result->fetch_assoc()){
 ?>
 <tr>
  <td><?php echo $row['id']; ?></td>
   <td></td>
    <td></td>
  <td><?php echo $row['product_name']; ?></td>
   <td></td>
    <td></td>
  <td><?php echo $row['price']; ?></td>
   <td></td>
    <td></td>
  <td><?php echo $row['quantity']; ?></td>
   <td></td>
    <td></td>
  
   <td></td>
  <td></td>
  <?php
  echo "<td>"; 
	if($row["quantity"]<20)
	{
 	echo '<span style="color: green;">No_Stock</span>';
	}
	else
	{
		echo '<span style="color:violet;">stock</span>';
		
		
	}
	echo "</td>";
?>
<td></td>
 <td></td>
  <td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
  <td></td>
   <td></td>
  <td><a href="edit.php?edit_id=<?php echo $row['id']; ?>" alt="Edit">Edit</a></td>
 </tr>
 <?php
   }
 }
 else
 {
	 ?>
	 <tr>
	 <th colspan="2">There's no data found</th>
	 </tr>
	 <?php
	 
 }
 
 ?>
 </table>
 
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
 
 