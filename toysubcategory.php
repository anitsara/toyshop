<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
require_once("database.php");
//$db_handle = new DBController();
	$query ="SELECT * FROM dropdown WHERE category_id = '" . $_POST["category_id"] . "'";
	$result = $dbhandle->query($query);
?>
	<option value="">Select Subcategory</option>
<?php
	while($rs=$result->fetch_assoc()) {
?>
	<option value="<?php echo $rs["category_id"]; ?>"><?php echo $rs["subcategory"]; ?></option>
<?php

}
?>
</body>
</html>