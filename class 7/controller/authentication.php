<?php
session_start();

if (isset($_POST['login'])) {
    $mistaks = [];

    $request = $_POST;
    $email = $request['email'];
    $userName = $request['userName'];
    $pass = $request['pass'];


// function mistaksAlert($alert){
//      if (empty($email)) {
//         $alert =  $alert;
//        global $mistaks;
//         $mistaks['email'] = $alert;
//     }
// }

// mistaksAlert("belal");


    //for email alert

    if (empty($email)) {
        $alert =  "Plz Enter Your Email Address !";
        $mistaks['email'] = $alert;
    }

     //for Username alert

    if (empty($userName)) {
        $alert =  "Enter Your User Name !";
        $mistaks['userName'] = $alert;
    }

     //for password alert

    if (empty($pass)) {
        $alert =  "Enter Your Pass !";
        $mistaks['pass'] = $alert;
    }

    if (count($mistaks) > 0) {

        $_SESSION['mistaks'] = $mistaks;
        $_SESSION['oldData'] = $request;
        header("Location: ../class 7.php");
    } else {
        echo "Welcome To Your Account .....👍";
        // print_r($mistaks);
    }
} 