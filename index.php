<?php

include_once('functions.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
    if (check_password($_POST['username'], $_POST['password'])) {

        // login successful, start session
        header('Location: ./dashboard.php');

    }
}

?>

<html>
<head>
    <title>Lager: Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Lager</h1>

<form action="" method="post">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit" value="Login">
</form>

</body>




</html>