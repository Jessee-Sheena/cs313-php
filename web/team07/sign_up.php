<?php 
session_start();
require "config.php";
$db=getDb();

      
?>

<label for="username"> Create a username: </label>
<input type="text" name="username" id="username" required>
<label for="password"> Create a password: </label>
<input type="password" name="password" id="password" required>
