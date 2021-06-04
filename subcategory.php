<?php
   require_once("includes/session.php");
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
<?php
$link=mysqli_connect("localhost","root","","dropdown");
if (isset($_POST["submit"])) 
{
$subcategory = $_POST["subcategory"];
$category_id = $_POST["category_id"];
$sq = "INSERT INTO `dropdown`(`category_id`,`subcategory`) 
      VALUES ('$category_id','$subcategory')";
     mysqli_query($link,$sq);
}

?>

<!DOCTYPE html>
<html>
<head>
 <title>New</title>
</head>
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
<body>
<br>
<br>
<h3>ADD NEW CATEGORY</h3>
<form  action="#" method="POST">
<input name="subcategory" type="text"  size="64"/>
<select name="category_id">
<option>Select any</option>
<?php
$conn = new mysqli("localhost","root","","dropdown");
$sql = "SELECT category_id FROM catdropdown ";
$result=mysqli_query($conn,$sql);
  if($result)
  {
	  
	  while($row=mysqli_fetch_array($result))
	  {
		  
		  $stname=$row["category_id"];
		  echo"<option>$stname<br></option>";
	  }
  }
?>
</select>
</td>
<input type="submit" name="submit"  value="submit"/>
</form>
<table>
<tr>
  <th>Id</th>
  <th>Subcategory</th>
  <th>Category_Id</th>
  <th>Delete</th>
 </tr>
<?php
echo "<br>";
echo "<br>";
$conn = new mysqli("localhost","root","","dropdown");
$sql = "SELECT id,subcategory,category_id FROM dropdown ";
$result=mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)){
    echo "<tr><td>".$row["id"]."</td><td>".$row["subcategory"]."</td><td>".$row["category_id"]."</td><td>"."<a href=delets.php?id=".$row['id'].">Delete</a>"."</td></tr>";
   }
   echo "</table>";
?>
</body>
</html>