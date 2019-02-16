<?php 
session_start();

require "config.php";
$db=getDb();

foreach ($db->query(" SELECT recipe_id FROM recipe ORDER BY recipe_id DESC LIMIT 1;") as $row)
{
              // $_SESSION['tempId'] = $row['recipe_id'];        
                
 }	

 if(isset($_POST['ingredient'])) {
      $ingredient = htmlspecialchars($_POST['ingredient']);
      echo $ingredient;
      $db->query("INSERT INTO ingredients (ingredient_name)
      SELECT '".$ingredient ."'
      WHERE NOT EXISTS (SELECT * FROM ingredients WHERE ingredient_name = '". $ingredient. "');");
   }
   if(isset($_POST['measurement'])) {
      $unit = htmlspecialchars($_POST['measurement']);
      echo $unit;
      $db->query("INSERT INTO measurement (unit)
      SELECT '".$unit ."'
      WHERE NOT EXISTS (SELECT * FROM measurement WHERE unit = '". $unit. "');");
   }
 
?>