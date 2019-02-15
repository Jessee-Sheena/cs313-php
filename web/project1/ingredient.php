<?php 
require "config.php";
$db=getDb();

print_r($_POST['ingredient']);
 if(isset($_POST['ingredient'])) {
      $ingredient = htmlspecialchars($_POST['ingredient']);
      $db->query("INSERT INTO ingredients (ingredient_name)
      SELECT '".$ingredient ."'
      WHERE NOT EXISTS (SELECT * FROM ingredients WHERE ingredient_name = '". $ingredient. "');");
   }
?>