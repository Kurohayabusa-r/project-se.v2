<?php
session_start();
unset($_SESSION["error"]);

require "../database/db.php";

if( $_SERVER["REQUEST_METHOD"] == "POST" ){
    $productType = $_POST["productType"];
    $productId = $_POST["productId"];
    $productName = $_POST["productName"];
    $productPrice = $_POST["productPrice"];

    if($productId == ""){
        $_SESSION["error"] = "Product ID must be filled";
    }
    else if($productName == ""){
        $_SESSION["error"] = "Product name must be filled";
    }
    else if($productPrice == ""){
        $_SESSION["error"] = "Product price must be filled";
    }
    
    $view = "SELECT * FROM $productType WHERE product_name = '?' or product_id = '?'";
    $stmt = $conn->prepare($view);
    $stmt->bind_param("ss", $productName, $productId);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->free_result();
    $stmt->close();

    if( $result->num_rows == 0 ){
        $stmt = $conn->prepare("INSERT INTO $productType(product_id,product_name,product_price) VALUES(?,?,?)");
        $stmt->bind_param("ssi", $productId, $productName, $productPrice);

        if( $stmt->execute() ){
            $_SESSION["success"] = "Product successfully added.";
            header("Location: ../insert.php");
        }
        else{
            if( !isset($_SESSION["error"]) )
            {
                $_SESSION["error"] = "Failed to add product.";
            }  
            header("Location: ../insert.php");
        }
        $stmt->free_result();
        $stmt->close();
    }
    else{
        if( !isset($_SESSION["error"]) )
        {
            $_SESSION["error"] = "Product is already added.";
        }
        header("Location: ../insert.php");
    }
}

?>