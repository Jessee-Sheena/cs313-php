<?php 
 
 session_start();

  $products = array();
  $prices = array();
  
$_SESSION['products'] = array(); 
$_SESSION['products'] = $_GET['name'];
$_SESSION['prices'] = array();
$_SESSION['prices'] = $_GET["cost"];


foreach($_SESSION["products"] as $products)
{
    echo $products;
}

  
   
   if(!isset($_SESSION['total'])) {
       $_SESSION['total'] = 0;
      }
  

?>