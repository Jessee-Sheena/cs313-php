<?php 
session_start();
require "config.php";
$db=getDb();

      
?>
<form action="sign_up.php" method="post">
<label for="username"> Create a username: </label>
<input type="text" name="username" id="username" required>
<label for="password"> Create a password: </label>
<input type="password" name="password" id="password" required>
<input type="submit">
</form>
<?php
if(isset($_POST['username'])) {

$query =$db->prepare("INSERT INTO \"userTeam\" (userName, user_password) VALUES ('".$_POST['username']."','".$_POST['password']."');");
$query->execute();

}
 ?>