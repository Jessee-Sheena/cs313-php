<?php 
session_start();
include_once "header.php";
require "config.php";
$db=getDb();
echo $_POST['recipeName'];
  if(isset($_POST['recipeName'])) {
           $name = htmlspecialchars($_POST['recipeName']);
           $db->query("UPDATE recipe SET recipe_name ='". $name . "' WHERE recipe_id = '". $_SESSION['id']."';");
         }
        else if(isset($_POST['recipeDescription'])) {
           $description = htmlspecialchars($_POST['recipeDescription']);
           $db->query("UPDATE recipe SET recipe_description ='". $description . "' WHERE recipe_id = '". $_SESSION['id']."';");
         }
        else if(isset($_POST['cook_Time'])) {
           $cookTime = htmlspecialchars($_POST['cook_Time']);
           $db->query("UPDATE recipe SET cook_time ='". $cookTime . "' WHERE recipe_id = '". $_SESSION['id']."';");
         }
        else if(isset($_POST['prep_Time'])) {
           $prepTime = htmlspecialchars($_POST['prep_Time']);
           $db->query("UPDATE recipe SET prep_time ='". $prepTime . "' WHERE recipe_id = '". $_SESSION['id']."';");
         }
        else if(isset($_POST['serving_size'])) {
            $serving = htmlspecialchars($_POST['serving_size']);
            $db->query("UPDATE recipe SET serving_size ='". $serving . "' WHERE recipe_id = '". $_SESSION['id']."';");
         } 
        else if(isset($_POST['total_Time'])) {
           $totalTime = htmlspecialchars($_POST['total_Time']);
           $db->query("UPDATE recipe SET total_time ='". $totalTime . "' WHERE recipe_id = '". $_SESSION['id']."';");
         }
        else if(isset($_POST['calories'])) {
           $calories = htmlspecialchars($_POST['calories']);
           $db->query("UPDATE recipe SET calories ='". $calories . "' WHERE recipe_id = '". $_SESSION['id']."';");
         }
        else if(isset($_POST['cuisine'])) {
           $cuisine = htmlspecialchars($_POST['cuisine']);
           $db->query("UPDATE recipe SET cuisine ='". $cuisine . "' WHERE recipe_id = '". $_SESSION['id']."';");
         }
        else {
           if(preg_match("!image!", $_FILES['recipeImage']['type'])) {
       
              if (copy($_FILES['recipeImage']['tmp_name'], $recipeImage_path)) {
      
                  $recipeImage_path = htmlspecialchars('images/'.$_FILES['recipeImage']['name']);
                  $db->query("UPDATE recipe SET image ='". $recipeImage_path . "' WHERE recipe_id = '". $_SESSION['id']."';");
              }
           } else {
                echo "Please Upload a valid Image";
             }
        
              
       }    
  
      
?>
  <div id="editForm">
        <h1>Update Recipe</h1>
        <label for="update" >What do you want to Update? </label>
        <select name="update" id=update>
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
             <form action="edit.php" method="post" id="editInput" enctype="multipart/form-data">
             </form>
        </div>
        
<?php
     
 
      
   
 
   include_once "footer.php";
 ?>