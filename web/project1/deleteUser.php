<?php 
   session_start();
   include_once "header.php";   
   require "config.php";
   $db=getDb();      
  if(!empty($_SESSION['user_id'])){}
$db->query("DELETE FROM recipe WHERE user_id = '" . $_SESSION['user_id']. "';");
$db->query("DELETE FROM \"user\" WHERE user_id = '" . $_SESSION['user_id']. "';");
session_destroy();
header('Location: home.php');
die();
} else
echo "There is no kown user to delete"
?>

<?php
   include_once "footer.php";
 ?>

