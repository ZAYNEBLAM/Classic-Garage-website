<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="ana.css">
    <title>Products</title>
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
                        <a class="nav-link active" href="products.php">Products</a>
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

<!--cards-->
<div class="contaner-cards">
 <h2 class="display-6 text-center my-5"></h2>
<div class="d-flex justify-content-center flex-wrap" id="explore">

    <!-- SINGLE CRD -->
    <div class="card m-2" style="width: 19rem;"> 
            <a href="products.php">
                <img class="card-img-top" src="1955 Mercedes-Benz 300SL Gullwing_6078.png" alt="no pic">
            </a>
            <div class="card-body">
                <p class="card-text fw-bold">1955 Mercedes-Benz 300SL Gullwing_6078</p>
                <small class="text-secondary">from USD 36.999$</small>
                <a href="#A" class="btn btn-light">See More!</a>
            </div>
    </div>
    <!-- SINGLE Card -->
    <div class="card m-2" style="width: 19rem;">
        <a href="products.php">
            <img class="card-img-top" src="1988 Rolls Royce Corniche II.png" alt="1988 Rolls-Royce Corniche II">
        </a>
        <div class="card-body">
            <p class="card-text fw-bold">1988 Rolls-Royce Corniche II</p>
            <small class="text-secondary">from USD 50,000</small>
            <a href="#B" class="btn btn-light">See More!</a>
        </div>
    </div>
    <!-- SINGLE Card -->
    <div class="card m-2" style="width: 19rem;">
        <a href="products.php">
            <img class="card-img-top" src="2009 Land Rover Defender - LAND ROVER DEFENDER 110 SW EDITION.png" alt="2009 Land Rover Defender - LAND ROVER DEFENDER 110 SW EDITION">
        </a>
        <div class="card-body">
            <p class="card-text fw-bold">2009 Land Rover Defender - LAND ROVER DEFENDER 110 SW EDITION</p>
            <small class="text-secondary">from USD 45,000</small>
            <a href="#C" class="btn btn-light">See More!</a>
        </div>
    </div>

    <!-- SINGLE Card -->
    <div class="card m-2" style="width: 19rem;">
        <a href="products.php">
            <img class="card-img-top" src="1966 Porsche 911 - R.png" alt="1966 Porsche 911 - R">
        </a>
        <div class="card-body">
            <p class="card-text fw-bold">1966 Porsche 911 - R</p>
            <small class="text-secondary">from USD 85,000</small>
            <a href="#D" class="btn btn-light">See More!</a>
        </div>
    </div>

    <!-- SINGLE Card -->
    <div class="card m-2" style="width: 19rem;">
        <a href="products.php">
            <img class="card-img-top" src="1955 Ford Thunderbird - Convertible.png" alt="1955 Ford Thunderbird - Convertible">
        </a>
        <div class="card-body">
            <p class="card-text fw-bold">1955 Ford Thunderbird - Convertible</p>
            <small class="text-secondary">from USD 40,000</small>
            <a href="#E" class="btn btn-light">See More!</a>
        </div>
    </div>

    <!-- SINGLE Card -->
    <div class="card m-2" style="width: 19rem;">
        <a href="products.php">
            <img class="card-img-top" src="1980 VW Kombi - Karmann Safari.png" alt="1980 VW Kombi - Karmann Safari">
        </a>
        <div class="card-body">
            <p class="card-text fw-bold">1980 VW Kombi - Karmann Safari</p>
            <small class="text-secondary">from USD 25,000</small>
            <a href="#F" class="btn btn-light">See More!</a>
        </div>
    </div>

    <!-- SINGLE Card -->
    <div class="card m-2" style="width: 19rem;">
        <a href="products.php">
            <img class="card-img-top" src="1973 Porsche 911 - 911 Targa 2.4 T.png" alt="1973 Porsche 911 - 911 Targa 2.4 T">
        </a>
        <div class="card-body">
            <p class="card-text fw-bold">1973 Porsche 911 - 911 Targa 2.4 T</p>
            <small class="text-secondary">from USD 70,000</small>
            <a href="&G" class="btn btn-light disabled ">Sold Out</a>
        </div>
    </div>

    <!-- SINGLE Card -->
    <div class="card m-2" style="width: 19rem;">
        <a href="products.php">
            <img class="card-img-top" src="1972 Alfa Romeo Tipo 33 - 4th Place OA at Le Mans 1972.png" alt="1972 Alfa Romeo Tipo 33 - 4th Place OA at Le Mans 1972">
        </a>
        <div class="card-body">
            <p class="card-text fw-bold">1972 Alfa Romeo Tipo 33 - 4th Place OA at Le Mans 1972</p>
            <small class="text-secondary">from USD 150,000</small>
            <a href="#H" class="btn btn-light">See More!</a>
        </div>
    </div>

    <!-- SINGLE Card -->
    <div class="card m-2" style="width: 19rem;">
        <a href="products.php">
            <img class="card-img-top" src="1952 Jaguar C-Type.png" alt="1952 Jaguar C-Type">
        </a>
        <div class="card-body">
            <p class="card-text fw-bold">1952 Jaguar C-Type</p>
            <small class="text-secondary">from USD 400,000</small>
            <a href="#I" class="btn btn-light">See More!</a>
        </div>
    </div>

    <!-- SINGLE Card -->
    <div class="card m-2" style="width: 19rem;">
        <a href="products.php">
            <img class="card-img-top" src="1963 Mercedes-Benz S-Class W111112.png" alt="1963 Mercedes-Benz S-Class W111112">
        </a>
        <div class="card-body">
            <p class="card-text fw-bold">1963 Mercedes-Benz S-Class W111112</p>
            <small class="text-secondary">from USD 70,000</small>
            <a href="&J" class="btn btn-light disabled ">Sold Out</a>
        </div>
    </div>

    <!-- SINGLE Card -->
    <div class="card m-2" style="width: 19rem;">
        <a href="products.php">
            <img class="card-img-top" src="1964 Shelby 289 Cobra.png" alt="1964 Shelby 289 Cobra">
        </a>
        <div class="card-body">
            <p class="card-text fw-bold">1964 Shelby 289 Cobra</p>
            <small class="text-secondary">from USD 1,000,000</small>
            <a href="#K" class="btn btn-light">See More!</a>
        </div>
    </div>

    <!-- SINGLE Card -->
    <div class="card m-2" style="width: 19rem;">
        <a href="products.php">
            <img class="card-img-top" src="1964 Jaguar E-Type SI.png" alt="1964 Jaguar E-Type SI">
        </a>
        <div class="card-body">
            <p class="card-text fw-bold">1964 Jaguar E-Type SI</p>
            <small class="text-secondary">from USD 250,000</small>
            <a href="#L" class="btn btn-light">See More!</a>
        </div>
    </div>
