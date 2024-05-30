<?php
if (isset($_POST["email"]) && isset($_POST['password'])) {
    include 'dbconnect.php';
    $email = $_POST['email'];
    $pass = sha1($_POST['password']);

    $sqllogin = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$pass'";
    $stmt = $conn->prepare($sqllogin);
    $stmt->execute();
    $number_of_rows = $stmt->fetchColumn();
    if ($number_of_rows > 0) {
        session_start();
        $_SESSION["email"] = $email;
        echo "<script>alert('Login Success')</script>";
        echo "<script>window.location.href = 'homepage.php'</script>";
    } else {
        echo "<script>alert('Login Failed')</script>";
        echo "<script>window.location.href = 'login.php'</script>";
    }
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
    <script src="scripts/login.js"></script>
    <title>Clinic</title>
</head>
<style>
    body {
        background: url('image/login.jpg') no-repeat;
        background-size: cover;
    }

    @media (max-width: 1024px) {
        body {
            background: url('image/login_small.jpg') no-repeat;
            background-size: cover;
        }

        .w3-half {
            width: 100% !important;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 32px;
        }

        .w3-card {
            width: 100%;
            margin: 16px;
        }
    }

    a:hover {
            color: red;
        }
</style>

<body>
    <header>
        <h1 style="font-family: 'Poetsen One'; text-align: center; margin-top: 30px;">HealWell Clinic</h1>
        <p style="text-align: center;">Where Your Wellness Begins</p>
    </header>

    <div style="min-height:100vh;overflow-y: auto;">
        <div class="w3-container w3-half w3-padding-16 w3-hide-small"></div>
        <div class="w3-container w3-half w3-padding-16">
            <div class="w3-container w3-padding-64">
                <div class="w3-card w3-round" style="max-width: 500px; margin:auto">
                    <div class="w3-container w3-grey" style="max-width: 500px;">
                        <h3 style="text-align: center;">Login</h3>
                    </div>
                    <form name=loginForm class="w3-container w3-light-grey" action="login.php" method="POST">
                        <p>
                        <form name="loginForm" class="w3-container" action="login.php" method="post">
                            <p>
                                <label class="w3-text-black"><b>Email</b></label>
                                <input class="w3-input w3-border w3-round" name="email" type="email" id="idemail" required>
                            </p>
                            <p>
                                <label class="w3-text-black"><b>Password</b></label>
                                <input class="w3-input w3-border w3-round" name="password" type="password" id="idpass" required>
                            </p>
                            <p>
                                <input class="w3-check" type="checkbox" id="idremember" onclick="rememberMe()">
                                <label>Remember Me</label>
                            </p>
                            <p>
                                <button class="w3-btn w3-round w3-grey w3-block" style="max-width: 400px; margin:auto" name="submit">Login</button>
                            </p>
                            <p>
                                Don't have an account? <a href="register.php" style="max-width: 100px;">Sign Up</a>
                            </p>
                        </form>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="w3-container w3-center" style="font-family: 'Oswald';">
        <p>Copyright HealWell Clinic &copy</p>
    </footer>
</body>

</html>