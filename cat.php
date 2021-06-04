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
<?php
$link=mysqli_connect("localhost","root","","dropdown");
if (isset($_POST["submit"])) 
{
$subcategory = $_POST["subcategory"];
$category=$_POST["category"];
$sq = "INSERT INTO `dropdown`(`subcategory`,`category`) 
      VALUES ('$subcategory','$category')";
     mysqli_query($link,$sq);
}

?>
<!DOCTYPE html>
<html>
<head>
 <title>New</title>
</head>
<body>
<br>
<br>
<h3>ADD NEW CATEGORY</h3>
<form  action="#" method="POST">
<input name="subcategory" type="text"  size="64"/>
<input name="category" type="text"  size="64"/>
<input type="submit" name="submit"  value="submit"/>
</form>
</body>
</html>