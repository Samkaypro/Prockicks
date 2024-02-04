<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'mystore.php';
    $con = mysqli_connect('localhost', 'root', '', 'prokicks_sneakers');
    $Record = mysqli_query($con, "SELECT * FROM `tbluser` ");
    $row_count = mysqli_num_rows($Record);
        ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10">
                
    <table class="table table-secondary table-bordered">
        <thead class="text-center">
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Delete</th>
        </thead>

        <tbody class="text-center text-danger">
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($Record)) {
                echo "
            <tr>
            <td>";?><?php echo ++$i; ?> <?php echo "</td>
            <td>$row[UserName]</td>
            <td>$row[Email]</td>
             <td>$row[Number]</td>
 
            <td> <a href='delete.php? ID=$row[Id]' class = 'btn btn-outline-danger'</a> Delete </td>
        </tr>
            ";
            }
            ?>



        </tbody>
    </table>

    </div>
        
            
    
    <div class="col-md-2 pr-5 text-center">
        <h3 class="text-danger">Total</h3>
        <h1 class="bg-danger text-white"><?php echo$row_count;?></h1>

    </div>
    </div>
    </div>    

</body>

</html>