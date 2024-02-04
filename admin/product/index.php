<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Product Page</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-black mt-3">

                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-danger">Product Detail:</p>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Product Name: </label>
                        <input type="text" name="Pname" class="form-control" placeholder="Enter Product Name">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Product Price: </label>
                        <input type="text" name="Pprice" class="form-control" placeholder="Enter Product Price">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Slashed Price: </label>
                        <input type="text" name="Pprice2" class="form-control" placeholder="Enter slashed Price">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Upload Product Image </label>
                        <input type="file" name="Pimage" class="form-control" placeholder="Upload Product Image ">
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
                    <button name="submit" class="bg-danger fs-4 fw-bold my-5 form-control text-white">Upload</button>
                </form>
            </div>
        </div>
    </div>
    <!-- fetch data -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">

                <table  class="table border border-warning table-hover border my-5">

                    <thead class="bg-dark text-white fs-5 font-monospace">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        include 'config.php';
                        $Record = mysqli_query($con, "SELECT * FROM `product_table`"); //Selecting content from database
                        
                        while ($row = mysqli_fetch_array($Record)) //looping 
                        

                            //for showing data from the data base
                        
                            echo "
                <tr>
                <td>$row[Id]</td>
                <td>$row[PName]</td>
                <td>$row[PPrice]</td>
                <td><img src='$row[Image]' height= '90px' width = '200px'></td>
                <td>$row[PCategory]</td>
                <td><a href = 'delete.php? ID=$row[Id]' class = 'btn btn-danger'>Delete</a></td>
                <td><a href = 'update.php? ID=$row[Id]' class = 'btn btn-warning'>Update</a></td>

                </tr>
                ";




                        ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>