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
        
     <?php  }  ?>

  <?php
   include_once "footer.php";
 ?>