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
$sql = "SELECT * FROM checkout";
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

  <th>Name</th>
  <th></th>
  <th></th>
  <th>Number</th>
  <th></th>
  <th></th>
  <th>Landmark</th>
  <th></th>
  <th></th>
  
  <th>Place</th>
  <th></th>
  <th></th>
  <th>Amount</th>
  
 </tr>
 <?php
 if($result->num_rows>0){
   while($row = $result->fetch_assoc()){
 ?>
 <tr>
  <td><?php echo $row['name']; ?></td>
   <td></td>
    <td></td>
  <td><?php echo $row['number']; ?></td>
   <td></td>
    <td></td>
  <td><?php echo $row['landmark']; ?></td>
   <td></td>
    <td></td>
  <td><?php echo $row['place']; ?></td>
   <td></td>
  <td></td>
  <td><?php echo $row['amt'];?></td>
  
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
 
 