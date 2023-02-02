<?php
include'env.php';
if(isset($_GET['updatted'])){
    $title = $_GET['title'];
    $details = $_GET['details'];
    $id = $_GET['id'];

    $update = "UPDATE postcollect SET title= '$title',details='$details' WHERE id = '$id'";
    $exi = mysqli_query($conn,$update);
    header('Location: all_post.php');

}