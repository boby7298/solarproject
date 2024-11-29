
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Geocodes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  </head>
<?php 

// Start session if needed
// session_start();

// Include PHPMailer
require("PHPMailer-master/src/PHPMailer.php");
require("PHPMailer-master/src/SMTP.php");

// Database connection details
$servername = "localhost"; // Keep this as 'localhost' for Hostinger
$username = "u388973650_solarpanel"; // Your database username
$password = "4!&KN^tA"; // Your database password
$database = "u388973650_solarpanel"; // Your database name

// Connection to PHP My Admin (MySQL)
$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
  die("Error detected: " . mysqli_connect_error());
} else {
  echo "connection successful";
}

?>
