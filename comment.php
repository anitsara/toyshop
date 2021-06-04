<?php
include "connect.php";
if(isset($_POST["submit"]))
{
  $name=$_POST["name"];
  $comment=$_POST["comment"];
  $check= " INSERT INTO `comment`( `name`, `comment`) VALUES ('$name', '$comment')";
  $test=mysqli_query($con,$check);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>KIDDY SHOP</title>
</head>
<body>
<form action="#" method="POST">
<table>
<tr>
<td><input type="text" name="name" placeholder="Name" height="100" width="100">
</td>
</tr>
<tr>
<td colspan="2">
<textarea name="comment" rows="6" cols="120"  placeholder="Comment" type="text" ></textarea>
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" name="submit" value="submit">
</td>
</tr>
</table>
<?php
$conn = new mysqli("localhost","root","","comment");
$sql = "SELECT * FROM comment ORDER BY id DESC"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name :" . $row["name"]. "<br> " . "<br>" . "Comment:". $row["comment"] . "<br>" . '<hr width="1090px"  color="black"/>';
    }
}
$conn->close();
?>
</form>
</body>
</html>