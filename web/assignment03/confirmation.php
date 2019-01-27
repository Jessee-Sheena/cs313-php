<?php
session_start();
include_once "header.php";
$_SESSION['name'] = $_POST['name'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['state'] = $_POST['state'];
$_SESSION['zip']= $_POST['zip'];
 ?>
 <div>
 <h1 class="cartHeading"><?php echo $_SESSION['name']; ?>, thank you so much for your order! </h1> <p>Contents:</p><?php
 foreach($_SESSION['cart'] as $items) {
    echo "<td><img src=\"" . $items["image"] ."\" alt=\"". $items["name"]. "\" class=\"confirmimg\" /></td>";
    echo "  Item Name: ".  $items['name'] . " <br/>";
}?>
<p> your items will be shipped to you according to the following address: </p>
<?php
 echo "<div>" . $_SESSION['name']. " " . $_SESSION['lname'] . "<br/>";
 echo $_SESSION['city'] . ", " . $_SESSION['state'] . " " . $_SESSION['zip'];
?>
<p> You can expect your items within 2 weeks from date of purchase.We hope you enjoy your purchase and we look forward to doing business with you again!</p>
</div>
<?php 
include_once "footer.php";
?>