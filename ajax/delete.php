<?php

$product = htmlspecialchars($_GET["product"]);
$id = htmlspecialchars($_GET["id"]);

if( $product != "0" ):?>
    <a href="../controller/doDelete.php?product=<?=$product?>&id=<?=$id?>" class="btn">Delete</a>
<?php endif;
?>