<?php 
session_start();
include_once "header.php";
require "config.php";
$db=getDb();

      
?>
  <div id="editForm">
        <h1>Update Recipe</h1>
        <label for="update" >What do you want to Update? </label>
        <select id=update>
          <option value=""> Select</option> 
               <option value="Recipe">Recipe Name</option> 
               <option value="Description">Description</option> 
               <option value="cookTime">Cook Time</option> 
               <option value="prepTime">Preperation Time</option> 
               <option value="time">Total Time</option> 
               <option value="servSize">Serving Size</option> 
               <option value="calories">Calories</option> 
               <option value="cuisine">Cuisine Type</option> 
               <option value="image">Image</option>      
               
        </select>
        <div id="">
             <form action="edit.php" method="post" id="searchInput" enctype="multipart/form-data">
             </form>
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
      
      
        $db->query("UPDATE recipe (recipe_name, recipe_description, cook_time, prep_time, cuisine, total_time, serving_size, calories, image, user_id) VALUES ('".$name."', '".$description. "', '".$cookTime."', '".$prepTime."', '".$cuisine."', '".$totalTime."', '".$serving."', '".$calories."', '".$recipeImage_path."', '" . $_SESSION['user_id'] . "') WHERE recipe_id ='".$_SESSION['id']."';");
              
       
   }
   }
 
   include_once "footer.php";
 ?>