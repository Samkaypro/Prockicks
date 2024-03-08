<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prokicks | Home</title>
     <!-- ===== CSS ===== -->
     <!--<link rel="stylesheet" href="assets/css/style.css" />-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<!-- ===== BOX ICONS ===== -->
<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />

    <?php
        include 'header.php';

    ?>
</head>
<body>

<main class="l-main">
        <!--===== HOME =====-->

        <section class="home" id="home">
    <div class="home__container bd-grid">
        <div class="home__sneaker animate__animated animate__fadeInRight">
            <div class="home__shape"></div>
            <img src="./assets/images/imghome.png" alt="" class="home__img" />
        </div>

        <div class="home__data ">
            <span class="home__new animate__animated animate__fadeInLeft">New In</span>
            <h1 class="home__title  animate__animated animate__fadeInLeft animate__delay-1.5s">YEEZY BOOST <br />SPLY - 350</h1>
            <p class="home__description animate__animated animate__fadeInLeft animate__delay-600ms">
                Explore the new collections of sneakers
            </p>
            <a href="./views/store.php" class="button animate__animated animate__fadeInLeft animate__delay-1s">Explore</a>
        </div>
    </div>
</section>

 <!--===== FEATURED =====-->
 <section class="featured section" id="featured">
            <h2 class="section-title">FEATURED</h2>
            <?php
    include './database/config.php';
    $query = "SELECT * FROM product_table ORDER BY RAND() LIMIT 6";
    $Record = mysqli_query($con, $query);

    while($row = mysqli_fetch_array($Record)){
        
        echo "<div class='sam'>";
        echo "
        <div class='featured-container'>
            <article class='sneaker animate__animated animate__fadeInUp animate__delay-500ms'>
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
        

    ?>

</section>

<!--=====SLIDES =====-->
<section class="featured section" id="featured">
            <h2 class="section-title">SLIDES</h2>
            <?php
    include './database/config.php';
    $Record = mysqli_query($con, "SELECT * FROM product_table WHERE PCategory='slides' ORDER BY RAND() LIMIT 4");

    while($row = mysqli_fetch_array($Record)){

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
    ?>

</section>

<!--===== SHOES =====-->
<section class='featured section' id='featured'>
            <h2 class='section-title'>SHOES</h2>
            <?php
    include './database/config.php';
    $Record = mysqli_query($con, "SELECT * FROM product_table WHERE PCategory='shoes' ORDER BY RAND() LIMIT 4");

    while($row = mysqli_fetch_array($Record)){

            echo "
            <div class='featured__container bd-grid'>
                <article class='sneaker'>
                    <img src='./admin/product/$row[Image]' class='sneaker__img' />
                    <span class='sneaker__name'>$row[PName]</span>
                    <span class='sneaker__preci'>₦$row[PPrice]</span>
                    <span class='sneaker__preci2'>₦$row[PPrice2]</span>
                    <a href='#' class='button-light'>Add to Cart <i class='bx bx-right-arrow-alt button-icon'></i></a>
                </article>
            </div>  "  ;
        }

    ?>

</section>

<!--=====SLIDES =====-->
<section class='featured section' id='featured'>
            <h2 class='section-title'>LUXURY</h2>
            <?php
    include './database/config.php';
    $Record = mysqli_query($con, "SELECT * FROM product_table WHERE PCategory='luxury' ORDER BY RAND() LIMIT 6");

    while($row = mysqli_fetch_array($Record)){

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
    ?>

</section>

<!--<section class="newsletter section">
            <div class="newsletter__container bd-grid">
                <div>
                    <h3 class="newsletter__title">Subcribe And Get <br> 10% OFF</h3>
                    <p class="newsletter__description">Get 10% discount for all product</p>
                </div>

                <form action="./newsletter.php" class="newsletter__subscribe">
                    <input type="text" placeholder="abc@gmail.com" class="newsletter__input">
                    <a href="#" class="button" value="submit">Subcribe</a>
                </form>
            </div>
        </section>-->
    </main>

<?php
include 'footer.php';
?>


   
</body>
</html>