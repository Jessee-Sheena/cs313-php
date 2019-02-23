<?php 
   session_start();
   include_once "header.php";   
   require "config.php";
   $db=getDb();
   
   ?>
   <div>
   <h1>Shopping List</h1>
   <?php

    if(!empty($_SESSION['shoppingList'])) {
       $size = $_SESSION['shoppingList'];
        for($i = 0; i < $size; $i++ ) {
           foreach ($db->query("SELECT
                         i.ingredient_name
                         FROM ingredients AS i
                         JOIN recipe_ingredients AS q ON q.ingredient_id = i.ingredient_id
                         JOIN recipe AS r ON r.recipe_id = q.recipe_id
                         WHERE r.recipe_id =". $_SESSION['shoppingList'][$i]."
                         ORDER BY q.ingredient_id ASC;") as $row)
                 {?>
        
                     <p><?php echo $row['ingredient_name'] ?><p>
                     </div>
            <?php }
        }?>
<?php
  } include_once "footer.php";
 ?>