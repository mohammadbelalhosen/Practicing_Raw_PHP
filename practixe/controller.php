<?php
session_start();
include 'env.php';
$request = $_GET;

$title = $request['title'];
$details = $request['details'];

if (isset($_GET['submitted'])) {
    $errror =  [];
    if (empty($title)) {
        $errror['title'] = "plz insert title";
    }
    if (empty($details)) {
        $errror['details'] = "plz insert details";
    }


    //   print_r(count($errror));
    //   exit;
    if (count($errror) > 0) {
        $_SESSION['error'] = $errror;

        header("Location:simple_post.php");
    } else {
        $query = "INSERT INTO postcollect( title, details) VALUES ('$title','$details')";
        $ex = mysqli_query($conn, $query);
        header('Location: all_post.php');
        $_SESSION['alert'] = "Your Post Submitted!";
    }
} else {
    echo "fillup";
}
