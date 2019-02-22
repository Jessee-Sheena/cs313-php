<?php 
session_start();
require "config.php";
$db=getDb();

$db-query("DELETE FROM recipe WHERE user_id = '" . $_SESSION['user_id']. "';");
$db-query("DELETE FROM \"user\" WHERE user_id = '" . $_SESSION['user_id']. "';");
?>