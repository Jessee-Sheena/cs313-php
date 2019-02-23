 <?php 
   session_start();
   include_once "header.php";   
   require "config.php";
   $db=getDb();
   $_SESSION['shoppingList']= array();
   $item = htmlspecialchars($_GET['addto']);
   echo $item;
   $_SESSION['shoppingList']= array();
   array_push($_SESSION['shoppingList'], $item);
   print_r($_SESSION['shoppingList']);
   //header('Location: shoppingList.php');
   //die();
   ?>
