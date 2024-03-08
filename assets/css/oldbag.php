

<html lang="en">
<head>
  <!-- Your head content -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prockics | Bag</title>


    <link rel="stylesheet" href="assets/css/bagf.css" />
   <!-- Font Awesome CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <?php
  include 'header.php';
  ?>
</head>
<body style="padding-top: 100px">
  

<div class="card">
    <div class="row">
        <div class="cart">
        <?php
$subtotal = 0;
$ptotal = 0; // Initialize $ptotal here 

if (isset($_SESSION['cart'])) {
    echo "
    <div class='title'>
        <div class='row'>
            <div class='col'><h4><b>Your Bag</b></h4></div>
        
        </div>
    </div>";

    foreach ($_SESSION['cart'] as $key => $value) {
        // Check if 'productImage' and 'productQuantity' keys exist
        $productImage = isset($value['productImage']) ? $value['productImage']: '';
        $productName = isset($value['productName']) ? $value['productName'] : '';
        $productQuantity = isset($value['productQuantity']) ? $value['productQuantity'] : 1;
        $productPrice = isset($value['productPrice']) ? $value['productPrice'] : 0;

        $ptotal += intval($productQuantity); // Update $ptotal
        $productTotal = intval($productPrice) * intval($productQuantity); // Calculate product total
        $subtotal += $productTotal; // Update $subtotal

        echo "
    <div class='card'>
        <div class='row main align-items-center'>
            <div class='img-container'>
                <img class='img' src='./admin/product/{$productImage}' >
            </div>
            <div class='product-name'>
                <div class='name'>{$productName}</div>
            </div>
            <div class='keys'>
                <a href='#' class='minus-btn' data-key='{$key}'>-</a>
                <a href='#' class='border quantity' data-key='{$key}'>{$productQuantity}</a>
                <a href='#' class='plus-btn' data-key='{$key}'>+</a>
            </div>
            <div class='price' data-price='{$productPrice}'>
                <span class='total-price' data-key='{$key}'> &#8358; {$productTotal}</span>
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
        </div>
            <a href="">
              <button class="btn">CHECKOUT</button>
            </a>

        </div>
    </div>
</div>




        


        <script type="text/javascript">
    $(document).ready(function () {
        // Function to update subtotal
        function updateSubtotal() {
            var subtotal = 0;
            // Iterate over each product and update subtotal
            $('.total-price').each(function () {
                subtotal += parseFloat($(this).text().replace(/[^\d.]/g, ''));
            });
            // Update the displayed subtotal
            $('.subtotal').text('₦ ' + subtotal);
        }

        // Event handler for plus button
        $(document).on('click', '.plus-btn', function (e) {
            e.preventDefault();
            var $quantityElement = $(this).siblings('.quantity');
            var $totalPriceElement = $(this).closest('.row').find('.total-price');
            var $productPriceElement = $(this).closest('.row').find('.upprice');

            var quantity = parseInt($quantityElement.text());
            var price = parseFloat($productPriceElement.data('price'));

            // Increment quantity and update total price
            quantity++;
            $quantityElement.text(quantity);
            var totalPrice = price * quantity;
            $totalPriceElement.text('₦ ' + totalPrice);

            // Update displayed product price
            $productPriceElement.data('price', price); // Update the data-price attribute
            $productPriceElement.text('₦ ' + totalPrice);

            // Update the subtotal
            updateSubtotal();
        });

        // Event handler for minus button
        $(document).on('click', '.minus-btn', function (e) {
            e.preventDefault();
            var $quantityElement = $(this).siblings('.quantity');
            var $totalPriceElement = $(this).closest('.row').find('.total-price');
            var $productPriceElement = $(this).closest('.row').find('.upprice');

            var quantity = parseInt($quantityElement.text());
            var price = parseFloat($productPriceElement.data('price'));

            // Ensure quantity is greater than 1 before decrementing
            if (quantity > 1) {
                // Decrement quantity and update total price
                quantity--;
                $quantityElement.text(quantity);
                var totalPrice = price * quantity;
                $totalPriceElement.text('₦ ' + totalPrice);

                // Update displayed product price
                $productPriceElement.data('price', price); // Update the data-price attribute
                $productPriceElement.text('₦ ' + totalPrice);

                // Update the subtotal
                updateSubtotal();
            }
        });
    });
</script>





</body>
</html>