</div>


</div>

<br>
<br>
<h2 class="text-center">More detailed</h2>

<!--product img-->
<div class="container">


   <div class="row py-3 g-5 mx-auto my-5" id="A"><!--single product-->
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <a href="1955 Mercedes-Benz 300SL Gullwing_6078.jpeg" target="_blank">
            <img src="1955 Mercedes-Benz 300SL Gullwing_6078.png" class="m-2 w-100 sliderMainImag" data-bs-toggle="modal" data-bs-target="#imageModal" /> <!--peut changer les photos  pur tele-->
        </a>
        <div>
            <img src="1955 Mercedes-Benz 300SL Gullwing_6078.png" width="60" class="mx-3 my-0 sliderThumb">
            <img src="1955 Mercedes-Benz 300SL Gullwing_6078.png" width="60" class="mx-3 my-0 sliderThumb"> 
        </div>
    </div>
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <h2 id="producName">1955 Mercedes-Benz 300SL Gullwing_6078</h2>
        <small class="text-muted">Type: Classic</small>
        <h4 class="my-4">from USD <span id="price">36,999</span>$</h4>
        <label for="selectModel" class="text-muted">Model</label>
        <select class="form-select" name="selectModel" id="model">
            <option>Standard</option>
            <option>Deluxe</option>
        </select>
        <div class="d-grid my-4">
            <a href="contact.php" class="btn btn-lg btn-dark" type="button" id="purchaseBtn">Purchase Now</a>
        </div>
        <div class="card w-auto">
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <p class="card-text">The 1955 Mercedes-Benz 300SL Gullwing_6078 is an iconic classic car, known for its distinctive gullwing doors and timeless design. With a powerful engine and elegant styling, this car represents the pinnacle of automotive engineering from its era.</p>
            </div>
        </div>
    </div>
   </div>

   <div class="row py-3 g-5 mx-auto my-5" id="B"><!--single product-->
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <a href="1988 Rolls Royce Corniche II.png" target="_blank">
            <img src="1988 Rolls Royce Corniche II.png" class="m-2 w-100 sliderMainImag" data-bs-toggle="modal" data-bs-target="#imageModal" /> <!--peut changer les photos  pur tele-->
        </a>
        <div>
            <img src="1988 Rolls Royce Corniche II.png" width="60" class="mx-3 my-0 sliderThumb">
            <img src="1988 Rolls Royce Corniche II.png" width="60" class="mx-3 my-0 sliderThumb"> 
        </div>
    </div>
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <h2 id="producName">1988 Rolls-Royce Corniche II</h2>
        <small class="text-muted">Type: Luxury</small>
        <h4 class="my-4"> from USD <span id="price">50,000</span>$</h4>
        <label for="selectModel" class="text-muted">Model</label>
        <select class="form-select" name="selectModel" id="model">
            <option>First Addition</option>
            <option>Black Series</option>
            <option>Luxury Line</option>
            <option>Business Line</option>
        </select>
        <div class="d-grid my-4">
            <a href="contact.php" class="btn btn-lg btn-dark " type="button" id="purchaseBtn">Purchase Now</a>
        </div>
        <div class="card w-auto">
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <p class="card-text">The 1988 Rolls-Royce Corniche II is a classic luxury car known for its elegance and refinement. It features a powerful engine and luxurious interior, making it an icon of automotive excellence.</p>
            </div>
        </div>
    </div>
