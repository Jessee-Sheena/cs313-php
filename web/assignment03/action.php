<?php
session_start();

require_once "products.php";
$items = new Products();
$itemArray = $items->getProducts();
 $_SESSION['action'] = $_POST["action"];
 $_SESSION['id'] = $_POST["id"];
if(!empty($_SESSION['action'])) {
 switch ($_SESSION['action']) {
    case "add":         
           $theProduct = $itemArray[$_SESSION['id']];
           $productArray = array($theProduct['id'] => array('name'=>$theProduct['name'], 'price'=>$theProduct['price'], 'image'=>$theProduct['image'], 'id' =>$theProduct['id'] ));
           if(!empty($_SESSION['cart'])) {        
                $_SESSION['cart'] = array_merge($_SESSION["cart"],$productArray);                      
           }
           else {
              $_SESSION['cart'] = $productArray;
           }
           break;
    case "remove":         
         if(!empty($_SESSION['cart'])) {
           
            foreach($_SESSION['cart'] as $key => $value) {
               
                if($_SESSION['id'] == $key) {
                   unset($_SESSION['cart'][$key]);
                   
                }
                if(empty($_SESSION['cart'])){
                  unset($_SESSION['cart']);
                }
            }
         }
         break;
     case "empty":
          unset($_SESSION['cart']);
          session_destroy();
          break;
 }
    

}

if(isset($_SESSION['cart'])){
   $total = 0;
  echo"<div><h1 class=\"cartHeading\">Shopping Cart</h1>";
   echo "<table class=\"tablecontainer\">";
      echo "<thead>";
        echo"<tr>";
            echo "<th>Products</th>";
            echo "<th>Price</th>";                        
            echo "<th id=\"purchase\">Click to Purchase</th>";
         echo "</tr>";
       echo "</thead>";
       echo "<tbody>";
         foreach ($_SESSION["cart"] as $item){
            echo "<tr>";
            echo "<td><img src=\"" . $item["image"] ."\" alt=\"". $item["name"]. "\" /></td>";
            echo "<td>", $item["price"] ."</td>";                        
            echo "<td><button class=\"buttons\" type=\"button\" \" onclick=\"takeAction('remove', '". $item['id'] ."')\">Remove From Cart</button></td>";
            echo "</tr>";
            }
     echo "</tbody>";
  echo "</table>";
 echo "</div>";
    
                                          
} else {
   echo "There are no Products currently in your cart!";
}
 ?>