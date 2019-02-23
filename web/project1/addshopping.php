 <?php 
   session_start();   
   require "config.php";
   $db=getDb();
   $item = htmlspecialchars($_POST['addto']);
   echo $item;
   if(isset($_SESSION['shoppingList'])) {
      array_push($_SESSION['shoppingList'], $item);
      print_r($_SESSION['shoppingList']);

   }else {  
     $_SESSION['shoppingList']= array();
     array_push($_SESSION['shoppingList'], $item);
   }
  
   header('Location: recipeInfo.php');
   die();
   ?>
