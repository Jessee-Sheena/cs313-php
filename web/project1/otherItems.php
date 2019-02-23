<?php 
   session_start();      
   require "config.php";
   $db=getDb();
   ?>
   <div id="pictureRow">
   <h1> Other Recipe's  of Interest</h1>
   <?php
   $num;
   $items = $db->query("SELECT recipe_id, recipe_image FROM recipe ORDER BY recipe_id DESC LIMIT 5");
   $items->execute();
   foreach($items as $row) {
   ?>
     <a href="setsessionid.php?id="<?php $row['recipe.id'] ?>" <img src="<?php echo $row['image'] ?>" alt= "food"/>
  <?php }  
   ?>
   </div>