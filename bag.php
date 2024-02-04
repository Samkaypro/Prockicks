<html lang="en">
<head>
  <!-- Your head content -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prockics | Bag</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/bag.css" />
   <!-- Font Awesome CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

   <?php
  include 'header.php';
  ?>
</head>
<body style="padding-top: 100px">
  

 
  <div class="card">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col"><h4><b>Your Bag</b></h4></div>
                            <div class="col align-self-center text-right text-muted"><?php echo $ptotal ?> items</div>
                        </div>
                    </div> 
                    <?php
$subtotal = 0;
$ptotal = 0;

if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        // Check if 'productImage' and 'productQuantity' keys exist
        $productImage = isset($value['productImage']) ? $value['productImage'] : '';
        $productName = isset($value['productName']) ? $value['productName'] : '';
        $productQuantity = isset($value['productQuantity']) ? $value['productQuantity'] : 0;
        $productPrice = isset($value['productPrice']) ? $value['productPrice'] : 0;

        $ptotal = intval($productPrice) * intval($productQuantity);
        $subtotal += $ptotal;

        echo "
        <div class='row border-top border-bottom'>
            <div class='row main align-items-center'>
                <div class='col-2'><img class='img-fluid' src='{$productImage}'></div>
                <div class='col'>
                    <div class='row text-muted'>S</div>
                    <div class='row'>{$productName}</div>
                </div>
                <div class='col'>
                    <a href='#'>-</a><a href='#' class='border'>{$productQuantity}</a><a href='#'>+</a>
                </div>
                <div class='col'>&#8358;  {$productPrice} <span class='close'>&#10005;</span></div>
            </div>
        </div>";
    }
}
?>


                    <div class="back-to-shop"><a href="./index.php">&leftarrow;</a><span class="text-muted">Back to Home</span></div>
                </div>
                <div class="col-md-4 summary">
                    <div><h5><b>Summary</b></h5></div>
                    <hr>
                    
                    
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
                        <div class="col text-right">&#8358; <?php echo $subtotal ?></div>
                    </div>
                    <button class="btn">CHECKOUT</button>
                </div>
            </div>
            
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</body>
</html>