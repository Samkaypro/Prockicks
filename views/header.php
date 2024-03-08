<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="../assets/css/style.css"/>

    <!-- ===== BOX ICONS ===== -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />

    <title>Prokicks</title>

    <?php
    session_start();
  ?>
</head>

<body>
  
            <!--===== HEADER =====-->
    <header class="l-header" id="header">
        <nav class="nav bd-grid">
            <div class="nav__toggle" id="nav-toggle">
                <i class="bx bxs-grid"></i>
            </div>

            <a href="#" class="nav__logo">PROKICKS</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="../index.php" class="nav__link active">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="./luxury.php" class="nav__link">Luxury</a>
                    </li>
                    <li class="nav__item">
                        <a href="./men.php" class="nav__link">Men Sneakers</a>
                    </li>
                    <li class="nav__item">
                        <a href="./women.php" class="nav__link">Women Sneakers</a>
                    </li>
                    <li class="nav__item">
                        <a href="./slides.php" class="nav__link">Slides</a>
                    </li>
                    <li class="nav__item">
                        <a href="./shoes.php" class="nav__link">Shoes</a>
                    </li> <li class="nav__item">
                        <a href="./store.php" class="nav__link">Store</a>
                    </li>
                </ul>
            </div>

            <div class="nav__shop">
                <a href="../bag.php"><i class="bx bx-shopping-bag"></i></a>
            </div>
        </nav>
    </header>
   

    <!--link of javascript file-->
    <script src="../assets/js/main.js"></script>
</body>

</html>