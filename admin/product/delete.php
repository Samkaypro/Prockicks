<?php





$Id = $_GET['ID'];
include 'config.php';
mysqli_query($con,"DELETE FROM `product_table` WHERE Id = $Id");
header("location:index.php");





?>
