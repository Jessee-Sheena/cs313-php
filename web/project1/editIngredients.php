<?php 
session_start();
include_once "header.php";
require "config.php";
$db=getDb();
echo $_POST['updated']. "<br>";
echo $_SESSION['id']. "<br>";
echo $_SESSION['ingredientID2']. "<br>";
echo $_SESSION['measurementID2']. "<br>";
echo $_POST['amount2']. "<br>";
echo $_POST['sectionName2']. "<br>";

?>
  <div id="editIngredient">
        <form action="editIngredients.php" method="post" id="editingredientform">
           <h2> Ingredient: </h2> 
           <h3> Do you want to: </h3>
           <input type="radio" name="updated" id="add"  value="add" required>
           <label for="add">Add New Ingredient</label>
           <input type="radio" name="updated" id="exist" value="exist" required>
           <label for="exist">Edit Existing Ingredient</label>                       
           <label for="ingredient2">Ingredient name: </label>
           <input name="ingredient2" id ="ingredient2" type="text" required>
           <label for ="amount2"> Amount of ingredient: </label>
           <input name="amount2" id="amount2" type="number" required>
           <label for="measurement2">Unit of Measurement: (ie cup, oz) </label>
           <input name="measurement2" id="measurement2" type ="text" required>
           <p> This ingredient is part of the:</p>
           <input type="radio" name="sectionName2" id="no2"  value="main" required>
           <label for="no">Main Dish</label>
           <input type="radio" name="sectionName2" id="sauce2" value="sauce" required>
           <label for="sauce">Sauce</label>
           <input type="radio" name="sectionName2" id="marinade2"  value="marinade" required>
           <label for="marinade">Marinade</label>
           <button type="submit" id="ingredientSubmit2" >Edit ingredient </button>
        </form>
    </div>
<?php

   if(isset($_POST['ingredient2'])) {
         $ingredient = htmlspecialchars($_POST['ingredient2']);      
         $db->query("INSERT INTO ingredients (ingredient_name)
                   SELECT '".$ingredient ."'
                   WHERE NOT EXISTS (SELECT * FROM ingredients WHERE ingredient_name = '". $ingredient. "');");

         foreach ($db->query("SELECT ingredient_id FROM ingredients WHERE ingredient_name ='". $ingredient . "';")as $row) {
           $_SESSION['ingredientID2'] = $row['ingredient_id'];
           
         }
   }
   if(isset($_POST['measurement2'])) {
      $unit = htmlspecialchars($_POST['measurement2']);
      $quantity = htmlspecialchars($_POST['amount2']);
      $db->query("INSERT INTO measurement (unit)
      SELECT '".$unit ."'
      WHERE NOT EXISTS (SELECT * FROM measurement WHERE unit = '". $unit. "');");

      foreach ($db->query("SELECT measurement_id FROM measurement WHERE unit ='". $unit . "';")as $row) {
           $_SESSION['measurementID2'] = $row['measurement_id'];
           
        }
   }   
     
  if(isset($_POST['amount2'])) {
      $id = 1;
      switch ($_POST['sectionName2'])   {
      case "main":
           $id = 1;
           break;
      case "sauce":
           $id = 2;
           break;
      case "marinade":
           $id = 4;
           break;
       default:
           $id = 1;
           break;
      }
      $quantity = htmlspecialchars($_POST['amount2']);
      if($_POST['updated'] == "add") {  
       $_SESSION['ingredientID2'] = 1000000;
         $db->query("INSERT INTO recipe_ingredients (ingredient_id, recipe_id, measurement_id, ingredient_amount, section_id )
         VALUES ('". $_SESSION['ingredientID2'] . "', '" . $_SESSION['Id'] . "', '" . $_SESSION['measurementID2'] . "', '" . $quantity."', '" . $id . "');");
       }
       if($_POST['updated'] == "exist") {
              $db->query("UPDATE recipe_ingredients SET ingredient_id ='" . $_SESSION['ingredientID2'] . "', measurement_id ='" . $_SESSION['measurementID2'] . "', ingredient_amount = '" . $quantity . "', section_id = '" . $id . "' WHERE recipe_id = '" . $_SESSION['id'] . "';" );
      
       }
    
   }
   include_once "footer.php";
   ?>