 <?php 
   session_start();
   include_once "header.php";   
   require "config.php";
   $db=getDb();
   $_SESSION['shoppingList']= array();
   $item = htmlspeccialchars($_POST['addto']);
   echo $item;
   array_push($_SESSION['shoppingList'], $item);
   print_r($_SESSION['shoppingList']);
   //header('Location: shoppingList.php');
   //die();
   ?>
