<?php 
$_SESSION['uemailid'] = "";
include('../production/serverfile.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>

                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="eusername" id="name" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="euseremail" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="euserpassword" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="euserepassword" id="re_pass" placeholder="Repeat your password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>

                        </form>

                        <?php

                        if (isset($_POST['signup'])) {

                            $eusername = $_POST['eusername'];
                            $euseremail = $_POST['euseremail'];
                            $euserpassword = $_POST['euserpassword'];
                            $euserepassword = $_POST['euserepassword'];

                            if ($euserpassword == $euserepassword) {

                                $queryexist = "select * from euserdata where euseremail='$euseremail'";
                                $res = mysqli_query($con, $queryexist);
                                $rc = mysqli_num_rows($res);

                                if ($rc == 0) {
                                    $query = "insert into euserdata values('','$eusername','$euseremail','$euserpassword','$euserepassword')";
                                    if (mysqli_query($con, $query)) {
                                        echo "<script>alert('inserted');</script>";
                                    } else {
                                        echo "<script>alert('not inserted');</script>";
                                    }
                                } else {
                                    echo "<script>alert('already exist');</script>";
                                }
                                echo "";
                            } else {
                                echo "<script>alert('Passwords not match');</script>";
                            }
                        }
                        ?>

                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="signin.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->


    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>