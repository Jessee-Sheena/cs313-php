<?php 
start_session();
require "config.php";
$db=getDb();

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
        
         $db->query("INSERT INTO recipe (recipe_name, recipe_description, cook_time, prep_time, cuisine, total_time, serving_size, calories, image) VALUES ('".$name."', '".$description. "', '".$cookTime."', '".$prepTime."', '".$cuisine."', '".$totalTime."', '".$serving."', '".$calories."', '".$recipeImage_path."'); RETURNING recipe_id INTO id");
         $_SESSION['tempId'] = id;
      }
   }
?>