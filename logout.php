<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["user_id"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Logged Out e250e5ab</title>
    <link rel="stylesheet" href="./style_css.css/logout.css"> <!-- Link to CSS file -->
</head>
<body>
    <div class="container">
        <h1>You have been logged out </h1>
        <p>Thank you for visiting. <a href="login.php">Log in again</a> if you wish to continue.</p>
    </div>
</body>
</html>
