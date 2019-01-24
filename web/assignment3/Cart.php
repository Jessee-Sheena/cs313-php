<?php 
 
session_start();

  $products = array();
  $prices = array();
   

   $name = $_POST['name'];
   $cost = $POST['cost'];
   array_push($products, $name);
   array_push($prices, $cost);
   
   if(!isset($_SESSION['total'])) {
       $_SESSION['total'] = 0;
       $_SESSION['producst'];
   }
   echo "$products[0]";
   echo "$prices[0];"
 ?>