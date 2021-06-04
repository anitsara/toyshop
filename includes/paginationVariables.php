<?php
    $page=1;        // Default page
    $limit=10;      // Records per page
    $start=0;       // Starts displaying records from 0
    if(isset($_GET['page']) && $_GET['page']!='')
        $page=$_GET['page'];
    $start=($page-1)*$limit;
?>