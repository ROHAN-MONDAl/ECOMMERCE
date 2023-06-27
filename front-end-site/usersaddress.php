<?php session_start();
include( '../production/serverfile.php' );
$euseremail = $_SESSION[ 'uemailid' ];
$querytop = "select * from euserdata where euseremail='$euseremail'";
$restop = mysqli_query( $con, $querytop );
$rowtop = mysqli_fetch_assoc( $restop );
?>
<!DOCTYPE html>
<html lang = 'en'>

<head>
<meta charset = 'utf-8'>
<meta http-equiv = 'X-UA-Compatible' content = 'IE=edge'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1'>

<link rel = 'icon' href = 'img/fav-icon.png' type = 'image/x-icon' />
<!-- The above 3 meta tags *must* come first in the head;
any other head content must come *after* these tags -->
<title>Persuit</title>

<!-- Icon css link -->
<link href = 'css/font-awesome.min.css' rel = 'stylesheet'>
<link href = 'vendors/line-icon/css/simple-line-icons.css' rel = 'stylesheet'>
<link href = 'vendors/elegant-icon/style.css' rel = 'stylesheet'>
<!-- Bootstrap -->
<link href = 'css/bootstrap.min.css' rel = 'stylesheet'>

<!-- Rev slider css -->
<link href = 'vendors/revolution/css/settings.css' rel = 'stylesheet'>
<link href = 'vendors/revolution/css/layers.css' rel = 'stylesheet'>
<link href = 'vendors/revolution/css/navigation.css' rel = 'stylesheet'>

<!-- Extra plugin css -->
<link href = 'vendors/owl-carousel/owl.carousel.min.css' rel = 'stylesheet'>
<link href = 'vendors/bootstrap-selector/css/bootstrap-select.min.css' rel = 'stylesheet'>
<link href = 'vendors/jquery-ui/jquery-ui.css' rel = 'stylesheet'>

