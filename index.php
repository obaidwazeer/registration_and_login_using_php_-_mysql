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
    <title>Login Page</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>
<body>
    <div>
        <h1>Login</h1>
    </div>
        <?php if(isset($_SESSION['invalidUser'])){?>
            <div class="crossBox">
                <div class="invalidUser"><?php echo $_SESSION['invalidUser']?></div>
                <div class="cross"><a href="cross.php">X</a></div>
            </div>
            

        <?php }?>
    <form action="login.php" class="form" method="POST">
        <div class="box">
                <div class="input_login">
                    <!-- <label for="" class="label">Email</label> <br> -->
                    <input type="text" name="email" class="input_box" placeholder="Email">
                </div>
                <div class="input_login">
                    <!-- <label for="" class="label">Password</label> <br> -->
                    <input type="password" name="password" class="input_box" placeholder="password">
                </div>
                <div class="input">
                    <button type="submit" class="submit_button">Login</button>
                    <button class="submit_button"><a href="registration.php" >Register</a></button>
                </div>
        </div>
            
    </form>
</body>
</html>
</body>
</html>