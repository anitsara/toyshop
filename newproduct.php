<?php
   //require_once("includes/session.php");
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
   include 'shopindex.php';
   ?>
<?php 
// Parse the form data and add inventory item to the system
if (isset($_POST['product_name'])) {
	
    $product_name = mysqli_real_escape_string($conn,$_POST['product_name']);
	$price = mysqli_real_escape_string($conn,$_POST['price']);
	$category = mysqli_real_escape_string($conn,$_POST['category']);
	$subcategory = mysqli_real_escape_string($conn,$_POST['subcategory']);
	$details = mysqli_real_escape_string($conn,$_POST['details']);
	// See if that product name is an identical match to another product in the system
	$sql = mysqli_query($conn,"SELECT id FROM product WHERE product_name='$product_name' LIMIT 1");
	$productMatch = mysqli_num_rows($sql); // count the output amount
    if ($productMatch > 0) {
		echo 'Sorry you tried to place a duplicate "Product Name" into the system, <a href="inventory_list.php">click here</a>';
		exit();
	}
	// Add this product into the database now
	$sql = mysqli_query($conn,"INSERT INTO product (product_name, price, details, category, subcategory, date_added) 
        VALUES('$product_name','$price','$details','$category','$subcategory',now())");
     $pid = mysqli_insert_id($conn);
	// Place image in the folder 
	$newname = "$pid.jpg";
	move_uploaded_file( $_FILES['fileField']['tmp_name'], "../images/$newname");
	header("location: inventory_list.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>New</title>
</head>
<body>
<br>
<br>
<a name="inventoryForm" id="inventoryForm"></a>
<h3>ADD NEW ITEM</h3>
<form  method="POST" enctype="multipart/form-data">
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
 <input name="category" type="text" id="category"size="64"/>
</td>
</tr>
<tr>
 <td>Subcategory</td>
 <td><input name="subcategory" type="text" id="subcategory"size="64"/></td>
</tr>
<tr>
 <td> Product Details</td>
 <td>
 <textarea name="details" id="textarea" cols="64" rows="5"></textarea>
 </td>
 </tr>
 <tr>
  <td>Product Image</td>
  <td>
  <input type="file" name="fileField" id="fileField"/>
</td>
 </tr>
<tr>
 <td>&nbsp;</td>
<td>
 <input type="submit"name="button"id="button"value="Add this item"/>
</td>
</tr>
</table>
</form>
</body>
</html>