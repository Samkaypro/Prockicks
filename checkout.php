<?php
session_start();
include './database/config.php';

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert products into the database
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        $productName = $value['productName'];
        $productQuantity = $value['productQuantity'];
        $productPrice = $value['productPrice'];
        $productPrice2 = $value['productPrice2'];
        $productImage = $value['productImage'];

        // You need to define your database table structure and adjust the query accordingly
        $sql = "INSERT INTO your_table_name (productName, productQuantity, productPrice, productPrice2, productImage) 
                VALUES ('$productName', '$productQuantity', '$productPrice', '$productPrice2', '$productImage')";

        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Generate a unique link
    $unique_link = uniqid(); // Generate a unique ID (you may use other methods for generating unique links)

    // Redirect to a page where the user can access the products using the unique link
    header("Location: checkout_success.php?link=$unique_link");
    exit();
}

$conn->close();
?>
