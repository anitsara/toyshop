<?php 
session_start();
require 'cons.php';
require 'items.php';
$result = mysqli_query($con,'select * from products where id='.$_GET['id']);
$product = mysqli_fetch_object($result);

if(isset($_GET['id'])){
   $item = new items();
   $item->id=$product->id;
   $item->product_name=$product->product_name;
   $item->price=$product->price;
   $item->quantity=1;
   $_SESSION['cart'][]=$item;
}
?>
<table cellpadding="2" cellspacing="2" border="1">
<tr>
 <th>Id</th>
 <th>Name</th>
 <th>Price</th>
 <th>Quantity</th>
 <th>Sub Total</th>
</tr>
<?php 
$cart = unserialize(serialize($_SESSION['cart']));
for($i=0; $i<count($cart); $i++){
?>
<tr>
 <td><?php echo $cart[$i]->id; ?></td>
 <td><?php echo $cart[$i]->product_name; ?></td>
 <td><?php echo $cart[$i]->price; ?></td>
 <td><?php echo $cart[$i]->quantity; ?></td>
 <td><?php echo $cart[$i]->price * $cart[$i]->quantity; ?></td>
</tr>
<?php } ?>
</table>
<br>
<a href="indexs.php">Continue</a>