<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="#" enctype="multipart/form-data" method="post">
<input multiple="multiple" name="img[]" type="file" />
<input name="submit" type="submit" />
</form>
<?php
$sql=mysqli_connect("localhost","root","","toy");
if(isset($_POST['submit'])){
$filename = $_FILES['img']['name'];
$tmpname = $_FILES['img']['tmp_name'];
$filetype = $_FILES['img']['type'];
$filesize = $_FILES['img']['size'];
for($i=0; $i<=count($tmpname)-1; $i++)
{
$name = addslashes($filename[$i]);
$tmp = addslashes(file_get_contents($tmpname[$i]));
mysqli_query($sql,"INSERT into multiple(name,image) values('$name','$tmp')");
}
}
$res = mysqli_query($sql,"SELECT * FROM multiple");
while($row = mysqli_fetch_array($res)){
echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="250" height="250"/>';

}
?>
</body>
</html>