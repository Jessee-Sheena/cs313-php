<?php 
session_start();
   include_once "header.php";   
   require "config.php";
   $db=getDb();      
  
$db->query("DELETE FROM recipe WHERE user_id = '" . $_SESSION['user_id']. "';");
$db->query("DELETE FROM \"user\" WHERE user_id = '" . $_SESSION['user_id']. "';");

header('Location: home.php');
die();
?>


<?php
include_once "footer.php";
 ?>