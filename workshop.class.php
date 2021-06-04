<?php
  class workshop {
   private $id;
   private $product_name;
   private $price;
   private $quantity;
   private $details;
   private $category;
   private $subcategory;
   private $date_added;
   private $image;
   private $text;
   public $dbConn;
   
   function setid($id) {$this->id = $id; }
   function getid() { return $this->id; }
   function setproduct_name($product_name) {$this->product_name = $product_name; }
   function getproduct_name() { return $this->product_name; }
   function setprice($price) {$this->price = $price; }
   function getprice() { return $this->price; }
   function setquantity($quantity) {$this->quantity = $quantity; }
   function getquantity() { return $this->quantity; }
   function setdetails($details) {$this->details = $details; }
   function getdetails() { return $this->details; }  
   function setcategory($category) {$this->category = $category; }
   function getcategory() { return $this->category; }   
   function setsubcategory($subcategory) {$this->subcategory = $subcategory; }
   function getsubcategory() { return $this->subcategory; }
   function setdate_added($date_added) {$this->date_added = $date_added; }
   function getdate_added() { return $this->date_added; }
   function setimage($image) {$this->image = $image; }
   function getimage() { return $this->image; }
   function settext($id) {$this->text = $text; }
   function gettext() { return $this->text; }
   
   public function __construct() {
    require_once('dbs.php');
	$db = new DbConnect();
	$this->dbConn = $db->connect();
	}
	public function getAllWorkshops(){
		$sql="SELECT * FROM products";
		$stmt=$this->dbConn->prepare($sql);
		$stmt->execute();
		$workshops=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $workshops;
	}
	public function getWorkshopById(){
		$sql="SELECT * FROM products WHERE id = :wid";
		$stmt=$this->dbConn->prepare($sql);
		$stmt->bindParam('wid',$this->id);
		$stmt->execute();
		$workshop=$stmt->fetch(PDO::FETCH_ASSOC);
		return $workshop;
	}
  }
 ?>