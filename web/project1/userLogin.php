<?php 
session_start();
include_once "header.php";
require "config.php";
$db=getDb();
?>
<form>
   <input type="text" name="userName" required/>
   <input type="password" name="userPassword" required/>
</form>
<?php
include_once "footer.php";
 ?>