<?php
session_start();
if (!isset($_SESSION["email"]) && !isset($_SESSION["password"])) {
    echo "<script>alert('Please Login')</script>";
    echo "<script>window.location.href = 'login.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Poetsen+One&display=swap"> 
    <title>Clinic</title>
</head>
<style>
    

</style>
<body>
<header class="w3-container w3-center w3-padding w3-light-blue">
        <h1 style="font-family: 'Poetsen One';">HealWell Clinic</h1>
        <p>Where Your Wellness Begins</p>
    </header>
    <div class="w3-bar w3-blue-grey">
        <a href="logout.php" class="w3-bar-item w3-button w3-right">Logout</a>
        <a href="" class="w3-bar-item w3-button w3-left">Home</a>
        <a href="" class="w3-bar-item w3-button w3-left">About us</a>
        <a href="" class="w3-bar-item w3-button w3-left">Appointment</a>
    </div>
    <div style="min-height:100vh;overflow-y: auto;">
    <div class="w3-container w3-row w3-card w3-margin" id="about">
            <h3>About US</h3>
            <div class="w3-container w3-third w3-padding w3-hide-small  w3-center">
                <img src="image/aboutus.jpg" style="height: 100%; max-width: 100%;">
            </div>
            <div class="w3-container w3-twothird">
                <p style="text-align: justify;"> Hello !! Welcome to HealWell Clinic, Where Your Wellness Begins. 
                </p>
            </div>
        </div>

    </div>
    <footer class=" w3-container w3-center w3-light-blue" style="font-family: 'Oswald';">
        <p>Copyright HealWell Clinic &copy</p>
    </footer>
</body>
</html>