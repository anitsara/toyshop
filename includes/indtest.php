<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("databasenew");

if(isset($_REQUEST["submit"]))
{
 $user=$_REQUEST["user"];
 $pass=$_REQUEST["pass"];
 $query=mysql_query("select * from login where user='$user' && pass='$pass'");
 $rowcount=mysql_num_rows($query);
 if($rowcount==true)
 {
   header('location:welcom.php');
  }
  else
  {
   echo "Wrong";
   }
   
   ?>