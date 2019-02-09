<?php 
   include_once "header.php";
   require "config.php";
   $db=getDb();

   $keyWord = $_POST['cookTime'];
   foreach ($db->query("SELECT recipe_name, recipe_id, image FROM recipe") as $row)
   {
       echo '<div class="listSection"><img href="'.$row['image'] . '" alt= "food"/>';                      
       echo '<h2 class="listHeader"><a href="recipeInfo.php?id='.$row['recipe_id'].'">'. $row['recipe_name'] . '</a></h2>';
       echo '<p>'.$row['description']. '</p></div>';        
   }		

?>
  

<?php
   include_once "footer.php";
 ?>