<?php
  class customer {
   private $id;
   private $name;
   private $email;
   private $mobile;
   private $address;
   private $createdOn;
   public $dbConn;
   
   function setid($id) {$this->id = $id; }
   function getid() { return $this->id; }
   function setname($name) {$this->name = $name; }
   function getname() { return $this->name; }
   function setemail($email) {$this->email = $email; }
   function getemail() { return $this->email; }
   function setmobile($mobile) {$this->mobile = $mobile; }
   function getmobile() { return $this->mobile; }  
   function setaddress($address) {$this->address = $address; }
   function getaddress() { return $this->address; }
   function setcreatedOn($createdOn) {$this->createdOn = $createdOn; }
   function getcreatedOn() { return $this->createdOn; }
   
   public function __construct() {
    require_once('dbs.php');
	$db = new DbConnect();
	$this->dbConn = $db->connect();
	}
	public function getCustomerByEmailId(){
		$sql="SELECT * FROM customer WHERE email = :email";
		$stmt=$this->dbConn->prepare($sql);
		$stmt->bindParam('email',$this->email);
		$stmt->execute();
		$customer=$stmt->fetch(PDO::FETCH_ASSOC);
		return $customer;
	}
  }
 ?>