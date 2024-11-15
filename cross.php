<?php
    session_start();

    unset($_SESSION['invalidUser']);
    header('location:index.php');
?>