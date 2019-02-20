<?php 
session_start();
require "config.php";
$db=getDb();

    if(!empty($_SESSION['user'])) {
    echo "<h1> Welcome ". $_SESSION['user']. "!";
}
else {
header('Location: sign_in.php');
}
?>
