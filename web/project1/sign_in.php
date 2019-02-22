<?php 
 session_start();
   include_once "header.php";   
   require "config.php";
   $db=getDb();
      
?>
<div>
<form action="sign_in.php" method="post">
<label for="username"> Enter username: </label>
<input type="text" name="username" id="username" required>
<label for="password"> Enter password: </label>
<input type="password" name="password" id="password" required>
<input type="submit">
<a href="sign_up.php"> sign up </a>
</form>
</div>
<?php
$query = $db->query("SELECT user_name, password FROM \"user\" WHERE user_name = '". $_POST['username']."';" );
$query->execute(); 
$user = $query->fetch();
if (password_verify($_POST['password'],$user['password'])) {
    $_SESSION['user'] = $_POST['username'];
    header('Location: home.php');
    die();
   
    
}
else {
echo "Password Incorrect";
}


 ?>
 <?php
   include_once "footer.php";
 ?>