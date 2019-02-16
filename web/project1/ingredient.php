<?php 
session_start();

require "config.php";
$db=getDb();
foreach ($db->prepare("SELECT recipe_id FROM recipe ORDER BY recipe_id DESC LIMIT 1") as $row); {
       // $_SESSION['tempId'] = $row['recipe_id'];
}

 if(isset($_POST['ingredient'])) {
      $ingredient = htmlspecialchars($_POST['ingredient']);
      $db->query("INSERT INTO ingredients (ingredient_name)
      SELECT '".$ingredient ."'
      WHERE NOT EXISTS (SELECT * FROM ingredients WHERE ingredient_name = '". $ingredient. "');");
   }
  // echo $_SESSION['tempId'];
?>