<?php

require "../database/db.php";

$product = htmlspecialchars($_GET["product"]);
$id = htmlspecialchars($_GET['id']);

$stmt = $conn->prepare("DELETE FROM $product WHERE id = ?");
$stmt->bind_param("s", $id);

if($stmt->execute()){
    $stmt->close();
    header("Location: ../build.php");
}else{
    $stmt->close();
    die("Delete failed");
}
?>