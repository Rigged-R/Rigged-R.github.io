<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$stmt = $con->prepare('SELECT email FROM accounts WHERE id = ?');

$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result( $email);
$stmt->fetch();
$stmt->close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c624c06a61.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Profile</title>
</head>
<body>
    <nav class="navtop">
            <div>
				<h1>Website Title</h1>
                <a href="home.php"><i class="fa-solid fa-house-blank"></i>Home</a>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
    </nav>
    <div class="content">
        <h2>Profile</h2>
        <div>
            <p>Your account details:</p>
            <table>
                <tr>
                    <td>Username: </td>
                    <td><?=$_SESSION['name']?></td>
                </tr>

                <tr>
                <td>Email: </td>
                    <td><?=$email?></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>