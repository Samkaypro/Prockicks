<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prokicks | Shoes</title>
    <?php
        include './header.php';

    ?>
</head>
<body>
    <!--===== FEATURED =====-->
 <section class='featured section' id='featured'>
            <h2 class='section-title'>SHOES</h2>
            <?php
    include '../database/config.php';
    $Record = mysqli_query($con,"select * from product_table");
    while($row=mysqli_fetch_array($Record)){
        $check_page = $row['PCategory']; //to specify the category
        if(  $check_page ==='shoes'){

            echo "<div class='sam'>";
            echo "
            <div class='featured-container'>
                <article class='sneaker'>
                    <img src='./admin/product/$row[Image]' class='sneaker__img' />
                    <span class='sneaker__name'>$row[PName]</span>
                    <span class='sneaker__preci'>₦$row[PPrice]</span>
                    <span class='sneaker__preci2'>₦$row[PPrice2]</span>
                    
                    <form method='post' action='insertbag.php' onsubmit='showSuccessMessage(); return true;'> 
                    <input type='hidden' name='PName' value='$row[PName]' />
                    <input type='hidden' name='PPrice' value='$row[PPrice]' />
                    <input type='hidden' name='PQuantity' value='1' />
                    <button type='submit' class='button-light no-border' name='addCart'>
                        Add to Bag <i class='bx bx-right-arrow-alt button-icon'></i>
                    </button>
                </form>
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