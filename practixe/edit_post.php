<?php
session_start();
$id = $_GET['id'];
// print_r($id);

include'env.php';

$query = "SELECT * FROM postcollect WHERE id=$id";
$exute = mysqli_query($conn,$query);
$post = mysqli_fetch_assoc($exute);

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
    <form action="edit_controller.php" method="get">
        <input type="hidden" name ='id' value="<?=$id?>">
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Edit Post Title</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Edit Post Title" value="<?=$post['title']?>" name="title" />

        <?php
        if (isset($_SESSION["error"]['title'])) {
        ?>
          <span class="text-danger">
            <?php echo $_SESSION['error']['title'] ?>
          </span>
        <?php
        }
        ?>

      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Edit Details</label>
        <textarea class="form-control" name="details" id="" cols="30" rows="10"><?=$post['details']?></textarea>
        <?php
        if (isset($_SESSION["error"]['details'])) {
        ?>
          <span class="text-danger">
            <?php echo $_SESSION['error']['details'] ?>
          </span>
        <?php
        }
        ?>
      </div>

      <div class="mb-3">
        <button name="updatted" type="submit" class="btn btn-primary w-100">Update</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
<?php
session_unset();
?>