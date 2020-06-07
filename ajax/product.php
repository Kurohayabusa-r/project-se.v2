<?php
require '../database/db.php';

$id = $_GET["id"];
$product = $_GET["product"];

$stmt = $conn->prepare("SELECT * FROM $product WHERE product_id = ?");
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if( $id != "0" ){
    if( $row["product_price"] == 0){
        echo "Free";
    }else{
        echo "Rp.".$row["product_price"];
    }
}
?>