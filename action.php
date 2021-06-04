<?php
if(isset($_POST['action'])){
	session_start();
  require 'workshop.class.php';
  require 'cart.class.php';
 switch($_POST['action']){
  case 'add':
 
			 $objWorkshop = new workshop();
			 $objWorkshop->setid($_POST['wid']);
			 $workshop = $objWorkshop->getWorkshopById();
             
			 $objCart = new cart;
			 $objCart->setcid($_SESSION['cid']);
			 $objCart->setpid($workshop['pid']);
			 $objCart->settitle($workshop['title']);
			 $objCart->setquantity(1);
			 $objCart->settotalAmount($workshop['price']);
			 $objCart->setcreatedOn(date('Y-m-d'));
			 
			 
			 if($objCart->addItem()){
				echo json_encode(["status" => 1, "msg" => "Added to cart."]);
                exit;				
			 }else{
				 echo json_encode(["status" => 0, "msg" => "Opps!! Something went wrong."]);
                exit;
			 }
			 break;
	default:
	      break;
 }
}
else
{
 header('location: shopping.php');
 }
?>