<?php 
session_start();
require "config.php";
$db=getDb();
if(isset($_POST['password']) AND isset($_POST['password2']) AND isset($_POST['username'])) {
  if($_POST['password']== $_POST['password2']) {
  $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $query =$db->prepare("INSERT INTO \"userTeam\" (userName, user_password) VALUES ('".$_POST['username']."','".$hashedPassword."');");
  $query->execute();
  header('Location: sign_in.php ');
  die();
} else{
  echo "<p style=\"color: red\"> Passwords do not match.</p>";
  ?> <style> .asterisk {display: inline;} </style> <?php
}

}

      
?>
<style>
.asterisk {
   display: none;
}

</style>
<form action="sign_up.php" method="post"> 
<span class="asterisk user" > * </span><label for="username"> Create a username: </label>
<input type="text" name="username" id="username" required>
<span class="asterisk password" > * </span><label for="password"> Create a password: </label>
<input type="password" name="password" id="password" required>
<span class="asterisk password" > * </span><label for="password2"> Verify Password </label>
<input type="password" name="password2" id="password2" required>
<input type="submit">
</form>

