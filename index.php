<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="ana.css">
    <title>Home</title>
</head>
<body >
    
<!--navbar-->
<div>
 <nav class="navbar navbar-expand-lg navbar-dark " style="padding-top: 30px; padding-bottom: 1px; background-color: black;" id="navbar">
    <div class="container">
        <!-- Logo & Name -->
        <div class="row justify-content-center align-items-center" style="margin-left: auto; margin-right: auto; width: 50%;">
            <div class="col-lg-12 text-center mb-3 mb-lg-0">
                <a class="navbar-brand" href="index.php">
                    <img src="GarageClassic (2).png" height="70" width="auto" alt="Classic Garage Logo">
                </a>
                <span class="ms-1" style="color: aliceblue; font-size :large;">CLASSIC-GARAGE</span>
            </div>
        </div>
    </div>
 </nav>

 <nav class="navbar navbar-expand-lg navbar-dark " style="padding-top: 1px; background-color: black" id="navbar" >
    <div class="container">
         <!--links-->
        <div class="d-block w-100" >
                <ul class="navbar-nav d-flex justify-content-center align-items-center pt-3 " style="margin-left: auto; margin-right: auto; width: 50%;">
                    <li class="nav-item mx-2">
                        <a class="nav-link active " href="index.php">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link " href="products.php">Products</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="service.php">Service</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link " href="contact.php">Contact</a>
                    </li>
                </ul>
        </div> 
    </div>
 </nav>

</div>



<!--header-->
<header class="position-relative text-center text-white mb-5" style="background-color: black;">
        <img src="N1.png" class="w-80" alt="no pic">
        <div class="position-absolute top-50 start-50 translate-middle-x w-60 px-3">
            <h1 class="display-5">CLASSIC CARS</h1>
            <a href="products.php" class="btn btn-outline-dark">let's explore!</a>
        </div>
    </header>
<div class="container position-relative text-center">
   

<!--cards-->
<div class="contaner-cards">
 <h2 class="display-6 text-center my-5">Explore</h2>
    <div class="d-flex justify-content-center flex-wrap" id="explore">

        <div class="card m-2" style="width: 19rem;"> <!-- SINGLE CRD -->
            <a href="products.php">
                <img class="card-img-top" src="1955 Mercedes-Benz 300SL Gullwing_6078.png" alt="no pic">
            </a>
            <div class="card-body">
                <p class="card-text fw-bold">1955 Mercedes-Benz 300SL Gullwing_6078</p>
                <small class="text-secondary">from USD 36.999$</small>
                <a href="products.php" class="btn btn-light">See More!</a>
            </div>
        </div>

        <div class="card m-2" style="width: 19rem;"> <!-- SINGLE CRD -->
        <a href="products.php">
            <img class="card-img-top" src="1973 Porsche 911 - 911 Targa 2.4 T.png" alt="1973 Porsche 911 - 911 Targa 2.4 T">
        </a>
        <div class="card-body">
            <p class="card-text fw-bold">1973 Porsche 911 - 911 Targa 2.4 T</p>
            <small class="text-secondary">from USD 70,000</small>
                <a href="&" class="btn btn-light disabled ">Sold Out</a>
            </div>
        </div>

        <div class="card m-2" style="width: 19rem;"> <!-- SINGLE CRD -->
        <a href="products.php">
            <img class="card-img-top" src="1963 Mercedes-Benz S-Class W111112.png" alt="1963 Mercedes-Benz S-Class W111112">
        </a>
        <div class="card-body">
            <p class="card-text fw-bold">1963 Mercedes-Benz S-Class W111112</p>
            <small class="text-secondary">from USD 70,000</small>
                <a href="&" class="btn btn-light disabled ">Sold Out</a>
            </div>
        </div>

    </div>
</div>

<!--text img-->
<div class="container-text-img">
    <div class="row text-start align-items-center my-5  mx-5">
        <div class="col-12 col-md-6">
            <img src="index1.png" class="d-block img-fluid mx-auto" style="width: 490px;" alt="Vintage">
        </div>
        <div class="col-12 col-md-6">
            <h2 class="display-4" style="font: 30px;">Vintage</h2>
            <p>Step into a world of vintage charm at Vintage Treasures. Our curated selection features only the most unique and timeless pieces from automotive history. Each car tells a story of craftsmanship, elegance, and unmatched style. Explore our showroom for rare finds that capture the essence of a bygone era.</p>
        </div>
    </div>

    <div class="row text-start align-items-center my-5 mx-5">
        <div class="col-12 col-md-6">
            <h2 class="display-4" style="font:30px;">Classic</h2>
            <p>Experience the timeless allure of classic cars at Classic Beauty. Our collection showcases exquisite vehicles with sleek lines and iconic silhouettes. Celebrate the artistry and elegance of vintage automobiles with us, where every ride is a journey through automotive perfection.</p>
        </div>
        <div class="col-12 col-md-6">
            <img src="index2.png" class="d-block img-fluid mx-auto" style="width: 490px;" alt="Classic">
        </div>
    </div>
</div>


<!--contact button-->
<section class="my-5 text-center py-5" id="contactButton" style="margin-left: auto; margin-right: auto; width: 50%;">
    <h2>Contact Us</h2>
    <a href="contact.php" class="btn btn-light">Click here to fill the contact form</a>
</section>






<!--footer-->
<footer class="footer" style="background-color: black; margin: 0 ;padding : 0">
    <div class="d-flex justify-content-between my-5 text-start flex-wrap">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="index.php" class="nav-link text-muted">
                    <img src="GarageClassic.png" height="150" alt="Classic Garage Logo">
                </a>
            </li>
            <li class="fw-bold nav-item">
                <p class="nav-link text-light mt-3">
                © 2024 Copyright Classic Garage, designed with love by Zayneb LAMRAIKI 
                </p>
            </li>
        </ul>
        <ul class="nav flex-column">
            <li class="fw-bold nav-item">
               <a href="#" class="nav-link text-light">Pages</a>
            </li>
            <li class="nav-item">
               <a href="index.php" class="nav-link text-light">Home</a>
            </li>
            <li class="nav-item">
               <a href="products.php" class="nav-link text-light">Products</a>
            </li>
            <li class="nav-item">
               <a href="service.php" class="nav-link text-light">Service</a>
            </li>
            <li class="nav-item">
               <a href="contact.php" class="nav-link text-light">Contact</a>
            </li>
        </ul>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha384-vlvcdd2V5Ctza7uFKFj3BjEE7t9wiSfSH7xCjL0eGZthtVm3REwM0dmW0d2umclP" crossorigin="anonymous"></script>



<?php
?>

</body>
</html>
