<?php
session_start();

if(isset($_POST['addCart'])){
    $product_name = $_POST['PName'];
    $product_price = $_POST['PPrice'];
    $product_image = $_POST['Image'];
    

    $_SESSION['cart'][] = array(
        'productName' => $product_name,
        'productPrice' => $product_price,
        'productImage' => $product_image,
    );

    header("location:index.php");
}


//this function is to remove a selected item
if(isset($_POST['remove'])){
    $item_to_remove = $_POST['item'];
    foreach($_SESSION['cart'] as $key => $value){
        if($value['productName'] === $item_to_remove){
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            header('location:bag.php');
        }
    }
}

if(isset($_POST['update'])){
    $item_to_update = $_POST['item'];
    $product_name = $_POST['Pname'];
    $product_price = $_POST['PPrice'];
    $product_image = $_POST['Image'];
   

    foreach($_SESSION['cart'] as $key => $value){
        if($value['productName'] === $item_to_update){
            $_SESSION['cart'][$key] = array(
                'productName' => $product_name,
                'productPrice' => $product_price,
                'productImage' => $product_image,
               
            );
            header("location:bag.php");
        }
    }
}

?>
