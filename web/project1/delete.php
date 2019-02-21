<?php 
   session_start();
   require "config.php";
   $db=getDb();
  
   $db->prepare("DELETE FROM recipe WHERE recipe_id = '". $_SESSION['id']. "';");
   header('Location: recipelist.php');
 ?>