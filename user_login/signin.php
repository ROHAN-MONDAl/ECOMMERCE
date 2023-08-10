<?php session_start();
$_SESSION['uemailid'] = "";
include('../production/serverfile.php');
include('google_setup.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="google-stylesheet.css">
</head>

<body>

    <div class="main">

        <!-- Sign up form -->


        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="signup.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="euseremail" id="your_name" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="euserpassword" id="your_pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>

                            
                            <div class="row">
                                <div class="col-md-12">
                                    <a class="btn btn-lg btn-google btn-block text-uppercase btn-outline" style="text-decoration: none;" href="<?php echo $google->createAuthUrl(); ?>">
                                        <img src="https://img.icons8.com/color/16/000000/google-logo.png"> SigIn Using Google</a>

                                </div>
                            </div>

                        </form>

                        <?php

                        if (isset($_POST['signin'])) {
                            $euseremail = $_POST["euseremail"];
                            $euserpassword = $_POST["euserpassword"];
                            $result = mysqli_query($con, "select * from euserdata where euseremail='$euseremail' AND euserpassword='$euserpassword'");
                            $row_count = mysqli_num_rows($result);
                            if ($row_count == 1) {
                                $_SESSION["uemailid"] = $euseremail;
                                echo "<script>alert('Log in sucesssfull');window.location.href='../front-end-site/home-carousel.php';</script>";
                            } else {
                                echo "<script>alert('Login failed');</script>";
                            }
                        }

                        ?>

                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>