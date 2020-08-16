<?php
session_start();
if (!(isset($_SESSION['user']))) {

    session_destroy();
    header('Location: ./index.php');
    exit();
}

?>

<html>
<head>
    <title>Lager: Main</title>
</head>

<body>
<h1>Willkommen</h1>
<p>
    <?php
    var_dump($_SESSION);
    ?>
</p>

<a href="logout.php">Logout</a>
</body>
</html>
