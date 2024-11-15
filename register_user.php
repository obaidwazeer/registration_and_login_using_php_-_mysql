<?php
    session_start();
    include('config.php');
    if(!empty($_POST)){
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // $hashPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users(first_name, last_name, email, password) 
        VALUES('$fname', '$lname', '$email', '$password')";

        $run = mysqli_query($conn, $query);
        if(!$run){
            echo 'Failed to insert data, please try again';
        }else{
            header('location:index.php');
        }
    }
?>