</div>


<div class="row py-3 g-5 mx-auto my-5" id="C"><!--single product-->
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <a href="2009 Land Rover Defender - LAND ROVER DEFENDER 110 SW EDITION.png" target="_blank">
            <img src="2009 Land Rover Defender - LAND ROVER DEFENDER 110 SW EDITION.png" class="m-2 w-100 sliderMainImag" data-bs-toggle="modal" data-bs-target="#imageModal" /> <!--peut changer les photos  pur tele-->
        </a>
        <div>
            <img src="2009 Land Rover Defender - LAND ROVER DEFENDER 110 SW EDITION.png" width="60" class="mx-3 my-0 sliderThumb">
            <img src="2009 Land Rover Defender - LAND ROVER DEFENDER 110 SW EDITION.png" width="60" class="mx-3 my-0 sliderThumb"> 
        </div>
    </div>
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <h2 id="producName">2009 Land Rover Defender - LAND ROVER DEFENDER 110 SW EDITION</h2>
        <small class="text-muted">Type: SUV</small>
        <h4 class="my-4"> from USD <span id="price">45,000</span>$</h4>
        <label for="selectModel" class="text-muted">Model</label>
        <select class="form-select" name="selectModel" id="model">
            <option>SW Edition</option>
            <option>Special Edition</option>
        </select>
        <div class="d-grid my-4">
            <a href="contact.php" class="btn btn-lg btn-dark " type="button" id="purchaseBtn">Purchase Now</a>
        </div>
        <div class="card w-auto">
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <p class="card-text">The 2009 Land Rover Defender - LAND ROVER DEFENDER 110 SW EDITION is a rugged and capable SUV, built to tackle tough terrain with ease. With its iconic design and reliable performance, it's the perfect vehicle for off-road adventures.</p>
            </div>
        </div>
    </div>
</div>


