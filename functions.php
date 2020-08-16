<?php

function check_password($username, $password) {

    if ($username === "root" && $password === "12345") {
        return false;
    } else {
        return true;
    }
}

function login($username) {

    $_SESSION['user'] = [
        "name" => $username,
        "loggedin" => true,
        "role" => "root"
    ];

}

?>