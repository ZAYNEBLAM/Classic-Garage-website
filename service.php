<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="ana.css">
    <title>Service</title>
</head>
<body>
    
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
                        <a class="nav-link " href="index.php">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="service.php">Service</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link " href="contact.php">Contact</a>
                    </li>
                </ul>
        </div> 
    </div>
 </nav>

</div>

<!--text img-->
<div class="container-text-img">
    <div class="row text-start align-items-center my-5  mx-5">
        <div class="col-12 col-md-6">
            <img src="S1.png" class="d-block img-fluid mx-auto" style="width: 490px;" alt="Vintage">
        </div>
        <div class="col-12 col-md-6">
            <h2 class="display-4" style="font: 30px;">Our Company</h2>
            <p>For 17 years, our company has been a beacon in the vintage automobile world. Our dedication to preserving classic cars' legacy has fueled our journey, marked by passion, expertise, and unwavering commitment.</p>
        </div>
    </div>

    <div class="row text-start align-items-center my-5 mx-5">
        <div class="col-12 col-md-6">
            <h2 class="display-4" style="font:30px;">Quality Above All</h2>
            <p>Quality is our promise. Each product undergoes rigorous inspection, ensuring only the finest, most unique pieces reach our showroom. Craftsmanship, authenticity, and style define our curated selection.</p>
        </div>
        <div class="col-12 col-md-6">
            <img src="S3.png" class="d-block img-fluid mx-auto" style="width: 490px;" alt="Classic">
        </div>
    </div>

    <div class="row text-start align-items-center my-5  mx-5">
        <div class="col-12 col-md-6">
            <img src="service2.png" class="d-block img-fluid mx-auto" style="width: 490px;" alt="Vintage">
        </div>
        <div class="col-12 col-md-6">
            <h2 class="display-4" style="font: 30px;">Building Trust</h2>
            <p>Trust is our cornerstone. Our commitment to honesty and reliability has earned the loyalty of countless clients. We prioritize your satisfaction, ensuring every interaction exceeds expectations.</p>
        </div>
    </div>
</div>

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