<div class="row py-3 g-5 mx-auto my-5" id="D"><!--single product-->
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <a href="1966 Porsche 911 - R.png" target="_blank">
            <img src="1966 Porsche 911 - R.png" class="m-2 w-100 sliderMainImag" data-bs-toggle="modal" data-bs-target="#imageModal" /> <!--peut changer les photos  pur tele-->
        </a>
        <div>
            <img src="1966 Porsche 911 - R.png" width="60" class="mx-3 my-0 sliderThumb">
            <img src="1966 Porsche 911 - R.png" width="60" class="mx-3 my-0 sliderThumb"> 
        </div>
    </div>
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <h2 id="producName">1966 Porsche 911 - R</h2>
        <small class="text-muted">Type: Sports Car</small>
        <h4 class="my-4"> from USD <span id="price">85,000</span>$</h4>
        <label for="selectModel" class="text-muted">Model</label>
        <select class="form-select" name="selectModel" id="model">
            <option>R Edition</option>
            <option>Special Edition</option>
        </select>
        <div class="d-grid my-4">
            <a href="contact.php" class="btn btn-lg btn-dark " type="button" id="purchaseBtn">Purchase Now</a>
        </div>
        <div class="card w-auto">
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
    </div>
</div>


<div class="row py-3 g-5 mx-auto my-5" id="E"><!--single product-->
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <a href="1955 Ford Thunderbird - Convertible.png" target="_blank">
            <img src="1955 Ford Thunderbird - Convertible.png" class="m-2 w-100 sliderMainImag" data-bs-toggle="modal" data-bs-target="#imageModal" /> <!--peut changer les photos  pur tele-->
        </a>
        <div>
            <img src="1955 Ford Thunderbird - Convertible.png" width="60" class="mx-3 my-0 sliderThumb">
            <img src="1955 Ford Thunderbird - Convertible.png" width="60" class="mx-3 my-0 sliderThumb"> 
        </div>
    </div>
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <h2 id="producName">1955 Ford Thunderbird - Convertible</h2>
        <small class="text-muted">Type: Classic Car</small>
        <h4 class="my-4"> from USD <span id="price">40,000</span>$</h4>
        <label for="selectModel" class="text-muted">Model</label>
        <select class="form-select" name="selectModel" id="model">
            <option>Convertible Edition</option>
            <option>Classic Edition</option>
        </select>
        <div class="d-grid my-4">
            <a href="contact.php" class="btn btn-lg btn-dark " type="button" id="purchaseBtn">Purchase Now</a>
        </div>
        <div class="card w-auto">
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
    </div>
</div>


<div class="row py-3 g-5 mx-auto my-5" id="F"><!--single product-->
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <a href="1980 VW Kombi - Karmann Safari.png" target="_blank">
            <img src="1980 VW Kombi - Karmann Safari.png" class="m-2 w-100 sliderMainImag" data-bs-toggle="modal" data-bs-target="#imageModal" /> <!--peut changer les photos  pur tele-->
        </a>
        <div>
            <img src="1980 VW Kombi - Karmann Safari.png" width="60" class="mx-3 my-0 sliderThumb">
            <img src="1980 VW Kombi - Karmann Safari.png" width="60" class="mx-3 my-0 sliderThumb"> 
        </div>
    </div>
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <h2 id="producName">1980 VW Kombi - Karmann Safari</h2>
        <small class="text-muted">Type: Vintage Van</small>
        <h4 class="my-4"> from USD <span id="price">25,000</span>$</h4>
        <label for="selectModel" class="text-muted">Model</label>
        <select class="form-select" name="selectModel" id="model">
            <option>Karmann Edition</option>
            <option>Safari Edition</option>
        </select>
        <div class="d-grid my-4">
            <a href="contact.php" class="btn btn-lg btn-dark " type="button" id="purchaseBtn">Purchase Now</a>
        </div>
        <div class="card w-auto">
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
    </div>
</div>



