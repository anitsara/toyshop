<?php
//Database Connection
include 'conn.php';
//Get ID from Database
if(isset($_GET['edit_id'])){
 $sql = "SELECT * FROM products WHERE id =" .$_GET['edit_id'];
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);
}
//Update Information
if(isset($_POST['update'])){
 $product_name = $_POST['product_name'];
 $price = $_POST['price'];
 $quantity = $_POST['quantity'];
 $date_added = $_POST['date_added'];
 $update = "UPDATE products SET product_name='$product_name', price='$price',quantity='$quantity',date_added='$date_added' WHERE id=". $_GET['edit_id'];
 $up = mysqli_query($conn, $update);
 if(!isset($sql)){
 die ("Error $sql" .mysqli_connect_error());
 }
 else
 {
 header("location: disp.php");
 }
}
?>
<!--Create Edit form -->
<!doctype html>
<html>
<body>
<form method="post">
<h1>Edit Employee Information</h1>
<label>Name:</label><input type="text" name="product_name" placeholder="Name" value="<?php echo $row['product_name']; ?>"><br/><br/>
<label>Price</label><input type="text" name="price" placeholder="Gender" value="<?php echo $row['price']; ?>"><br/><br/>
<label>Quantity:</label><input type="text" name="quantity" placeholder="Department" value="<?php echo $row['quantity']; ?>"><br/><br/>
<label>Date:</label><input type="text" name="date_added" placeholder="Address" value="<?php echo $row['date_added']; ?>"><br/><br/>

<button type="submit" name="update" id="update" onClick="update()"><strong>Update</strong></button>
<a href="disp.php"><button type="button" value="button">Cancel</button></a>
</form>
<!-- Alert for Updating -->
<script>
function update(){
 var x;
 if(confirm("Updated data Sucessfully") == true){
 x= "update";
 }
}
</script>
</body>
</html>
