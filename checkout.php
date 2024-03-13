<?php
session_start();


include './config.php';


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$unique_link = uniqid(); 

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        $productName = $value['productName'];
        $productPrice = $value['productPrice'];
        $productPrice2 = $value['productPrice2'];
        $productImage = $value['productImage'];

        
        $sql = "INSERT INTO checkout_products (productName, productPrice, productPrice2, productImage, link) 
                VALUES ('$productName', '$productPrice', '$productPrice2', '$productImage', '$unique_link')";

        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    header("Location: checkout_success.php?link=$unique_link");
    exit();
}

$conn->close();
?>
