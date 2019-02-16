<?php 
   include_once "header.php";
   require "config.php";
   $db = getDb();
?>
<h2>Create Your Account</h2>
<form>
<input type="text" name="name"placeholder="First and Last Name" required>
<input type="password" name="password1" required>
<input type="password" name="password2" required>
<input type="email" name"email" requied>
</form>



<?php
   include_once "footer.php";
 ?>