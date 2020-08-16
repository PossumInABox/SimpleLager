<?php

include_once("access.php");

function check_password($username, $password) {

    if ($db = mysqli_connect(DB['server'], DB['user'], DB['password'], DB['database'])) {

        if ($checkUserQuery = mysqli_prepare($db, 'SELECT password FROM user WHERE username = ?')) {

            $checkUserQuery->bind_param('s', $username);
            $checkUserQuery->execute();
            $checkUserQuery->store_result();

            if ($checkUserQuery->num_rows > 0) {
                $checkUserQuery->bind_result($password_db);
                $checkUserQuery->fetch();

                if (password_verify($password, $password_db)) {
                    mysqli_close($db);
                    return true;
                }


            } else {
                mysqli_close($db);
                return false;
            }

        } else {
            mysqli_close($db);
            return false;
        }

    }

    return false;

}

function login($username) {

    $_SESSION['user'] = [
        "name" => $username,
        "loggedin" => true,
        "role" => "root"
    ];

}

?>