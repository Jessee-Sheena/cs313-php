<?php 
 session_start();
   include_once "header.php";   
   require "config.php";
   $db=getDb();

if(isset($_POST['password']) AND isset($_POST['password2']) AND isset($_POST['username'])) {
  if($_POST['password']== $_POST['password2']) {
     $length = strlen($_POST['password']);
     if($length >= 7 AND 1 === preg_match('~[0-9]~', $_POST['password'])) {
       $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
       $query =$db->prepare("INSERT INTO \"user\" (user_name, password) VALUES ('".$_POST['username']."','".$hashedPassword."');");
       $query->execute();
       header('Location: sign_in.php ');
       die();
  }else {
  echo "<p style=\"color: red\">Password is not long enough or does not contain a number.</p>";
}
} else{
  echo "<p style=\"color: red\"> Passwords do not match.</p>";
  ?> <style>  .password {display: inline;} </style> <?php
}

}

      
?>

<form action="sign_up.php" method="post"> 
<span class="asterisk user" > * </span><label for="username"> Create a username: </label>
<input type="text" name="username" id="username" required>
<span class="asterisk password" > * </span><label for="password"> Create a password: (at least 7 charachters)</label>
<input type="password" name="password" id="password" pattern="(?=.*\d)[A-Za-z\d]{7,}" required>
<span class="asterisk password" > * </span><label for="password2"> Verify Password </label>
<input type="password" name="password2" id="password2" required>
<input type="submit">
</form

<?php
   include_once "footer.php";
 ?>