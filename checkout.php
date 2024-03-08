<?php
session_start();

// Connect to your database
include './config.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Generate a unique link
$unique_link = uniqid(); // Generate a unique ID (you may use other methods for generating unique links)

// Insert products into the database
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        $productName = $value['productName'];
        $productPrice = $value['productPrice'];
        $productPrice2 = $value['productPrice2'];
        $productImage = $value['productImage'];

        // Insert product information along with the unique link into the database
        $sql = "INSERT INTO checkout_products (productName, productPrice, productPrice2, productImage, link) 
                VALUES ('$productName', '$productPrice', '$productPrice2', '$productImage', '$unique_link')";

        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Redirect to a page where the user can access the products using the unique link
    header("Location: checkout_success.php?link=$unique_link");
    exit();
}

$conn->close();
?>
