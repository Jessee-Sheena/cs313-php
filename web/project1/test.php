<?php
   require "config.php";
   $db = getDb();

    foreach ($db->query("SELECT * FROM recipe" ) as $row)
        {
          echo '<p><b>' . $row['recipe_name'] . '</p>';
        }
 ?>