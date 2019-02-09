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
                   <td class="tableData">Cuisine</td>                
                   <td class="tableData">Prep Time</td>
                   <td class="tableData">Cook Time</td>
                   <td class="tableData">Total Time</td>
                   <td class="tableData">Serving Size</td>
                   <td class="tableData">Calories per Serving</td>
               </tr>
             </thead>
           <tbody>
               <tr>
                   <td class="tableData"><?php echo $row['cuisine'] ?></td>                
                   <td class="tableData"><?php echo $row['prep_time'] ?></td>
                   <td class="tableData"><?php echo $row['cook_time'] ?></td>
                   <td class="tableData"><?php echo $row['total_time'] ?></td>
                   <td class="tableData"><?php echo $row['serving_size'] ?></td>
                   <td class="tableData"><?php echo $row['calories'] ?></td>
               </tr> 
            </tbody>
         </table>
    </div>
        
     <?php  }  ?>

  <?php
   include_once "footer.php";
 ?>