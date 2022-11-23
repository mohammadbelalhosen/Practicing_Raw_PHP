<!-- -----------session start--------- -->

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <!-- -------------internal css for styling---------- -->

  <style>
    .submition {
      /* background-color: aqua; */
      width: 40%;
      margin: auto;
    }

    input {
      width: 100%;
      box-sizing: border-box;
      margin-top: 10px;
    }

    #btn {
      background-color: aqua;
      border: 1px solid black;
      border-radius: 3px;
      padding: 8px 0;
    }

    span {
      color: red;
      font-size: 12px;
    }

  </style>
</head>

<body>
  <div class="submition">
    <form action="./controller/authentication.php" method="post">
      <div class="first">
        <label>Email</label>
        <br />
        <input type="email" name="email" value="<?= isset($_SESSION['oldData']['email']) ? $_SESSION['oldData']['email'] : '' ?>" />

<!-- ---------php----------- -->

        <?php
        if (isset($_SESSION['mistaks']['email'])) {
        ?>
          <span>
            <?php

            echo $_SESSION['mistaks']['email']
            ?>
          </span>
        <?php
        }
        ?>

      </div>
      <div class="first">
        <label>User Name</label>
        <br />
        <input type="text" name="userName" value="<?= isset($_SESSION['oldData']['userName']) ? $_SESSION['oldData']['userName'] : '' ?>" />
       
<!-- ---------php----------- -->
       
       <?php
        if (isset($_SESSION['mistaks']['userName'])) {
        ?>
          <span>
            <?php

            echo $_SESSION['mistaks']['userName']
            ?>
          </span>
        <?php
        }
        ?>

      </div>
      <div class="first">
        <label>Password</label>
        <br />
        <input type="password" name="pass" value="<?= isset($_SESSION['oldData']['pass']) ? $_SESSION['oldData']['pass'] : '' ?>" />

<!-- ---------php----------- -->

        <?php
        if (isset($_SESSION['mistaks']['pass'])) {
        ?>
          <span>
            <?php

            echo $_SESSION['mistaks']['pass']
            ?>
          </span>
        <?php
        }
        ?>
      </div>
      <input type="submit" id="btn" name="login" value="Login" />
    </form>
  </div>
</body>

</html>

<!-- ---------session end--------- -->

<?php

session_unset();

?>