<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetched Products</title>
    <!-- Include your bag.css file or the necessary CSS styles here -->
    <link rel="stylesheet" href="assets/css/fetch.css" />
</head>
<body>

<div class="card">
    <div class="card-row">
        <div class="cart">
            <div class='title'>
                <div class='title-row'>
                    <div class='your-bag'><h4><b>Products</b></h4></div>
                </div>
            </div>

            <div class="main-product-container">
            <?php
            include './config.php';

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Check if the link parameter is passed
            if(isset($_GET['link'])){
                $link = $_GET['link'];

                // Query to fetch products based on the unique link
                $sql = "SELECT * FROM checkout_products WHERE link = '$link'";

                $result = $conn->query($sql);

                // Check for errors in query execution
                if ($result === false) {
                    echo "Error executing query: " . mysqli_error($conn);
                } else {
                    // Fetch all rows into an array
                    $rows = $result->fetch_all(MYSQLI_ASSOC);

                    // Check if any rows were returned
                    if (!empty($rows)) {
                        // Output data of each row
                        foreach ($rows as $row) {
                            // Output each product within its own container
                            echo "
                            <div class='product-container'>
                                <div class='img-container'>
                                    <img class='img' src='./admin/product/{$row['productImage']}'>
                                </div>
                                <div class='product-name'>
                                    <div class='keys'>
                                        <div class='pname'>{$row['productName']}</div>
                                    </div>
                                </div>
                                <div class='price-container'>
                                    <div class='row upprice' data-price='{$row['productPrice']}'>
                                        <span class='row total-price'>Price: &#8358; {$row['productPrice']}</span>
                                    </div>
                                    <div class='big-price'>&#8358; {$row['productPrice2']}</div>
                                </div>
                            </div>";
                        }
                    } else {
                        echo "No products found for this link.";
                    }
                }
            } else {
                echo "Invalid link.";
            }

            $conn->close();
            ?>
            </div>

            <div class="back-to-shop">
                <a href="./index.php">&leftarrow; <span class="text-muted">Back to Home</span></a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
