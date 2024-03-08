

<html lang="en">
<head>
  <!-- Your head content -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prockics | Bag</title>


    <link rel="stylesheet" href="assets/css/bag.css" />
   <!-- Font Awesome CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <?php
    session_start();
  ?>
</head>
<body >
  

<div class="card">
    <div class="card-row">
        <div class="cart">
        <?php
$subtotal = 0;
$ptotal = 0; // Initialize $ptotal here

if (isset($_SESSION['cart'])) {
    echo "
    <div class='title'>
        <div class='title-row'>
            <div class='your-bag'><h4><b>Your Bag</b></h4></div>
        </div>
    </div>";

    foreach ($_SESSION['cart'] as $key => $value) {
        // Check if 'productImage' and 'productQuantity' keys exist
        $productImage = isset($value['productImage']) ? $value['productImage'] : '';
        $productName = isset($value['productName']) ? $value['productName'] : '';
        $productQuantity = isset($value['productQuantity']) ? $value['productQuantity'] : 1;
        $productPrice = isset($value['productPrice']) ? $value['productPrice'] : 0;
        $productPrice2 = isset($value['productPrice2']) ? $value['productPrice2'] : 0;

        $ptotal += intval($productQuantity); // Update $ptotal
        $productTotal = intval($productPrice) * intval($productQuantity); // Calculate product total
        $subtotal += $productTotal; // Update $subtotal

        echo "
    <div class='main-product-container'>
        <div class='product-container'>
            <div class='img-container'>
                <img class='img' src='./admin/product/{$productImage}'>
            </div>
            <div class='product-name'>
               
                
            </div>
            <div class='keys'>
            <div class='pname'>{$productName}</div>
            </div>
            <div class='price-container'>
           
            <div class='row upprice' data-price='{$productPrice}'>
                
                <span class='row total-price' data-key='{$key}'> &#8358; {$productTotal}</span>
            </div>
            <div class='big-price'>  &#8358; {$productPrice2}</div>
            </div>
        </div>
    </div>";
}
}
?>


<div class="back-to-shop">
    <a href="./index.php">
        &leftarrow; <span class="text-muted">Back to Home</span>
    </a>
    </div>
            <a href="checkout.php">
              <button class="checkout-btn">CHECKOUT</button>
            </a>

        </div>
</div>
   
    </div>
</div>


</body>
</html>