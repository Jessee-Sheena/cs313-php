<?php 
session_start();
require "config.php";
$db=getDb();
?>
<div id="editUser">
    <form action="editUser.php" method="post"> 
       <span class="asterisk user" > * </span><label for="username"> Create a username: </label>
       <input type="text" name="editUsername" id="editUsername" required>
       <span class="asterisk password" > * </span><label for="editPassword"> Create a password: (at least 7 charachters)</label>
       <input type="password" name="editPassword" id="editPassword" pattern="(?=.*\d)[A-Za-z\d]{7,}" required>
       <span class="asterisk password" > * </span><label for="editPassword2"> Verify Password </label>
       <input type="password" name="editPassword2" id="editPassword2" required>
       <input type="submit">
    </form
</div>
<?php
 if(isset($_POST['password']) AND isset($_POST['password2']) AND isset($_POST['username'])) {
  if($_POST['password']== $_POST['password2']) {
     $length = strlen($_POST['password']);
     if($length >= 7 AND 1 === preg_match('~[0-9]~', $_POST['password'])) {
       $hashedPassword = password_hash($_POST['editPassword'], PASSWORD_DEFAULT);
       $db-query("UPDATE \"user\" SET user_name = '". $_POST['editUsername']. "' WHERE user_id = '" . $_SESSION['user_id']. "';");
        $db-query("UPDATE \"user\" SET password = '" . $_POST['editPassword'] . "' WHERE user_id = '" . $_SESSION['user_id']. "';");
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