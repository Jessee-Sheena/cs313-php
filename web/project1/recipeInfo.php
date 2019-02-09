<?php 
   include_once "header.php";
   require "config.php";
   $db=getDb();
   $id = $_GET['id'];   
 
  foreach ($db->query("SELECT * FROM recipe WHERE id = 2" ) as $row)
        {
          echo '<h2><?php echo $row[\'recipe_name\']?></h2>';
         /* <img src="<?php echo $row['image'] ?>" alt="food"/>
          <p><?php echo $row['recipe_description'] ?></p>
    <table>
        <thead>
            <tr>
                <td>Cuisine</td>                
                <td>Prep Time</td>
                <td>Cook Time</td>
                <td>Total Time</td>
                <td>Serving Size</td>
                <td>Calories per Serving</td>
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
            </tr> */
       }  ?>

  <?php
   include_once "footer.php";
 ?>