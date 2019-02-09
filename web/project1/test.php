<?php
   require "config.php";
   $db = getDb();

    foreach ($db->query("SELECT recipe_name, recipe_id FROM recipe WHERE id = 2" ) as $row)
        {
          echo '<p><b>' . $row['recipe_name'] . '</p>';
        }
 ?>