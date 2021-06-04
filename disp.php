<?php
//Connection for database
include 'conn.php';
//Select Database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>
<!doctype html>
<html>
<body>
<h1 align="center">Employee Details</h1>
<table border="1" align="center" style="line-height:25px;">
<tr>
<th>ID</th>
<th>Name</th>
<th>price</th>
<th>quantity</th>
<th>date</th>
</tr>
<?php
//Fetch Data form database
if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
 ?>
 <tr>
 <td><?php echo $row['id']; ?></td>
 <td><?php echo $row['product_name']; ?></td>
 <td><?php echo $row['price']; ?></td>
 <td><?php echo $row['quantity']; ?></td>
 <td><?php echo $row['date_added']; ?></td>
 
 <!--Edit option -->
 <td><a href="edits.php?edit_id=<?php echo $row['id']; ?>" alt="edit" >Edit</a></td>
 </tr>
 <?php
 }
}
else
{
 ?>
 <tr>
 <th colspan="2">There's No data found!!!</th>
 </tr>
 <?php
}
?>
</table>
</body>
</html>