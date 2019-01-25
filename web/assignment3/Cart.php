<?php 
 header("Content-Type: application/json", true);
 $id = $_GET['name'];
 $price = $_GET["cost"];
 echo "name of item" . $id;
 /*session_start();

  $products = array();
  $prices = array();
   

   $name = $_POST['name'];
   $cost = $_POST['cost'];
   array_push($products, $name);
   array_push($prices, $cost);
   
   if(!isset($_SESSION['total'])) {
       $_SESSION['total'] = 0;
       $_SESSION['producst'];
   }
   echo "$products[0]";
   echo "$prices[0]";*/ integrator

?>