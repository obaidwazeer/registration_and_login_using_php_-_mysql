<?php
    session_start();
    if(isset($_SESSION['email'])){
        header('location:dashboard.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Registration Page</title>
</head>
<body>
    <div>
        <h1>Registration Form</h1>
    </div>
    <form action="register_user.php" method="POST" class="form" enctype='multipart/formdata'>
        <div class="box">
                <div class="input">
                    <label for="" class="label">First Name</label> <br>
                    <input type="text" name="first_name" class="input_box" placeholder="First Name" >
                </div>
                <div class="input">
                    <label for="" class="label">Last Name</label> <br>
                    <input type="text" name="last_name" class="input_box" placeholder="Last Name" >
                </div>
                <div class="input">
                    <label for="" class="label">Email</label> <br>
                    <input type="text" name="email" class="input_box" placeholder="Email" >
                </div>
                <div class="input">
                    <label for="" class="label">Password</label> <br>
                    <input type="password" name="password" class="input_box" placeholder="password" >
                </div>
                <div class="input">
                    <input type="submit" class="submit_button">
                    <button class="submit_button"><a href="index.php">Login</a></button>
                </div>
        </div>
            
    </form>
</body>
</html>