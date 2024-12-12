<?php
session_start();


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome to the Dashboard, <?php echo $_SESSION['username']; ?>!</h2>
    <p>This is a secure page only accessible after logging in.</p>

    <a href="logout.php">Logout</a>
</body>
</html>
