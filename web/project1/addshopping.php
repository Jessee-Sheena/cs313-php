 <?php 
   session_start();
   include_once "header.php";   
   require "config.php";
   $db=getDb();
   $_SESSION['shoppingList']= array();
   array_push($_SESSION['shoppingList'], htmlspeccialchars($_POST['addto']));
   ?>