<?php 
session_start();
include_once "header.php";
require "config.php";
$db=getDb();

      
?>
  <div id="editForm">
        <h1>Update Recipe</h1>
        <form action="edit.php" method="post" id="editForm2" enctype="multipart/form-data">
            <label for="recipeName2">Recipe Name: </label>
            <input type="text" id="recipeName2" name="recipeName2" required />
            <label for="recipeDescription">Description</label>
            <textarea rows="4" cols="30" name="recipeDescription2" id="recipeDescription2" requied></textarea>
            <label for="cook_Time2">Cook Time: </label>
            <input type="number" id="cook_Time2" name="cook_Time2" required />
            <label for=" prep_Time2">Preperation Time: </label>
            <input type="number" id="prep_Time2" name="prep_Time2" required />
            <label for="total_Time2">Total Time: </label>
            <input type="number" name="total_Time2" id="total_time2" required/>
            <label for="serving_size2">Serving Size: </label>
            <input type="number" name="serving_size2" id="serving_size2" required/>
            <label for="calories2">Calories</label>
            <input type="number" name="calories2" id="calories2" required/>
            <label for="cuisine2">Cuisine Type: </label>
            <select name="cuisine2" id="cuisine2" required> 
               <option value=""> Select</option> 
               <option value="American">American</option> 
               <option value="Chinese">Asian</option> 
               <option value="Indian">Indian</option> 
               <option value="Mexican">Mexican</option> 
               <option value="Italian">Italian</option> 
               <option value="Caribbean">Caribbean</option> 
           </select> 
          
            <div id="image">
                <label for="recipeImage2">Image upload: </label>
                <input type="file" name="recipeImage2" id="recipeImage2" accept="image/*" required />
                <input type="submit" id="theRecipe"/>
            </div>
        </form>


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
      
      
        $db->query("INSERT INTO recipe (recipe_name, recipe_description, cook_time, prep_time, cuisine, total_time, serving_size, calories, image, user_id) VALUES ('".$name."', '".$description. "', '".$cookTime."', '".$prepTime."', '".$cuisine."', '".$totalTime."', '".$serving."', '".$calories."', '".$recipeImage_path."', '" . $_SESSION['user_id'] . "') WHERE recipe_id ='".$_SESSION['id']."';");
              
       
   }
   }
 
   include_once "footer.php";
 ?>