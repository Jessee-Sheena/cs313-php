<?php 
session_start();
require "config.php";
$db=getDb();
if(isset($_POST['steps'])) {
      $step = htmlspecialchars($_POST['ingredient']);  
      $stepNum = htmlspecialchars($_POST['number']);      
     /* $db->query("INSERT INTO steps (recipe_id, step_number, step_instructions)
      VALUE ( '". $_SESSION['recipeId'] ."', ' " . $stepNum ."', ' " . $step . "' )");
      echo $stepNum . " " . $step;*/
      }
      

      

?>