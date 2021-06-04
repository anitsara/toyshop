<?php
   require_once("includes/session.php");
	include("includes/publicHeader.php");
   
   include("includes/menu.php");
   require("includes/pagination.php");
    include("includes/paginationVariables.php");
    include 'includes/dbConnect.php';
   
?>

<script>
    $(document).ready(function() 
        { 
            $("#sort").tablesorter({ 
            3: {sorter: false}
            });
              $("#sort").dataTable({
                "sPaginationType": "full_numbers",
                "bLengthChange": false,
                "bAutoWidth": false,
                "bSort": false
            });
        } 
    );
        
    $(window).bind('scroll', function(){
        if($(this).scrollTop() > 200) {
            $("#scroll").fadeIn();
        }
        else
            $("#scroll").fadeOut();
    });
</script>

<!DOCTYPE html>
<html>
<head>
 <title>New</title>
</head>
<body>
<br>
<br>
 <form action="#" method="POST" enctype="multipart/form-data">
 &nbsp;&nbsp;&nbsp;
   <input type="file" name="userfile[]" value="" multiple=""> 
	<input type="submit" name="submit" value="upload">
 </form>
 </body>
 <?php 
 
 $mysqli = new mysqli('localhost','root','','toy');
 $table = 'toys';
 
 $phpFileUploadErrors = array(
 0 => 'There is no error',
 1 => 'Exceeds the file size',
 2 => 'Exceeds the file size',
 3 => 'Partially uploaded',
 4 => 'No file was uploaded',
 6 => 'Missing a temporary folder',
 7 => 'Failed to write file',
 8 => 'A php extension stopped file upload',
 );
 if(isset($_FILES['userfile'])){
    $file_array=reArrayFiles($_FILES['userfile']);	
	//pre_r($file_array);
	for ($i=0;$i<count($file_array);$i++){
		echo "<br>";
		if($file_array[$i]['error']){
		   ?> 
            &nbsp;&nbsp;
			<? php echo $file_array[$i]['name'].' - '.$phpFileUploadErrors[$file_array[$i]['error']]; 
		    echo "<br>";
		?> 
 <?php	
		}
		else {
			 $extensions = array('jpg','png','gif','jpeg');
			 $file_ext = explode('.',$file_array[$i]['name']);
			 $name= $file_ext[0];
			 $name=preg_replace("!-!","",$name);
			 $name=ucwords($name);
			 
			$file_ext = end($file_ext);
			 
			 if(!in_array($file_ext, $extensions)){
				 ?>
				 <?php echo "{$file_array[$i]['name']} - Invalid file extensions!";
				 ?>
				 <?php
				 }
				 else{
					  echo "<br>";
					  $img_dir='web/'.$file_array[$i]['name'];
					  echo "<br> &nbsp;";
					 
					 move_uploaded_file($file_array[$i]['tmp_name'], $img_dir);
					
					$sql = "INSERT IGNORE INTO $table (name,img_dir) VALUES ('$name','$img_dir')";
					$mysqli->query($sql);
					
					
					
					?>
                    <?php echo $file_array[$i]['name'].' - '.'created successfully';
                    echo "<br>";
					?> <?php 					
	             }		
	 
              }
	     }
 }
 function reArrayFiles($file_post){
	 $file_ary=array();
	 $file_count=count($file_post['name']);
	 $file_keys = array_keys($file_post);
	 
	 for($i=0;$i<$file_count;$i++){
		 echo "<br>";
		 foreach($file_keys as $key){
			 echo "<br>";
			 $file_ary[$i][$key] = $file_post[$key][$i];
		 }
	 }
	 return $file_ary;
 }
 function pre_r($array){
	 echo '<pre>';
	 print_r($array);
	 echo '</pre>';
 }
 ?>

</html>