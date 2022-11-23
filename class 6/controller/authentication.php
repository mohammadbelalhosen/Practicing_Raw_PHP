<?php

$_REQUEST = $_POST;

    if ($_REQUEST["userName"]) {
        if ($_REQUEST["pass"]) {
            echo "Welcome your Dashboard";
            echo "<br>";
            echo "Your Username is : " . $_REQUEST["userName"];
            echo "<br>";
            echo "Your Encrypted pass is: %s", password_hash($_REQUEST["pass"], PASSWORD_BCRYPT);
        } else {
            echo "Your password is invalid";
        }
    } else {
        echo "Your User Name is Invalid";
    }