<div class="row py-3 g-5 mx-auto my-5" id="G" style="pointer-events : none ; color : grey ; "><!--single product-->
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <a href="1973 Porsche 911 - 911 Targa 2.4 T.png" target="_blank">
            <img src="1973 Porsche 911 - 911 Targa 2.4 T.png" class="m-2 w-100 sliderMainImag" data-bs-toggle="modal" data-bs-target="#imageModal" /> <!--peut changer les photos  pur tele-->
        </a>
        <div>
            <img src="1973 Porsche 911 - 911 Targa 2.4 T.png" width="60" class="mx-3 my-0 sliderThumb">
            <img src="1973 Porsche 911 - 911 Targa 2.4 T.png" width="60" class="mx-3 my-0 sliderThumb"> 
        </div>
    </div>
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <h2 id="producName">1973 Porsche 911 - 911 Targa 2.4 T</h2>
        <small class="text-muted">Type: Sports Car</small>
        <h4 class="my-4"> from USD <span class="text-danger"><del>70,000</del></span>$</h4>
        <label for="selectModel" class="text-muted">Model</label>
        <select class="form-select" name="selectModel" id="model">
            <option>Targa Edition</option>
            <option>911 Edition</option>
        </select>
        <div class="d-grid my-4">
            <a href="contact.php" class="btn btn-lg btn-light " type="button" id="purchaseBtn">Purchase Now</a>
        </div>
        <div class="card w-auto text-muted">
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
    </div>
</div>



<div class="row py-3 g-5 mx-auto my-5" id="H"><!--single product-->
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <a href="1972 Alfa Romeo Tipo 33 - 4th Place OA at Le Mans 1972.png" target="_blank">
            <img src="1972 Alfa Romeo Tipo 33 - 4th Place OA at Le Mans 1972.png" class="m-2 w-100 sliderMainImag" data-bs-toggle="modal" data-bs-target="#imageModal" /> <!--peut changer les photos  pur tele-->
        </a>
        <div>
            <img src="1972 Alfa Romeo Tipo 33 - 4th Place OA at Le Mans 1972.png" width="60" class="mx-3 my-0 sliderThumb">
            <img src="1972 Alfa Romeo Tipo 33 - 4th Place OA at Le Mans 1972.png" width="60" class="mx-3 my-0 sliderThumb"> 
        </div>
    </div>
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <h2 id="producName">1972 Alfa Romeo Tipo 33 - 4th Place OA at Le Mans 1972</h2>
        <small class="text-muted">Type: Racing Car</small>
        <h4 class="my-4"> from USD <span id="price">150,000</span>$</h4>
        <label for="selectModel" class="text-muted">Model</label>
        <select class="form-select" name="selectModel" id="model">
            <option>Le Mans Edition</option>
            <option>Racing Edition</option>
        </select>
        <div class="d-grid my-4">
            <a href="contact.php" class="btn btn-lg btn-dark " type="button" id="purchaseBtn">Purchase Now</a>
        </div>
        <div class="card w-auto">
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
    </div>
</div>


<div class="row py-3 g-5 mx-auto my-5" id="I"><!--single product-->
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <a href="1952 Jaguar C-Type.png" target="_blank">
            <img src="1952 Jaguar C-Type.png" class="m-2 w-100 sliderMainImag" data-bs-toggle="modal" data-bs-target="#imageModal" /> <!--peut changer les photos  pur tele-->
        </a>
        <div>
            <img src="1952 Jaguar C-Type.png" width="60" class="mx-3 my-0 sliderThumb">
            <img src="1952 Jaguar C-Type.png" width="60" class="mx-3 my-0 sliderThumb"> 
        </div>
    </div>
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <h2 id="producName">1952 Jaguar C-Type</h2>
        <small class="text-muted">Type: Classic Racing Car</small>
        <h4 class="my-4"> from USD <span id="price">400,000</span>$</h4>
        <label for="selectModel" class="text-muted">Model</label>
        <select class="form-select" name="selectModel" id="model">
            <option>Racing Edition</option>
            <option>Classic Edition</option>
        </select>
        <div class="d-grid my-4">
            <a href="contact.php" class="btn btn-lg btn-dark " type="button" id="purchaseBtn">Purchase Now</a>
        </div>
        <div class="card w-auto">
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
    </div>
</div>


