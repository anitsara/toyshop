<?php
if(isset($_POST["submit"])){
						$_SESSION["price"]=$total;
					 $cid=$_SESSION["id"];
					 $pname=$value["item_name"];
				     $pprice=$value["product_price"];
					 $db = mysqli_connect("localhost","root","","mystore");
					 $sql="insert into details(cid, pname, pprice) values('{$cid}','{$pname}','{$pprice}')";
                     $res=mysqli_query($db,$sql); 
									}
									?>