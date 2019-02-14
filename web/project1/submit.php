<?php 
   include_once "header.php";
?>
  <div id="submitForm">
        <h1>Recipe Submission</h1>
        <form action="submit.php" method="post" id="recipeForm">
            <label for="recipeName">Recipe Name: </label>
            <input type="text" id="recipeName" name="recipeName" required />
            <label for="recipeDescription">Description</label>
            <textarea rows="4" cols="30" name="recipeDescription" id="recipeDescription" requied></textarea>
            <label for="cook_Time">Cook Time: </label>
            <input type="number" id="cook_Time" name="cook_Time" required />
            <label for=" prep_Time">Preperation Time: </label>
            <input type="number" id="prep_Time" name="prep_Time" required />
            <label for="total_Time">Total Time: </label>
            <input type="number" name="total_Time" id="total_time" required/>
            <label for="serving_size">Serving Size: </label>
            <input type="number" name="serving_size" id="serving_size" required/>
            <label for="calories">Calories</label>
            <input type="number" name="calories" id="calories" required/>
            <label for="cuisine">Cuisine Type: </label>
            <select name="cuisine" id="cuisine"> 
               <option value=""> Select</option> 
               <option value="American">American</option> 
               <option value="Chinese">Asian</option> 
               <option value="Indian">Indian</option> 
               <option value="Mexican">Mexican</option> 
               <option value="Italian">Italian</option> 
               <option value="Caribbean">Caribbean</option> 
           </select> 
            <div id="image">
                <label for="recipeImage">Image upload: </label>
                <input type="file" name="recipeImage" id="recipeImage" accept="image/*" required />
                <input type="submit" />
            </div>
        </form>
    </div>


<?php
   include_once "footer.php";
 ?>