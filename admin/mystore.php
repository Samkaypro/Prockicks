<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6b8867038c.js" crossorigin="anonymous"></script>
</head>
<?php
session_start();

if(!$_SESSION['admin']){
    header("location:form/login.php");//if the admin is not correct then it will redirecet to login.php

}


?>
<body>
  <!-- Navbar create gareko awastha -->
<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white">Prokicks</a>
   <span>
   <i class="fa-solid fa-user-secret"></i>
   Hello,<?php echo $_SESSION['admin'];?>
   <i class="fa-solid fa-right-from-bracket"></i>
   <a href="form/logout.php"class="text-decoration-none text-danger"><strong>Logout</strong></a>
   <a href="../index.php"class="text-decoration-none text-info"><strong>Userpanel</strong></a>

   </span>
  </div>
</nav>

<div>
  <h2 class="text-center">Dashboard</h2>
</div>
<div class="col-md-6 bg-danger text-center m-auto ">
<a href="product/index.php"class="text-white text-decoration-none fs-4 fw-bold px-5">Upload a Sneaker</a>
</div>


</body>
</html>