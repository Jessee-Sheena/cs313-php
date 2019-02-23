  <link rel="stylesheet" href="home.css" />
<?php 
   session_start();      
   require "config.php";
   $db=getDb();
   ?>
   <h2> Other Recipe's  of Interest</h2>
   <div id="pictureRow">      
   <?php      
      foreach($db->query("SELECT recipe_id, image FROM recipe ORDER BY recipe_id DESC LIMIT 5;")as $row) {
   ?>
        <div class="pict">
          <a href="setsessionid.php?id="<?php echo $row['recipe_id'] ?>"> <img src="<?php echo $row['image'] ?>" alt= "food"/></a>
       </div>
  <?php } ?>
   </div>