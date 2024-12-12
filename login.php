<?php
session_start();


$correct_username = 'admin';
$correct_password = 'admin';

 
if (isset($_POST['submit'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    if ($username == $correct_username && $password == $correct_password) {
       
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        header('Location: dashboard.php');
        exit;
    } else {
       
        $error_message = 'Invalid username or password!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>
    
    <?php
   
    if (isset($error_message)) {
        echo '<p style="color:red;">' . $error_message . '</p>';
    }
    ?>

    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>
