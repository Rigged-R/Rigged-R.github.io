<?php
session_start();

if(!isset($_SESSION['loggedin'])){
    header('Location: index.html');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
	<script src="https://kit.fontawesome.com/c624c06a61.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
    <div class="loggedin">
        <nav class="navtop">
            <div>
                <h1>Website</h1>
                <a href="home.php"><i class="fas fa-house-blank"></i>Home</a>
                <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
        </nav>
        <div class="content">
            <h2>Home Page</h2>
            <p>Welcome back, <span><?=$_SESSION['name']?>!</span></p>
        </div>

        
    </div>
</body>

</html>