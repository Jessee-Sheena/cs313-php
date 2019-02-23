<?php 
   include_once "header.php";
   session_start();
   require "config.php";
   $db=getDb();
?>
 <div id="searchForm">
   <form  method="post" action="search.php">
        <label for="searches">Search for recipes:</label>
        <select name="searchOption" id="searches">
            <option value=""> Select</option>
            <option value="keyword">by keyword</option>
            <option value="name">by name</option>
            <option value="cuisine">by cuisine</option>
            <option value="cook">by cook Time</option>
            <option value="prep">by prep Time</option>
            <option value="ingredients">by ingredients</option>
        </select>
        <div id="searchInput">
           
        </div>
    </form>
 </div>
 <?php
 $word = $_POST['searchOption'];
 switch ($word) {
			case 'keyword':
               $keyWord = $_POST['keywords'];
               foreach ($db->query("SELECT recipe_name, recipe_id, image, recipe_description FROM recipe WHERE lower(recipe_name) LIKE lower ( '%" . $keyWord ."%')") as $row)
               {
                 echo '<div class="listSection"><img src="'.$row['image'] . '" alt= "food"/>';                      
                 echo '<h2 class="listHeader"><a href="recipeInfo.php?id='.$row['recipe_id'].'">'. $row['recipe_name'] . '</a></h2>';
                 echo '<p>'.$row['recipe_description']. '</p></div>';        
                
               }				
				break;
			case 'name':
               $keyWord = $_POST['recipeName'];
               foreach ($db->query("SELECT recipe_name, recipe_id, image, recipe_description FROM recipe WHERE lower(recipe_name) = lower ( '" . $keyWord ."')") as $row)
               {
                 echo '<div class="listSection"><img src="'.$row['image'] . '" alt= "food"/>';                      
                 echo '<h2 class="listHeader"><a href="recipeInfo.php?id='.$row['recipe_id'].'">'. $row['recipe_name'] . '</a></h2>';
                 echo '<p>'.$row['recipe_description']. '</p></div>';   
                
               }			
				
				break;
			case 'cuisine':
				 $keyWord = $_POST['typeCuisine'];
               foreach ($db->query("SELECT recipe_name, recipe_id, image, recipe_description FROM recipe WHERE lower(cuisine) = lower ( '" . $keyWord ."')") as $row)
               {
                 echo '<div class="listSection"><img src="'.$row['image'] . '" alt= "food"/>';                      
                 echo '<h2 class="listHeader"><a href="recipeInfo.php?id='.$row['recipe_id'].'">'. $row['recipe_name'] . '</a></h2>';
                 echo '<p>'.$row['recipe_description']. '</p></div>';   
                
               }	
				break;
			case 'cook':
                $keyWord = $_POST['cookTime'];
               foreach ($db->query("SELECT recipe_name, recipe_id, image, recipe_description FROM recipe WHERE cook_time =". $keyWord ) as $row)
               {
                 echo '<div class="listSection"><img src="'.$row['image'] . '" alt= "food"/>';                      
                 echo '<h2 class="listHeader"><a href="recipeInfo.php?id='.$row['recipe_id'].'">'. $row['recipe_name'] . '</a></h2>';
                 echo '<p>'.$row['recipe_description']. '</p></div>';   
                
               }				
				break;
			case 'prep':
                $keyWord = $_POST['prepTime'];
               foreach ($db->query("SELECT recipe_name, recipe_id, image, recipe_description FROM recipe WHERE prep_time = " . $keyWord ) as $row)
               {
                 echo '<div class="listSection"><img src="'.$row['image'] . '" alt= "food"/>';                      
                 echo '<h2 class="listHeader"><a href="recipeInfo.php?id='.$row['recipe_id'].'">'. $row['recipe_name'] . '</a></h2>';
                 echo '<p>'.$row['recipe_description']. '</p></div>';   
                
               }							
				break;
			case 'ingredients':
				$ingredient1 = $_POST['ingredient1'];
                
               foreach ($db->query("SELECT
                          r.recipe_id,
                          r.recipe_name,
                          r.image, 
                          r.recipe_description,
                          i.ingredient_name
                          FROM ingredients AS i
                          JOIN recipe_ingredients AS q ON q.ingredient_id = i.ingredient_id
                          JOIN recipe AS r ON r.recipe_id = q.recipe_id
                          WHERE lower(i.ingredient_name) LIKE lower ( '%" . $ingredient1 ."%')") as $row)
               {
                 echo '<div class="listSection"><img src="'.$row['image'] . '" alt= "food"/>';                      
                 echo '<h2 class="listHeader"><a href="recipeInfo.php?id='.$row['recipe_id'].'">'. $row['recipe_name'] . '</a></h2>';
                 echo '<p>'.$row['recipe_description']. '</p></div>';        
                
               }			

				break;
                }
       
    ?>


<?php
   include_once "footer.php";
 ?>