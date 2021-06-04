<?php
   require_once("includes/session.php");
	include("includes/publicHeader.php");
   
   include("includes/menu.php");
   require("includes/pagination.php");
    include("includes/paginationVariables.php");
    include 'includes/dbConnect.php';
   
?>
<?php
$sql=mysqli_connect("localhost","root","","dropdown");
$usrtable="dropdown";
$columnname="subcategory";
$columnnames="category";
$query="SELECT * FROM $usrtable";
$result=mysqli_query($sql,$query);

?>
<?php
$db_host="localhost";
$db_username="root";
$db_pass="";
$db_name="mystore";
// Parse the form data and add inventory item to the system
$msg="";
if (isset($_POST['submit'])) {
	$target="images/".basename($_FILES['image']['name']);
	$conn = mysqli_connect($db_host,$db_username, $db_pass,$db_name);
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
	$price = mysqli_real_escape_string($conn, $_POST['price']);
	$category = mysqli_real_escape_string($conn, $_POST['category']);
	$subcategory = mysqli_real_escape_string($conn, $_POST['subcategory']);
	$details = mysqli_real_escape_string($conn, $_POST['details']);
    $image=$_FILES['image']['name'];
	$text=mysqli_real_escape_string($conn,$_POST['text']);
	
	// See if that product name is an identical match to another product in the system
	$sql = mysqli_query($conn,"SELECT id FROM products WHERE product_name='$product_name'");
	$productMatch = mysqli_num_rows($sql); // count the output amount
    if ($productMatch > 0) {
		echo 'Sorry you tried to place a duplicate "Product Name" into the system, <a href="newproductf.php">click here</a>';
		exit();
	}
	// Add this product into the database now
	$sq = "INSERT INTO products (product_name, price, details, category, subcategory, date_added,image,text) 
        VALUES('$product_name','$price','$details','$category','$subcategory',now(),'$image','$text')";
     mysqli_query($conn,$sq);
	
	if(move_uploaded_file( $_FILES['image']['tmp_name'], $target))
	{
		
		$msg = "Image uploaded";
	}
	else{
		$msg = "Problem";
	}
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


<!DOCTYPE html>
<html>
<head>
 <title>New</title>
</head>
<body>
<br>
<br>
<h3>ADD NEW ITEM</h3>
<form  action="#" method="POST" enctype="multipart/form-data">
<table width="90%" border="0" cellspacing="0" cellpadding="6"/>

 <tr>
  <td width="20%">Product Name</td>
  <td width="80%">
   <input name="product_name" type="text" id="product_name"size="64"/>
   </td>
  </tr>
  <td>Product Price</td>
  <td>
  Rs.
  <input name="price"type="text"id="textfield"size="12"/>
  </td>
  </tr>
 <tr>
<td>Category</td>
<td>
 <select name="category">
<option>Select any</option>
<?php
  if($result)
  {
	  while($row=mysqli_fetch_array($result))
	  {
		  $stname=$row["$columnnames"];
		  echo"<option>$stname<br></option>";
	  }
  }
?>
</select>
</td>
</tr>
<tr>
<td>Subcategory</td>
<td>
<select name="subcategory">
<option>Select any</option>
<?php
  if($result)
  {
	  while($row=mysqli_fetch_array($result))
	  {
		  $stname=$row["$columnname"];
		  echo"<option>$stname<br></option>";
	  }
  }
?>
</select>
</td>
</tr>
<tr>
 <td> Product Details</td>
 <td>
 <textarea name="details" id="textarea" cols="64" rows="5"></textarea>
 </td>
 </tr>
 <tr>
  <td>Product Image</td>
   <td><input type="hidden" name="size" value="100000000"></td>
  </tr>
  <tr>
 <td><input type="file" name="image"></td>
 </tr>
 
 <tr>
 <td><textarea name="text" cols="40" rows="4"></textarea></td>
 </tr>
 <tr>
 <td>&nbsp;</td>
<td>
 <input type="submit" name="submit"  value="Add this item"/>
</td>
</tr>
</table>
</form>
</body>

</html>