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
    <title>Lager: Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="menubar">
    <span class="mb_element">Dashboard</span>
    <div class="mb_element usertool">
        <a href="logout.php">Logout</a>
    </div>

</div>

<main>

    <h1>Willkommen</h1>
    <p>

    </p>

</main>

</body>
</html>
