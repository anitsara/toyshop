<?php
require 'cons.php';
$result = mysqli_query($con,'select * from products');
?>
<table cellpadding="2" cellspacing="2" border="0">
 <tr>
  <th>Id</th>
  <th>Name</th>
  <th>Price</th>
  <th>Buy</th>
 </tr>
 <?php while($product = mysqli_fetch_object($result)) { ?>
  <tr>
   <td><?php echo $product->id; ?></td>
   <td><?php echo $product->product_name; ?></td>
   <td><?php echo $product->price; ?></td>
   <td><a href="cartin.php?id=<?php echo $product->id;?>">Order Now</a></td>
   </tr>
   <?php } ?>
   </table>
   