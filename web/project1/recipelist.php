<?php 
   include_once "header.php";
   require "config.php";
   $db=getDb();

   $keyWord = $_POST['cookTime'];
   foreach ($db->query("SELECT recipe_name, recipe_id, image, recipe_description FROM recipe") as $row)
   {
       echo '<div class="listSection"><img src="'.$row['image'] . '" alt= "food"/>';                      
       echo '<h2 class="listHeader"><a href="setsessionid.php?id='.$row['recipe_id'].'">'. $row['recipe_name'] . '</a></h2>';
       echo '<p>'.$row['recipe_description']. '</p></div>';        
   }		

?>
  

<?php
   include_once "footer.php";
 ?>