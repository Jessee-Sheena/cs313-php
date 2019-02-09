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
               foreach ($db->query("SELECT recipe_name, recipe_id FROM recipe WHERE lower(recipe_name) LIKE lower ( '%" . $keyWord ."%')") as $row)
               {
                              
                echo '<a href="recipeInfo.php?id='.$row['recipe_id'].'">'. $row['recipe_name'] . '</a>';
                $count += 1;
               }				
				break;
			case 'name':
				
				break;
			case 'cuisine':
				
				break;
			case 'cook':
				
				break;
			case 'prep':
				
				break;
			case 'ingredients':
						
				break;
                }
       
    ?>


<?php
   include_once "footer.php";
 ?>