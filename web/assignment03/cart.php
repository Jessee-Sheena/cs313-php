<?php
 include_once "header.php";

?>
<div id="itemInCart"><?php 
require_once "action.php";
?>

</div>
<div id="buttonSection">
<br/><button type=button onclick="takeAction('empty', '');">Empty Cart</button>
<a href="checkOut.php" class="shoppingButtons"> Purchase Items</a>
<a href="browseitems.php" class="shoppingButtons"> Keep Shopping</a>
</div>
<?php
  include_once "footer.php";
?>
