<?php
session_start();
include 'env.php';
$select = "SELECT * FROM postcollect";
$resu = mysqli_query($conn, $select);
$results = mysqli_fetch_all($resu, 1);


print_r(mysqli_num_rows($resu));
// print_r($results);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <?php
    if (isset($_SESSION['alert'])) {
    ?>
        <div class="toast show" role="alert" style="position:absolute;bottom:20px;right:20px" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded me-2" alt="...">
                <strong class="me-auto">Submit Post</strong>

                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <?= $_SESSION['alert'] ?>
            </div>
        </div>
    <?php
    }
    ?>

<?php
    if (isset($_SESSION['delete'])) {
    ?>
        <div class="toast show" role="alert" style="position:absolute;bottom:20px;right:20px" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded me-2" alt="...">
                <strong class="me-auto">Submit Post</strong>

                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <?= $_SESSION['delete'] ?>
            </div>
        </div>
    <?php
    }
    ?>


    <nav class="navbar container navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="simple_post.php">Post System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="simple_post.php">Add Post</a>
                    <a class="nav-link" href="all_post.php">All Posts</a>

                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <table class="table table-responsive">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Details</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                foreach ($results as $key => $result) {
                ?>
                    <tr>
                        <td><?= ++$key ?></td>
                        <td><?= $result['title'] ?></td>
                        <td><?= $result['details'] ?></td>
                        <td>
                            <a class="btn btn-info" href="edit_post.php?id=<?= $result['id'] ?>">Edit</a>
                            <a class="btn btn-danger" href="delete_controller.php?id=<?= $result['id'] ?>">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
                <?php
                if(mysqli_num_rows($resu) == 0){
                    ?>
                    <tr>
                    <td colspan="4"> No Record Found!!</td>
                    </tr>
                    <?php
                }
                ?>
    <!-- if(mysqli_num_rows($resu) > 0) -->

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
<?php
session_unset();
?>