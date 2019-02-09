<?php 
   include_once "header.php";
   require "config.php";
   $db=getDb();
   $id = $_GET['id'];   
 
  foreach ($db->query("SELECT * FROM recipe WHERE recipe_id = " .$id ) as $row)
        {
          echo "<h2>". $row['recipe_name'] ."?></h2>";
        
       }  ?>

  <?php
   include_once "footer.php";
 ?>