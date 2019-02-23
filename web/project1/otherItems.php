<?php 
   session_start();      
   require "config.php";
   $db=getDb();
   ?>
   <div id="pictureRow">
   <h1> Other Recipe's  of Interest</h1>
   <?php
      echo "what";
   foreach($db->query("SELECT recipe_id, image FROM recipe ORDER BY recipe_id DESC LIMIT 5;")as $row) {
   ?>
     <a href="setsessionid.php?id="<?php $row['recipe_id'] ?>"> <img src="<?php echo $row['image'] ?>" alt= "food"/></a>
  <?php }  
   ?>
   </div>