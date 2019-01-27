<?php
 include_once "header.php";

?>
<div id="itemInCart"><?php 
require_once "action.php";
?>
<br/><button type=button onclick="takeAction('empty', '');">Empty Cart</button>
</div>
<?php
  include_once "footer.php";
?>
