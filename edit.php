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
if(isset($_GET['edit_id']))
{
 $sql = "SELECT product_name,price,quantity FROM products WHERE id = ".$_GET['edit_id'];
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);
 }
 if(isset($_POST['update'])){
 $product_name = $_POST['product_name'];
 $price = $_POST['price'];
 $quantity = $_POST['quantity'];
 $update = "UPDATE products SET product_name = '$product_name',price = '$price',quantity='$quantity' WHERE id = ".$_GET['edit_id'];
 $up = mysqli_query($conn,$update);
 if(!isset($sql)){
   die("Error sql" .mysqli_connect_error());
   }
   else
   {
    header("location: inventorylist.php ");
	}
	}
	?>
	<br>
	<br>
<form method="post">
<table>
<tr>
<td>&nbsp;<label>Name:</label><td>

<input type="text" name="product_name" value="<?php echo $row['product_name']; ?>"><br><br>

</tr>
<tr>
<td>
&nbsp;<label>Price:</label>
</td>
<td>
<input type="text" name="price" value="<?php echo $row['price']; ?>"><br><br>
</td></tr>
<tr>
<td>
&nbsp;<label>Quantity:</label>
</td>
<td>
<input type="text" name="quantity" value="<?php echo $row['quantity']; ?>"><br>
</td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="update" value="Submit" onclick="update()"></td>
</tr>

</table>
</form>
<script>
function update(){
	var x;
	if(confirm("Updated data successfully")==true){
		x="update";
	}
}
</script>