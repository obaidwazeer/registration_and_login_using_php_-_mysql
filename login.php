<?php
    session_start();
    header('location:index.php');
    include 'config.php';
    if(!empty($_POST)){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $run = mysqli_query($conn, $query);
        if(mysqli_num_rows($run) > 0){
            $user = mysqli_fetch_assoc($run);
            
                $_SESSION['email'] = $user['email'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['last_name'] = $user['last_name'];
                header('location:dashboard.php');
                exit();
            
        }else{
            $_SESSION['invalidUser'] = 'Invalid User';
            // echo 'User not found';
        }
        
    }
    
?>