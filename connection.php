<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "website1"; // Nom de la base de données MySQL

// Établir la connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier la connexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>   