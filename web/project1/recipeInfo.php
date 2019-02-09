<?php 
   include_once "header.php";
   require "config.php";
   $db=getDb();
   $id = $_GET['id'];   
 ?>
 <div id="infoDiv">
 <?php
  foreach ($db->query("SELECT * FROM recipe WHERE recipe_id = " .$id ) as $row)
        {?>
        
           <h2><?php echo $row['recipe_name']?></h2>
           <img src="<?php echo $row['image'] ?>" alt="food"/>
           <p><?php echo $row['recipe_description'] ?></p>
           <table id="infoTable">
              <thead>
                <tr>
                   <th class="tableData">Cuisine</th>                
                   <th class="tableData">Prep Time</th>
                   <th class="tableData">Cook Time</th>
                   <th class="tableData">Total Time</th>
                   <th class="tableData">Serving Size</th>
                   <th class="tableData">Calories per Serving</th>
               </tr>
             </thead>
           <tbody>
               <tr>
                   <td><?php echo $row['cuisine'] ?></td>                
                   <td><?php echo $row['prep_time'] ?></td>
                   <td><?php echo $row['cook_time'] ?></td>
                   <td><?php echo $row['total_time'] ?></td>
                   <td><?php echo $row['serving_size'] ?></td>
                   <td><?php echo $row['calories'] ?></td>
               </tr> 
            </tbody>
         </table>
    
        
  <?php  }  ?>
     <div id="ingredientList">
        <h2> Ingredients </h2>
           <div class="ingredientSections">
               <div>
              <h3 > Main Entre</h3>
              <?php
                  foreach ($db->query("SELECT
                          i.ingredient_name,
                          q.ingredient_amount,
                          m.unit,
		                  s.section_name
                          FROM ingredients AS i
                          JOIN recipe_ingredients AS q ON q.ingredient_id = i.ingredient_id
                          JOIN measurement AS m ON m.measurement_id = q.measurement_id
                          JOIN recipe AS r ON r.recipe_id = q.recipe_id
                          JOIN section AS s ON s.section_id = q.section_id
                          WHERE r.recipe_id =". $id ."AND s.section_id = 1
                          ORDER BY q.ingredient_id ASC;") as $row)
                  {?>
        
                      <p><?php echo $row['ingredient_amount'] . $row['unit'] . '<span class="space"> ' . $row['ingredient_name'] . '</span>'  ?><p>    

              <?php
                   } ?>
                </div>
           
        <div>
             <h3>Sauce</h3>
             <?php
                 foreach ($db->query("SELECT
                         i.ingredient_name,
                         q.ingredient_amount,
                         m.unit,
		                 s.section_name
                         FROM ingredients AS i
                         JOIN recipe_ingredients AS q ON q.ingredient_id = i.ingredient_id
                         JOIN measurement AS m ON m.measurement_id = q.measurement_id
                         JOIN recipe AS r ON r.recipe_id = q.recipe_id
                         JOIN section AS s ON s.section_id = q.section_id
                         WHERE r.recipe_id =". $id ."AND s.section_id = 2
                         ORDER BY q.ingredient_id ASC;") as $row)
                 {?>
        
                     <p><?php echo $row['ingredient_amount'] . $row['unit'] . '<span class="space"> ' . $row['ingredient_name'] . '</span>'  ?><p>  

             <?php
                 } ?>
         </div
      </div>
      <div>
      <h2>Instructions</h2>
       <?php
           $count = 0;
           foreach ($db->query("SELECT
           s.step_number,
           s.step_description
           FROM steps AS s
           JOIN recipe AS r ON r.recipe_id = s.recipe_id
           WHERE r.recipe_id =" . $id .
           "ORDER BY s.step_number ASC;") as $row)
                 {?>
                      count += 1;
                     <p><?php echo $count . ". ". $row['step_description'] ?><p>  

             <?php
                 } ?>
     </div>
 </div>
   <?php 
    include_once "footer.php";
 ?>