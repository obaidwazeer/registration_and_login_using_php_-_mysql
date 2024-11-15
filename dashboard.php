<?php
    session_start();
    // echo 'Welcom ' . $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
    include('config.php');
    if(!isset($_SESSION['email']) &&empty($_SESSION['email'])){
        header('location:index.php');
    }

    $query = "SELECT * FROM users";
    $run = mysqli_query($conn, $query);
    if(mysqli_num_rows($run) > 0){
        $result = mysqli_fetch_assoc($run);
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="main">
        <div class="dashboard_box">
            <h2>Dashboard</h2>
            <!-- <img src="img.jpeg" alt=""> -->
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="table">
        <table>
            <thead>
                <th>Name</th>
                <th>Email</th>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name']?></td>
                    <td><?php echo $_SESSION['email']?></td>
                </tr>
            </tbody>
        </table>
    </div>
    
</body>
</html>