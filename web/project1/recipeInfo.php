<?php 
   include_once "header.php";
   require "config.php";
   $db=getDb();
   $id = $_GET['id'];   
 
  foreach ($db->query("SELECT * FROM recipe WHERE recipe_id = " .$id ) as $row)
        {?>
        <div id="infoDiv">
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
    </div>
        
     <?php  }  
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
        <h2> <?php echo $row['section_name']?> </h2>

  <?php
   } 
    include_once "footer.php";
 ?>