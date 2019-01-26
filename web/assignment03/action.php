<?php
session_start();
require_once "products.php";
$items = new Products();
$itemArray = $items->getProducts();
$action = $_POST['action'];
$quantity = $_POST['quantity'];
$id = $_POST['id'];
echo $id;
if(!empty($action)) {
switch ($action) {
    case "add":
         if(!empty($quantity)) {
           $theProduct = $itemArray[$id];
           $productArray = array($theProduct[$id] => array('name'=>$theProduct['name'], 'quantitiy'=>$quantity, 'price'=>$theProduct['price'], 'image'=>$theProduct['image'] ));
           if(!empty($_SESSION['cart'])) {
                $cartArray = array_keys($_SESSION['cart']);
                if(!in_array($theProduct[$id], $cartArray)) {
                   foreach($_SESSION['cart'] as $key => $value) {
                         if($theProduct == $key) {
                            $theProduct[$id];
                         }
                   }
                }
              
           }
           else {
              $_SESSION['cart'] = $productArray;
           }
         }
    }
}
 ?>