<link href = 'css/style.css' rel = 'stylesheet'>
<link href = 'css/responsive.css' rel = 'stylesheet'>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <!--================Menu Area =================-->
    <header class="shop_header_area carousel_menu_area">
        <div class="carousel_menu_inner">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>

                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Home <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="home-carousel.php">Home Carousel</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Shop <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link"
                                            href="categories-grid-left-sidebar.php">Product Grid</a></li>
                                    <li class="nav-item"><a class="nav-link" href="shopping-cart.php">Shopping Cart</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="empty-cart.html">Empty Cart</a></li>
                                </ul>
                            </li>

                            <?php
                            $queryselect = "select * from euserdata where euseremail='$euseremail'";
                            $res = mysqli_query($con, $queryselect);
                            while ($row = mysqli_fetch_assoc($res)) {
                            ?>
                            <li class="nav-item"><a class="nav-link"
                                    href="contact.html"><?php echo $row['eusername']; ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                        <ul class="navbar-nav justify-content-end">

                            <div>
                                <?php
                                if (empty($_SESSION['uemailid'])) {

                                ?>
                                <button type="button" class="btn btn-primary"><a href="../user_login/signin.php"
                                        style="color:white;">Log in</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php
                                } else {
                                ?>
                                <li class="user_icon"><a href="../user_login/index.php"><i
                                            class="icon-user icons"></i></a></li>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php
                                }
                                ?>
                            </div>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--================End Menu Area =================-->








    <!--================Categories Banner Area =================-->
    <style>
    .gradient-custom {
        /* fallback for old browsers */
        background: #6a11cb;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
    }

    .gradient-custom {
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    }

    .card-custom {
        border-bottom-left-radius: 10% 50%;
        border-top-left-radius: 10% 50%;
        background-color: #f8f9fa;
    }


    .input-custom {
        background-color: white;
    }

    .white-text {
        color: hsl(52, 0%, 98%);
        font-weight: 100;
        font-size: 14px;
    }

    .back-button {
        background-color: hsl(52, 0%, 98%);
        font-weight: 700;
        color: black;
        margin-top: 50px;
    }
    </style>
    <section class=" gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">

                        <div class="row mt-3 mx-3" style="margin-top:25px ;">
                            <div class="col-md-3">
                                <div style="margin-top: 50px; margin-left: 10px;" class="text-center">
                                    <i id="animationDemo" data-mdb-animation="slide-right" data-mdb-toggle="animation"
                                        data-mdb-animation-reset="true" data-mdb-animation-start="onScroll"
                                        data-mdb-animation-on-scroll="repeat"
                                        class="fas fa-3x fa-shipping-fast text-white"></i>
                                    <h3 class="mt-3">Welcome</h3>
                                    <p class="">You are 30 seconds away from compleating your order!</p>
                                </div>
                            </div>
                            <div class="col-md-9 justify-content-center">
                                <div class="card card-custom pb-4">
                                    <div class="card-body mt-0 mx-5">

                                        <form class="mb-0" method="post">

                                            <div class="row mb-4">
                                                <div class="col">
                                                    <div class="form-outline">
                                                        <input type="text" name="fullname" id="form9Example1"
                                                            class="form-control input-custom" required />
                                                        <label class="form-label" for="form9Example1">Full Name</label>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="form-outline">
                                                        <input type="tel" name="phoneno" id="form9Example2"
                                                            class="form-control input-custom" placeholder="123-456-789"
                                                            required />
                                                        <label class="form-label" for="form9Example2">Phone
                                                            Number</label>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row mb-4">
                                                <div class="col">
                                                    <div class="form-outline">
                                                        <input type="text" name="city" id="form9Example3"
                                                            class="form-control input-custom" required />
                                                        <label class="form-label" for="form9Example3">City</label>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="form-outline">
                                                        <input type="text" name="zipcode" id="form9Example4"
                                                            class="form-control input-custom" required />
                                                        <label class="form-label" for="form9Example4">Zip Code</label>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row mb-4">
                                                <div class="col">
                                                    <div class="form-outline">
                                                        <input type="text" name="address" id="form9Example6"
                                                            class="form-control input-custom" required />
                                                        <label class="form-label" for="form9Example6">Address</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="float-end ">
                                                <!-- Submit button -->
                                                <button type="submit" name="submit" class="btn btn-primary btn-rounded"
                                                    style="background-color: #0062CC ;">Add Address</button>
                                                <!-- /Submit button -->
                                            </div>
                                        </form>

                                        <?php
                                                if (isset($_POST['submit'])) {

                                                    $customerid = $euseremail;
                                                    $fullname = $_POST['fullname'];
                                                    $phoneno = $_POST['phoneno'];
                                                    $city = $_POST['city'];
                                                    $zipcode = $_POST['zipcode'];
                                                    $address = $_POST['address'];

                                                    $query = "insert into location values('','$customerid','$fullname','$phoneno','$city','$zipcode','$address')";
                                                    if (mysqli_query($con, $query)) {
                                                        echo "<script>alert('inserted');window.location.href='../front-end-site/shopping-cart.php?>';
                                                </script>";
                                                } else {
                                                echo "<script>
                                                alert('not inserted');
                                                </script>";
                                                }
                                                }
                                                ?>

                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!--================End Shopping Cart Area =================-->

    <!--================Footer Area =================-->
    <footer class="footer_area">
        <div class="container">
            <div class="footer_widgets">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-6">
                        <aside class="f_widget f_about_widget">
                            <img src="img/logo.png" alt="">
                            <p>Persuit is a Premium PSD Template. Best choice for your online store. Let purchase it to
                                enjoy now</p>
                            <h6>Social:</h6>
                            <ul>
                                <li><a href="#"><i class="social_facebook"></i></a></li>
                                <li><a href="#"><i class="social_twitter"></i></a></li>
                                <li><a href="#"><i class="social_pinterest"></i></a></li>
                                <li><a href="#"><i class="social_instagram"></i></a></li>
                                <li><a href="#"><i class="social_youtube"></i></a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <aside class="f_widget link_widget f_info_widget">
                            <div class="f_w_title">
                                <h3>Information</h3>
                            </div>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Delivery information</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Returns & Refunds</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <aside class="f_widget link_widget f_service_widget">
                            <div class="f_w_title">
                                <h3>Customer Service</h3>
                            </div>
                            <ul>
                                <li><a href="#">My account</a></li>
                                <li><a href="#">Ordr History</a></li>
                                <li><a href="#">Wish List</a></li>
                                <li><a href="#">Newsletter</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <aside class="f_widget link_widget f_extra_widget">
                            <div class="f_w_title">
                                <h3>Extras</h3>
                            </div>
                            <ul>
                                <li><a href="#">Brands</a></li>
                                <li><a href="#">Gift Vouchers</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Specials</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <aside class="f_widget link_widget f_account_widget">
                            <div class="f_w_title">
                                <h3>My Account</h3>
                            </div>
                            <ul>
                                <li><a href="#">My account</a></li>
                                <li><a href="#">Ordr History</a></li>
                                <li><a href="#">Wish List</a></li>
                                <li><a href="#">Newsletter</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="footer_copyright">
                <h5>© <script>
                    document.write(new Date().getFullYear());
                    </script> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;
<script>
document.write( new Date().getFullYear() );
</script> All rights reserved | This template is made with <i class = 'fa fa-heart-o'
aria-hidden = 'true'></i> by <a href = 'https://colorlib.com' target = '_blank'>Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </h5>
            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->









    <!-- jQuery (necessary for Bootstrap's JavaScript plugins ) -->
<script src = 'js/jquery-3.2.1.min.js'></script>
<!-- Include all compiled plugins ( below ), or include individual files as needed -->
<script src = 'js/popper.min.js'></script>
<script src = 'js/bootstrap.min.js'></script>
<!-- Rev slider js -->
<script src = 'vendors/revolution/js/jquery.themepunch.tools.min.js'></script>
<script src = 'vendors/revolution/js/jquery.themepunch.revolution.min.js'></script>
<script src = 'vendors/revolution/js/extensions/revolution.extension.actions.min.js'></script>
<script src = 'vendors/revolution/js/extensions/revolution.extension.video.min.js'></script>
<script src = 'vendors/revolution/js/extensions/revolution.extension.slideanims.min.js'></script>
<script src = 'vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js'></script>
<script src = 'vendors/revolution/js/extensions/revolution.extension.navigation.min.js'></script>
<script src = 'vendors/revolution/js/extensions/revolution.extension.slideanims.min.js'></script>
<!-- Extra plugin css -->
<script src = 'vendors/counterup/jquery.waypoints.min.js'></script>
<script src = 'vendors/counterup/jquery.counterup.min.js'></script>
<script src = 'vendors/owl-carousel/owl.carousel.min.js'></script>
<script src = 'vendors/bootstrap-selector/js/bootstrap-select.min.js'></script>
<script src = 'vendors/image-dropdown/jquery.dd.min.js'></script>
<script src = 'js/smoothscroll.js'></script>
<script src = 'vendors/isotope/imagesloaded.pkgd.min.js'></script>
<script src = 'vendors/isotope/isotope.pkgd.min.js'></script>
<script src = 'vendors/magnify-popup/jquery.magnific-popup.min.js'></script>
<script src = 'vendors/vertical-slider/js/jQuery.verticalCarousel.js'></script>
<script src = 'vendors/jquery-ui/jquery-ui.js'></script>

<script src = 'js/theme.js'></script>
</body>

</html>