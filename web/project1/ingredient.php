<?php 
session_start();
echo $_SESSION['tempId'];
require "config.php";
$db=getDb();
//$db->prepare("SELECT id,value,card FROM my_table ORDER BY id DESC LIMIT 1");

 if(isset($_POST['ingredient'])) {
      $ingredient = htmlspecialchars($_POST['ingredient']);
      $db->query("INSERT INTO ingredients (ingredient_name)
      SELECT '".$ingredient ."'
      WHERE NOT EXISTS (SELECT * FROM ingredients WHERE ingredient_name = '". $ingredient. "');");
   }
?>