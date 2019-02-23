<?php 
session_start();
include_once "header.php";
require "config.php";
$db=getDb();

echo $_POST['steps2'];
if(isset($_POST['steps2'])) {
    $step = htmlspecialchars($_POST['steps2']);  
    $stepNum = htmlspecialchars($_POST['stepNum2']);   
    if($_POST['update'] == "add") {
        $db->query("INSERT INTO steps (recipe_id, step_number, step_instruction)
        VALUES ( '". $_SESSION['id'] ."', ' " . $stepNum ."', ' " . $step . "');");
        header('Location: recipeInfo.php');
        die();
      
      }
    if($_POST['update'] == "exist") {
       $db->query("UPDATE steps SET recipe_id ='". $_SESSION['id'] . "', step_instruction ='". $step . "' WHERE step_number ='" . $stepNum . "';" );
       header('Location: recipeInfo.php');
       die();
    }
}
?>
<div id="editStepsFormDiv">
        <form  action="editSteps.php" method="post" id="editStepsForm">
           <h2> Edit Instructions: </h2>
           <h3> Do you want to: </h3>
           <input type="radio" name="update" id="addStep"  value="add" required>
           <label for="add">Add New steps</label>
           <input type="radio" name="update" id="existStep" value="exist" required>
           <label for="exist">Edit Existing Steps</label>            
           <label for="stepNum2"> Step Number: </label>
           <input type="number" name="stepNum2" id="stepNum2" required>
           <label for="steps2"> Step Instructions </label>
           <textarea rows="4" cols="32" name="steps2" id="steps2" required></textarea>
           <button type="submit" id="stepsSubmit2" >Submit Steps </button>
        </form>
        </div>
       