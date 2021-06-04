  <?php

include 'shopindex.php';

// Attempt create table query execution

$sql = "CREATE TABLE products(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    product_name VARCHAR(30) NOT NULL UNIQUE,
    price VARCHAR(30) NOT NULL,
    details VARCHAR(70) NOT NULL,
	category VARCHAR(16) NOT NULL,
   subcategory VARCHAR(16) NOT NULL,
   date_added DATE NOT NULL,
   image VARCHAR(200) NOT NULL,
   text text NOT NULL
)";


   
   
if(mysqli_query($conn, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>