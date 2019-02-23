 <?php 
   session_start();   
   require "config.php";
   $db=getDb();
   $item = htmlspecialchars($_POST['addto']);
   if(empty($_SESSION['shoppingList'])) {
      $_SESSION['shoppingList']= array();
   }else {  
     
      array_push($_SESSION['shoppingList'], $item);
      print_r($_SESSION['shoppingList']);
   }
  
   //header('Location: shoppingList.php');
   //die();
   ?>
