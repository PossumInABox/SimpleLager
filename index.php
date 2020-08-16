<?php
session_start();
include_once('functions.php');

if (isset($_SESSION['user'])) {
    header('Location: ./dashboard.php');
    exit();
}

if (isset($_POST['username']) && isset($_POST['password'])) {

    if (check_password($_POST['username'], $_POST['password'])) {

        // login successful, start session
        login($_POST['username']);
        header('Location: ./dashboard.php');
        exit();
    } else {
        echo '<span style="color:red">Wrong username/password</span>';
    }

} else {
    session_destroy();
}

?>

<html>
<head>
    <title>Lager: Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<section class="loginbox">
    <h1>Lager</h1>
    <form action="" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="Login">
    </form>
</section>

</body>




</html>