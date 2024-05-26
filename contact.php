
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="ana.css">
    <title>About us</title>
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
                        <a class="nav-link" href="service.php">Service</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="contact.php">Contact</a>
                    </li>
                </ul>
        </div> 
    </div>
 </nav>

</div>

<div class="container position-relative text-center mt-4">
    <h1>Contact Us</h1>
    <p>We do our best to respond within one working day.<br> Need help? Fill in the form below as soon as you can !</p>
</div>

<!-- Contact form -->
<div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" placeholder="First Name" id="firstName" name="firstName">
                </div> 
                <div class="col">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name" id="lastName" name="lastName">
                </div>
            </div>
            <input type="hidden" name="formType" value="contact">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="AAAAAA@gmail.com" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="model">Model</label>
                <select class="form-control" name="model">
                    <option selected>1955 Mercedes-Benz 300SL Gullwing_6078</option>
                    <option>1988 Rolls-Royce Corniche II - II</option>
                    <option>1996 Rover Mini - Cooper 1.3 MPI</option>
                    <option>2009 Land Rover Defender - LAND ROVER DEFENDER 110 SW EDITION</option>
                    <option>1966 Porsche 911 - R</option>
                    <option>1955 Ford Thunderbird - Convertible</option>
                    <option>1980 VW Kombi - Karmann Safari</option>
                    <option>1973 Porsche 911 - 911 Targa 2.4 T</option>
                    <option>1972 Alfa Romeo Tipo 33 - 4th Place OA at Le Mans 1972</option>
                    <option>1952 Jaguar C-Type </option>
                    <option>1963 Mercedes-Benz S-Class W111112</option>
                    <option>1964 Shelby 289 Cobra</option>
                    <option>1964 Jaguar E-Type SI</option>
                    <option>1975 Chevrolet Caprice Classic Convertible</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Question</label>
                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
            </div>
            <div class="form-group mt-3">
                <input class="btn btn-secondary" type="submit" name="contactSubmit" value="Submit" >
            </div>
        </div>
    </form>
</div>
<?php
if (isset($_POST['formType']) && $_POST['formType'] === 'contact') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $model = $_POST['model'];
    $message = $_POST['message']; 
    
    echo '<div class="text-center border border-top-0">';
    echo "Welcome <strong>$firstName $lastName </strong>! <br>";
    echo "Thank you for choosing to deal with us. Your trust means the world to us.<br> ";
    if (isset($model)) { 
        echo "You mentioned your interest in <strong>$model</strong>.<br> ";
    }
    if (!empty($message)) { 
        echo "We'll get back to you with an answer to your question as soon as possible.<br>";
    }
    echo "We'll be reaching out to you via email at <strong>$email</strong> to continue the process seamlessly.<br>";
    echo "Once again, thank you for choosing us. We're excited to assist you further.<br>";
    echo "Best regards,<br>";
    echo "Our Company ";
    echo '</div>'; 

    $sql = "INSERT INTO client (firstName, lastname, email, model, message)
             VALUES ('$firstName', '$lastName', '$email', '$model', '$message')";
    mysqli_query($conn, $sql);

    mysqli_close($conn);

}
?>

<br>
<h2 class="text-center">Or</h2>
<div class="container position-relative text-center mt-4">
    <h1>Contact Seller</h1>
    <p>If you are interested in a specific product,<br> please feel free to contact the seller to discuss the selling process.<br></p>
</div>

<!-- Seller contact form -->
<div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="firstNameS">First Name</label>
                    <input type="text" class="form-control" placeholder="First Name" id="firstNameS" name="firstNameS">
                </div> 
                <div class="col">
                    <label for="lastNameS">Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name" id="lastNameS" name="lastNameS">
                </div>
            </div>
            <input type="hidden" name="formType" value="seller">
            <div class="form-group">
                <label for="emailS">Email</label>
                <input type="email" class="form-control" placeholder="AAAAAA@gmail.com" id="emailS" name="emailS">
            </div>
            <div class="form-group">
                <label for="model">Model</label>
                <select class="form-control" name="model">
                    <option selected>1955 Mercedes-Benz 300SL Gullwing_6078</option>
                    <option>1988 Rolls-Royce Corniche II - II</option>
                    <option>1996 Rover Mini - Cooper 1.3 MPI</option>
                    <option>2009 Land Rover Defender - LAND ROVER DEFENDER 110 SW EDITION</option>
                    <option>1966 Porsche 911 - R</option>
                    <option>1955 Ford Thunderbird - Convertible</option>
                    <option>1980 VW Kombi - Karmann Safari</option>
                    <option>1973 Porsche 911 - 911 Targa 2.4 T</option>
                    <option>1972 Alfa Romeo Tipo 33 - 4th Place OA at Le Mans 1972</option>
                    <option>1952 Jaguar C-Type </option>
                    <option>1963 Mercedes-Benz S-Class W111112</option>
                    <option>1964 Shelby 289 Cobra</option>
                    <option>1964 Jaguar E-Type SI</option>
                    <option>1975 Chevrolet Caprice Classic Convertible</option>
                </select>
            </div>
            <div class="form-group">
                <label for="messageS">Question</label>
                <textarea class="form-control" id="messageS" name="messageS" rows="3" ></textarea>
            </div>
            <div class="form-group mt-3">
                <input class="btn btn-secondary" type="submit" name="sellerSubmit" value="Submit" >
            </div>
        </div>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['formType']) && $_POST['formType'] === 'seller') {
        $firstNameS = $_POST['firstNameS'];
        $lastNameS = $_POST['lastNameS'];
        $emailS = $_POST['emailS'];
        $modelS = $_POST['modelS'];
        $messageS = $_POST['messageS']; 
        
        echo '<div class="text-center border border-top-0">';
        echo "Hello <strong>$firstNameS $lastNameS </strong>! <br>";
        echo "Thank you for choosing to deal with us. Your trust means the world to us.<br> ";
        if (isset($modelS)) { 
            echo "I see you are interested in my <strong>$modelS </strong>. <br>";
        }
        if (!empty($messageS)) { 
            echo "We'll get back to you with an answer to your question as soon as possible.<br>";
        }
        echo "I've received your information and your questions, and I will contact you at your email <strong>$emailS</strong> as soon as possible to discuss the selling process. <br>";
        echo "Best regards,<br>";
        echo "The seller ";
        echo '</div>'; 
    } 
}
?>


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



</body>
</html>
