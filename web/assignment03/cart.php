<?php 

 session_start();
  if(isset($_GET['name'])) {
     $id = $_GET['name'];
} else {
    $id = 1;
}

  $products = array();
  $prices = array();
  array_push($products, $id );
  print_r($products);
/*$_SESSION['products'] = array(); 
$_SESSION['products'] = $_GET['name'];
$_SESSION['prices'] = array();
$_SESSION['prices'] = $_GET["cost"];


   
   if(!isset($_SESSION['total'])) {
       $_SESSION['total'] = 0;
      }
/*
?>