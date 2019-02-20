<?php 
session_start();

require "config.php";
$db=getDb();
$_SESSION['recipeId'];
foreach ($db->query(" SELECT recipe_id FROM recipe ORDER BY recipe_id DESC LIMIT 1;") as $row)
{
               $_SESSION['recipeId'] = $row['recipe_id'];        
                
 }	

 if(isset($_POST['ingredient'])) {
      $ingredient = htmlspecialchars($_POST['ingredient']);
      echo $ingredient . " ";
      $db->query("INSERT INTO ingredients (ingredient_name)
      SELECT '".$ingredient ."'
      WHERE NOT EXISTS (SELECT * FROM ingredients WHERE ingredient_name = '". $ingredient. "');");

      foreach ($db->query("SELECT ingredient_id FROM ingredients WHERE ingredient_name ='". $ingredient . "';")as $row) {
           $_SESSION['ingredientID'] = $row['ingredient_id'];
           
        }
   }
   if(isset($_POST['measurement'])) {
      $unit = htmlspecialchars($_POST['measurement']);
      $quantity = htmlspecialchars($_POST['amount']);
      echo $quantity . " " . $unit;
      $db->query("INSERT INTO measurement (unit)
      SELECT '".$unit ."'
      WHERE NOT EXISTS (SELECT * FROM measurement WHERE unit = '". $unit. "');");

      foreach ($db->query("SELECT measurement_id FROM measurement WHERE unit ='". $unit . "';")as $row) {
           $_SESSION['measurementID'] = $row['measurement_id'];
           
        }
   }
  if(isset($_POST['amount'])) {
      $quantity = htmlspecialchars($_POST['amount']);
      $db->query("INSERT INTO recipe_ingredients (ingredient_id, recipe_id, measurement_id, ingredient_amount )
      VALUES ('". $_SESSION['ingredientID'] . "', '" . $_SESSION['recipeId'] . "', '" . $_SESSION['measurementID'] . "', '" . $quantity."');");
       
   }
   if(isset($_POST['sectionName'])) {
      $name = htmlspecialchars($_POST['sectionName']);
      $number = htmlspecialchars($_POST['sectionNum']);
      $db->query("INSERT INTO section (section, section_name)
      SELECT '".$name ."', 
      WHERE NOT EXISTS (SELECT * FROM measurement WHERE unit = '". $unit. "');");

      foreach ($db->query("SELECT measurement_id FROM measurement WHERE unit ='". $unit . "';")as $row) {
           $_SESSION['measurementID'] = $row['measurement_id'];
           
        }
  
 
?>