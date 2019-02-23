<?php 
session_start();

require "config.php";
$db=getDb();



if(isset($_POST['steps'])) {
      $step = htmlspecialchars($_POST['steps']);  
      $stepNum = htmlspecialchars($_POST['stepNum']);   
      echo $step;
     $db->query("INSERT INTO steps (recipe_id, step_number, step_instruction)
      VALUES ( '". $_SESSION['recipeId'] ."', ' " . $stepNum ."', ' " . $step . "');");
      echo $stepNum . " " . $step;
      }
      

      

?>