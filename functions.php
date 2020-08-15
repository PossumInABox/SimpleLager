<?php

function check_password($username, $password) {

    if ($username === "root" && $password === "12345") {
        return false;
    } else {
        return true;
    }
}

?>