<div class="row py-3 g-5 mx-auto my-5" id="J" style="pointer-events : none ; color : grey ; "><!--single product-->
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <a href="1963 Mercedes-Benz S-Class W111112.png" target="_blank">
            <img src="1963 Mercedes-Benz S-Class W111112.png" class="m-2 w-100 sliderMainImag" data-bs-toggle="modal" data-bs-target="#imageModal" /> <!--peut changer les photos  pur tele-->
        </a>
        <div>
            <img src="1963 Mercedes-Benz S-Class W111112.png" width="60" class="mx-3 my-0 sliderThumb">
            <img src="1963 Mercedes-Benz S-Class W111112.png" width="60" class="mx-3 my-0 sliderThumb"> 
        </div>
    </div>
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <h2 id="producName">1963 Mercedes-Benz S-Class W111112</h2>
        <small class="text-muted">Type: Luxury Car</small>
        <h4 class="my-4"> from USD <span class="text-danger"><del>70,000</del></span>$</h4>
        <label for="selectModel" class="text-muted">Model</label>
        <select class="form-select" name="selectModel" id="model">
            <option>Standard Edition</option>
            <option>Luxury Edition</option>
        </select>
        <div class="d-grid my-4">
            <a href="contact.php" class="btn btn-lg btn-light " type="button" id="purchaseBtn">Purchase Now</a>
        </div>
        <div class="card w-auto text-muted">
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
    </div>
</div>


<div class="row py-3 g-5 mx-auto my-5" id="K"><!--single product-->
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <a href="1964 Shelby 289 Cobra.png" target="_blank">
            <img src="1964 Shelby 289 Cobra.png" class="m-2 w-100 sliderMainImag" data-bs-toggle="modal" data-bs-target="#imageModal" /> <!--peut changer les photos  pur tele-->
        </a>
        <div>
            <img src="1964 Shelby 289 Cobra.png" width="60" class="mx-3 my-0 sliderThumb">
            <img src="1964 Shelby 289 Cobra.png" width="60" class="mx-3 my-0 sliderThumb"> 
        </div>
    </div>
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <h2 id="producName">1964 Shelby 289 Cobra</h2>
        <small class="text-muted">Type: Classic Sports Car</small>
        <h4 class="my-4"> from USD <span id="price">1,000,000</span>$</h4>
        <label for="selectModel" class="text-muted">Model</label>
        <select class="form-select" name="selectModel" id="model">
            <option>Racing Edition</option>
            <option>Classic Edition</option>
        </select>
        <div class="d-grid my-4">
            <a href="contact.php" class="btn btn-lg btn-dark " type="button" id="purchaseBtn">Purchase Now</a>
        </div>
        <div class="card w-auto">
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
    </div>
</div>


<div class="row py-3 g-5 mx-auto my-5" id="L"><!--single product-->
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <a href="1964 Jaguar E-Type SI.png" target="_blank">
            <img src="1964 Jaguar E-Type SI.png" class="m-2 w-100 sliderMainImag" data-bs-toggle="modal" data-bs-target="#imageModal" /> <!--peut changer les photos  pur tele-->
        </a>
        <div>
            <img src="1964 Jaguar E-Type SI.png" width="60" class="mx-3 my-0 sliderThumb">
            <img src="1964 Jaguar E-Type SI.png" width="60" class="mx-3 my-0 sliderThumb"> 
        </div>
    </div>
    <div class="col-12 col-lg-6 border-bottom pb-3">
        <h2 id="producName">1964 Jaguar E-Type SI</h2>
        <small class="text-muted">Type: Classic Sports Car</small>
        <h4 class="my-4"> from USD <span id="price">250,000</span>$</h4>
        <label for="selectModel" class="text-muted">Model</label>
        <select class="form-select" name="selectModel" id="model">
            <option>Standard Edition</option>
            <option>Special Edition</option>
        </select>
        <div class="d-grid my-4">
            <a href="contact.php" class="btn btn-lg btn-dark " type="button" id="purchaseBtn">Purchase Now</a>
        </div>
        <div class="card w-auto">
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
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
