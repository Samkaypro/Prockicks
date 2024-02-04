<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prokicks | Women</title>
    <?php
        include './header.php';

    ?>
</head>
<body>
    <!--===== FEATURED =====-->
 <section class='featured section' id='featured'>
            <h2 class='section-title'>WOMEN SNEAKERS</h2>
            <?php
    include '../database/config.php';
    $Record = mysqli_query($con,"select * from product_table");
    while($row=mysqli_fetch_array($Record)){
        $check_page = $row['PCategory']; //to specify the category
        if(  $check_page ==='woman'){

            echo "<div class='den'>";
            echo "
            <div class='featured-container'>
                <article class='sneaker'>
                    <img src='./admin/product/$row[Image]' class='sneaker__img' />
                    <span class='sneaker__name'>$row[PName]</span>
                    <span class='sneaker__preci'>₦$row[PPrice]</span>
                    <span class='sneaker__preci2'>₦$row[PPrice2]</span>
                    <a href='#' class='button-light'>Add to Cart <i class='bx bx-right-arrow-alt button-icon'></i></a>
                </article>
            </div>  "  ;
            echo "</div";
        }
    }


    ?>
      <?php
        include './footer.php';

    ?>
    

</section>
    </body>
    </html>