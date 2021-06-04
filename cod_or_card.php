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
$sql = "SELECT * FROM cod";
$result = $conn->query($sql);
$db = "SELECT * FROM credit";
$res = $conn->query($db);
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

  <th>Name</th>
  <th></th>
  <th></th>
  <th>Price</th>  
 </tr>
 <?php
 if($result->num_rows>0){
   while($row = $result->fetch_assoc()){
 ?>
 <tr>
  <td><?php echo $row['name']; ?></td>
   <td></td>
    <td></td>
  <td><?php echo $row['price'];?></td>
  
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
 <table>

<tr>

  <th>Name</th>
  <th></th>
  <th></th>
    <th>Name_on_card</th>
  <th></th>
  <th></th>
  <th>Card_Number</th>  
 </tr>
 <br>
 <br>
 <?php
 if($res->num_rows>0){
   while($row = $res->fetch_assoc()){
 ?>
 <tr>
  <td><?php echo $row['names']; ?></td>
   <td></td>
    <td></td>
	<td><?php echo $row['name']; ?></td>
   <td></td>
    <td></td>
  <td><?php echo $row['number'];?></td>
  
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
 
 