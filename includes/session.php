<?php
    ob_start();
    session_start();
    
    // Identify current url
    $position = strpos($_SERVER["REQUEST_URI"],".php");
    $url = substr($_SERVER["REQUEST_URI"], 0, $position);
    $url = $url . ".php";
  
    
        if(isset($_SESSION['sqlMain']))
        {
            unset($_SESSION['sqlMain']);
            
        }
        
?>