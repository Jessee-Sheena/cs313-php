<?php 
 session_start();
   include_once "header.php";   
   require "config.php";
   $db=getDb();
      
?>
<div class="signIn">
<div>
<form action="sign_in.php" method="post">
<label for="username"> Enter username: </label>
<input type="text" name="username" id="username" required>
</div>
<div>
<label for="password"> Enter password: </label>
<input type="password" name="password" id="password" required>
<input type="submit">
</div>
<a href="sign_up.php" class="createButton"> sign up </a>
<?php
if(!empty($_SESSION['user_id'])){ ?>
   
   <a href="deleteUser.php" class="createButton"> Delete User </a>
   <a href="editUser.php" class="createButton"> Edit User </a>
   <a href="sign_out.php" class="createButton"> Sign Out </a>
<?php } ?>
</form>
</div>
<?php
if(isset($_POST['username']) AND isset($_POST['password'])) {
$query = $db->query("SELECT user_name, password FROM \"user\" WHERE user_name = '". $_POST['username']."';" );
$query->execute(); 
$user = $query->fetch();
if (password_verify($_POST['password'],$user['password'])) {
    $_SESSION['user'] = $_POST['username'];
     
       foreach($db->query("SELECT user_id, password FROM \"user\" WHERE user_name = '". $_SESSION['user']."';" ) as $row); {
               $userID = $row['user_id'];
               $_SESSION['user_id'] = $userID;
               }
    header('Location: home.php');
    die();
   
    
}
else {
echo "Password Incorrect";
}
}

 ?>
 <?php
   include_once "footer.php";
 ?>