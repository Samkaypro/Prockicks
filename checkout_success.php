<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Success</title>
   
</head>
<body>
    <div class="container">
        <h1>Checkout Successful!</h1>
        <p>Thank you for your purchase.</p>
        <p>Your order has been successfully processed.</p>
        <?php
     
        if(isset($_GET['link'])){
            $link = $_GET['link'];
            echo "<p>You can access your products using the following link: <a href='fetch_products.php?link=$link'>Access Products</a></p>";
        }
        ?>
    </div>
</body>
</html>
