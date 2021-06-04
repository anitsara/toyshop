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
	$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
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
	$sq = "INSERT INTO products (product_name, price, quantity, details, category, subcategory, date_added,image,text) 
        VALUES('$product_name','$price','$quantity','$details','$category','$subcategory',now(),'$image','$text')";
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head><?php include "database.php"; ?>
<script>
function getsubcategory(val) {
	$.ajax({
	type: "POST",
	url: "toysubcategory.php",
	data:'category_id='+val,
	success: function(data){
		$("#subcategory-list").html(data);
	}
	});
}

function showMsg()
{

	$("#msgC").html($("#category-list option:selected").text());
	$("#msgS").html($("#subcategory-list option:selected").text());
	return false;
}
</script>
<body>
<br>
<br>
<h3>&nbsp;&nbsp;ADD NEW ITEM</h3>
<form  action="#" method="POST" enctype="multipart/form-data">
<table width="90%" border="0" cellspacing="0" cellpadding="6"/>

 <tr>
  <td width="20%">Product Name</td>
  <td width="80%">
   <input name="product_name" type="text" id="product_name"size="64"/>
   </td>
  </tr>
  <tr>
  <td>Product Price(Rs.)</td>
  <td>
  <input name="price"type="text"id="textfield"size="6"/>
  </td>
  </tr>
  <tr>
  <td>Qty</td>
  <td>
  <input name="quantity" type="text" id="textfield" size="12"/>
  </td>
  </tr>
  <tr>
<td>Category:</td>
<td><select name="category" id="category-list"   onChange="getsubcategory(this.value);">
<option value="">Select Category</option>
<?php
 $sql1="SELECT * FROM catdropdown";
 $results=$dbhandle->query($sql1); 
 while($rs=$results->fetch_assoc()) { 
?>
<option value="<?php echo $rs["category_id"]; ?>"><?php echo $rs["category"]; ?></option>
<?php
}
?>
</select></td>
</tr>
<tr>
<td>Subcategory:</td>
<td>
<select id="subcategory-list" name="subcategory">
<option value="">Select Subcategory</option>
</select>
</td></tr>
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
   <td></td>
   
 <td><input type="file" name="image"></td>
 </tr>
 
 <tr>
 <td></td>
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