<?php 
   session_start();
   require "config.php";
   $db=getDb();


   $db->query("DELETE FROM recipe_ingredients WHERE recipe_id = '". $_SESSION['id']. "';");
   $db->query("DELETE FROM recipe WHERE recipe_id = '". $_SESSION['id']. "';");
   header('Location: recipelist.php');
 ?>