<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Product Page</title>
</head>

<body>
    <?php
    $id = $_GET['ID'];
    include 'config.php'; //saving data here in the record 
    // $Record = mysqli_query($con,"SELECT * FROM `tblproduct` WHERE Id = $id ");
    $stmt = mysqli_prepare($con, "SELECT * FROM `product_table` WHERE Id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $Record = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_array($Record);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-black mt-3">

                <form action="update.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-danger">Product Update:</p>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Product Name: </label>
                        <input type="text" value="<?php echo $data['PName'] ?>" name="Pname" class="form-control"
                            placeholder="Enter Product Name">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Product Price: </label>
                        <input type="text" value="<?php echo $data['PPrice'] ?>" name="Pprice" class="form-control"
                            placeholder="Enter Product Price">
                    </div>
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Slashed Price: </label>
                        <input type="text" value="<?php echo $data['PPrice2'] ?>" name="Pprice" class="form-control"
                            placeholder="Enter Product Price">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Add Product Image </label>
                        <input type="file" name="Pimage" class="form-control" placeholder="Upload Product Image ">
                        <img src="<?php echo $data['Image'] ?>" style="height: 100px;" alt="">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Select Page Category</label>
                        <select class="form-select" name="Pages">
                            <option value="Luxury">Luxury</option>
                            <option value="Men">Men Sneakers</option>
                            <option value="Women">Women Sneakers</option>
                            <option value="Slides">Slides</option>
                            <option value="Shoes">Shoes</option>
                            <option value="Clothes">Clothes</option>
                        </select>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $data['Id'] ?>">
                    <button name="update" class="bg-danger fs-4 fw-bold my-5 form-control text-white">Update</button>
                </form>
            </div>
        </div>
    </div>

    <!---php update code -->
    <?php
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $product_name = $_POST['Pname'];
        $product_price = $_POST['Pprice'];
        $product_price2 =$_POST['Pprice2'];
        $product_image = $_FILES['Pimage'];
        // print_r($product_image);//This will show location in array form
        $image_loc = $_FILES['Pimage']['tmp_name']; //These are the variables
        $image_name = $_FILES['Pimage']['name'];
        $img_desestination = "Uploadimage/" . $image_name; //destination to store the location of the image $img is a variable
        move_uploaded_file($image_loc, "Uploadimage/" . $image_name); //To upload the file
    
        $product_category = $_POST['Pages'];
        include 'config.php';
        mysqli_query($con, "UPDATE `product_table` SET `PName`='$product_name',`PPrice`='$product_price',`PPrice2`='$product_price2',`Image`='$img_destination',`PCategory`='$product_category' WHERE Id = $id");
        header("location:index.php");
    }
    ?>


</body>

</html>