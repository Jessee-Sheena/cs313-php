<?php 
session_start();
require "config.php";
$db=getDb();

      
?>
<form action="sign_in.php" method="post">
<label for="username"> Enter username: </label>
<input type="text" name="username" id="username" required>
<label for="password"> Enter password: </label>
<input type="password" name="password" id="password" required>
<input type="submit">
<a href="sign_up.php"> sign up </a>
</form>
<?php
$query = $db->query("SELECT userName, user_password FROM \"userTeam\" WHERE userName = '". $_POST['username']."';" );
$query->execute(); 
$user = $query->fetch();
if (password_verify($_POST['password'],$user['user_password'])) {
    $_SESSION['user'] = $_POST['username'];
    header('Location: welcome.php');
    die();
   
    
}
else {
echo "Password Incorrect";
}


 ?>