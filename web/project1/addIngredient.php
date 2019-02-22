<?php 
session_start();
include_once "header.php";
require "config.php";
$db=getDb();

      
?>
    <div id="ingredientFormDiv">
        <form  method="post" id="ingredientForm">
           <h2> Ingredients: </h2>
                    
           <label for="ingredient">Ingredient name: </label>
           <input name="ingredient" id ="ingredient" type="text" required>
           <label for ="amount"> Amount of ingredient: </label>
           <input name="amount" id="amount" type="number" required>
           <label for="measurement">Unit of Measurement: (ie cup, oz) </label>
           <input name="measurement" id="measurement" type ="text" required>
           <p> This ingredient is part of the:</p>
           <input type="radio" name="sectionName" id="no"  value="main" required>
           <label for="no">Main Dish</label>
           <input type="radio" name="sectionName" id="sauce" value="sauce" required>
           <label for="sauce">Sauce</label>
           <input type="radio" name="sectionName" id="marinade"  value="marinade" required>
           <label for="marinade">Marinade</label>
           <button type="button" id="ingredientSubmit" >Add ingredient </button>
        </form>
        </div>
        <div id="ingredientListDiv" >
         <ul id="ingredientList">
         </ul>
        </div>
        <div id="stepsFormDiv">
        <form  method="post" id="stepsForm">
           <h2> Instructions: </h2>
           <label for="stepNum"> Step Number: </label>
           <input type="number" name="stepNum" id="stepNum" required>
           <label for="steps"> Step Instructions </label>
           <textarea rows="4" cols="32" name="steps" id="steps" required></textarea>
           <button type="button" id="stepsSubmit" >Add Steps </button>
        </form>
        </div>
        <div id="stepsListDiv" >
         <ul id="stepList">
         </ul>
        </div>
    </div>
    <?php 
   $name = htmlspecialchars($_POST['recipeName']);
   $description = htmlspecialchars($_POST['recipeDescription']);
   $cookTime = htmlspecialchars($_POST['cook_Time']);
   $prepTime = htmlspecialchars($_POST['prep_Time']);
   $totalTime = htmlspecialchars($_POST['total_Time']);
   $serving = htmlspecialchars($_POST['serving_size']);
   $calories = htmlspecialchars($_POST['calories']);
   $cuisine = htmlspecialchars($_POST['cuisine']);
   $recipeImage_path = htmlspecialchars('images/'.$_FILES['recipeImage']['name']);
  
  if(preg_match("!image!", $_FILES['recipeImage']['type'])) {
       
    if (copy($_FILES['recipeImage']['tmp_name'], $recipeImage_path)) {
        
         $userID = $db->query("SELECT user_id FROM \"user\" WHERE user_name ='" . $_SESSION['user'] . "';" );
         echo $userID;
         $db->query("INSERT INTO recipe (recipe_name, recipe_description, cook_time, prep_time, cuisine, total_time, serving_size, calories, image, user_id) VALUES ('".$name."', '".$description. "', '".$cookTime."', '".$prepTime."', '".$cuisine."', '".$totalTime."', '".$serving."', '".$calories."', '".$recipeImage_path."', '" . $userID . "');");
              
       
   }
   }
 
?>
    
<?php
 
   include_once "footer.php";
 ?>