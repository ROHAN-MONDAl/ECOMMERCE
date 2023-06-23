<?php session_start();
$_SESSION['aemailid'] = "";
include('../production/serverfile.php');
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

  <title>Login #8</title>
</head>

<body>



  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
                <h3>Sign In to <strong>Colorlib</strong></h3>
                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
              </div>

              <form method="post">
                <div class="form-group first">
                  <label for="username">Email address</label>
                  <input type="text" name="emailid" class="form-control" id="username" required>

                </div>
                <div class="form-group last mb-4">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password" required>
                </div>

                <div class="d-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked" />
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                </div>

                <input type="submit" value="Log In" name="LogIn" class="btn text-white btn-block btn-primary">

                <span class="d-block text-left my-4 text-muted"> or sign in with</span>
                <div class="social-login">
                  <a href="#" class="facebook">
                    <span class="icon-facebook mr-3"></span>
                  </a>
                  <a href="#" class="twitter">
                    <span class="icon-twitter mr-3"></span>
                  </a>
                  <a href="#" class="google">
                    <span class="icon-google mr-3"></span>
                  </a>
                </div>
              </form>

              <?php
              if (isset($_POST['LogIn'])) {
                $emailid = $_POST["emailid"];
                $password = $_POST["password"];
                $result = mysqli_query($con, "select * from usersdata where emailid='$emailid' AND password='$password'");
                $row_count = mysqli_num_rows($result);
                if ($row_count == 1) {
                  $_SESSION["aemailid"] = $emailid;
                  echo "<script>alert('Log in sucesssfull');window.location.href='../production/add_users_details.php';</script>";
                } else {
                  echo "<script>alert('Login failed');</script>";
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>