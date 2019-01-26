<?php
session_start();
require_once "products.php";
$items = new Products();
$itemArray = $items->getProducts();
$action = $_POST['action'];
$quantity = $_POST['quantity'];
$id = $_POST['id'];
echo $id;
$_SESSION['id'] =$id;
echo $_SESSION['id'];
 ?>