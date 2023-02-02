<?php

session_start();

$id = $_GET['id'];
// print_r($id);
include'env.php';
$delete = "DELETE FROM postcollect WHERE id ='$id'";
$query = mysqli_query($conn,$delete);

header("Location:all_post.php");
$_SESSION['delete'] = "Post Deletted";