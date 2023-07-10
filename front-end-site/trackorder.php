<?php session_start();
include('../production/serverfile.php');
$euseremail = $_SESSION["uemailid"];
$querytop = "select * from euserdata where euseremail='$euseremail'";
$restop = mysqli_query($con, $querytop);
$rowtop = mysqli_fetch_assoc($restop);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Persuit</title>

    <!-- Icon css link -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/line-icon/css/simple-line-icons.css" rel="stylesheet">
    <link href="vendors/elegant-icon/style.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="vendors/revolution/css/settings.css" rel="stylesheet">
    <link href="vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="vendors/revolution/css/navigation.css" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="vendors/bootstrap-selector/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendors/jquery-ui/jquery-ui.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <style>
        .card-stepper {
            z-index: 0
        }

        #progressbar-2 {
            color: #455A64;
        }

        #progressbar-2 li {
            list-style-type: none;
            font-size: 13px;
            width: 33.33%;
            float: left;
            position: relative;
        }

        #progressbar-2 #step1:before {
            content: '\f058';
            font-family: "Font Awesome 5 Free";
            color: #fff;
            width: 37px;
            margin-left: 0px;
            padding-left: 0px;
        }

        #progressbar-2 #step2:before {
            content: '\f058';
            font-family: "Font Awesome 5 Free";
            color: #fff;
            width: 37px;
        }

        #progressbar-2 #step3:before {
            content: '\f058';
            font-family: "Font Awesome 5 Free";
            color: #fff;
            width: 37px;
            margin-right: 0;
            text-align: center;
        }

        #progressbar-2 #step4:before {
            content: '\f111';
            font-family: "Font Awesome 5 Free";
            color: #fff;
            width: 37px;
            margin-right: 0;
            text-align: center;
        }

        #progressbar-2 li:before {
            line-height: 37px;
            display: block;
            font-size: 12px;
            background: #c5cae9;
            border-radius: 50%;
        }

        #progressbar-2 li:after {
            content: '';
            width: 100%;
            height: 10px;
            background: #c5cae9;
            position: absolute;
            left: 0%;
            right: 0%;
            top: 15px;
            z-index: -1;
        }

        #progressbar-2 li:nth-child(1):after {
            left: 1%;
            width: 100%
        }

        #progressbar-2 li:nth-child(2):after {
            left: 1%;
            width: 100%;
        }

        #progressbar-2 li:nth-child(3):after {
            left: 1%;
            width: 100%;
            background: #c5cae9 !important;
        }

        #progressbar-2 li:nth-child(4) {
            left: 0;
            width: 37px;
        }

        #progressbar-2 li:nth-child(4):after {
            left: 0;
            width: 0;
        }

        #progressbar-2 li.active:before,
        #progressbar-2 li.active:after {
            background: #6520ff;
        }
    </style>

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
                                    <li class="nav-item"><a class="nav-link" href="myorders.php">My Orders</a></li>
                                    <li class="nav-item"><a class="nav-link" href="trackorder.php">Track</a></li>
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
                                <li class="nav-item"><a class="nav-link" href="contact.html">
                                        <?php echo $row['eusername']; ?>
                                    </a></li>
                                <?php
                            }
                            ?>
                        </ul>
                        <ul class="navbar-nav justify-content-end">


                            <?php
                            if (empty($_SESSION['uemailid'])) {

                                ?>
                                <button type="button" class="btn btn-primary"><a href="../user_login/signin.php"
                                        style="color:white;">Log in</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php
                            } else {
                                ?>
                                <li class="user_icon"><a href="../user_login/index.php"><i class="icon-user icons"></i></a>
                                </li>
                                <li class="cart_cart"><a href="../front-end-site/shopping-cart.php"><i
                                            class="icon-handbag icons"></i></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--================End Menu Area =================-->



    <!--================ Body =================-->


    <section class="vh-100" style="background-color: #8c9eff;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-stepper text-black" style="border-radius: 16px;">

                        <div class="card-body p-5">

                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <div>
                                    <h5 class="mb-0">INVOICE <span class="text-primary font-weight-bold">#Y34XDHR</span>
                                    </h5>
                                </div>
                                <div class="text-end">
                                    <p class="mb-0">Expected Arrival <span>01/12/19</span></p>
                                    <p class="mb-0">USPS <span class="font-weight-bold">234094567242423422898</span></p>
                                </div>
                            </div>

                            <?php
                            $id = $_GET['id'];
                            $i = 0;
                            $queryt = "select * from ordertrack where billid = '$id'";
                            $queryres = mysqli_query($con, $queryt);
                            while ($rowt = mysqli_fetch_assoc($queryres)) {
                                $a[$i] = $rowt['status'];
                                $d[$i] = $rowt['orderdatetime'];
                                $i++;
                            }
                            ?>


                            <!-- <ul id="progressbar-2" class="d-flex justify-content-between mx-0 mt-0 mb-5 px-0 pt-0 pb-2">
                                <?php
                                if ($a[1] == "Order Placed") {
                                    ?>
                                    <li class="step0 active text-center" id="step1"></li>
                                    <?php
                                } else {
                                    ?>
                                    <li class="step0 text-center" id="step1"></li>
                                    <?php
                                }
                                ?>

                                <?php
                                if ($a[2] == "Order Shipped") {
                                    ?>
                                    <li class="step0 active text-center" id="step2"></li>
                                    <?php
                                } else {
                                    ?>
                                    <li class="step0 text-center" id="step2"></li>
                                    <?php
                                }
                                ?>
                                
                                
                                <?php
                                if ($a[3] == "Order Despatched") {
                                    ?>
                                    <li class="step0 active text-center" id="step3"></li>
                                <?php
                                } else {
                                    ?>
                                    <li class="step0 text-center" id="step3"></li>
                                <?php
                                }
                                ?>

                                <?php
                                if ($a[4] == "Order Delivered") {
                                    ?>
                                    <li class="step0 active text-center" id="step4"></li>
                                <?php
                                } else {
                                    ?>
                                    <li class="step0 text-center" id="step4"></li>
                                <?php
                                }
                                ?>

                            </ul> -->

                            <div class="d-flex justify-content-between">


                                <div class="d-lg-flex align-items-center">
                                    <i class="fa-3x me-lg-4 mb-3 mb-lg-0"></i>
                                    <div>
                                        <p class="fw-bold mb-1">
                                            <?php echo "Order Placed" ?>
                                            <?php echo $d[1] ?>
                                        </p>
                                    </div>
                                </div>


                                <div class="d-lg-flex align-items-center">
                                    <i class="fa-3x me-lg-4 mb-3 mb-lg-0"></i>
                                    <div>
                                        <p class="fw-bold mb-1">
                                            <?php echo "Order Shipped" ?>
                                            <?php echo $d[2] ?>
                                        </p>

                                    </div>
                                </div>


                                <div class="d-lg-flex align-items-center">
                                    <i class="fa-3x me-lg-4 mb-3 mb-lg-0"></i>
                                    <div>
                                        <p class="fw-bold mb-1">
                                            <?php echo "Order Despatched" ?>
                                            <?php echo $d[3] ?>
                                        </p>

                                    </div>
                                </div>


                                <div class="d-lg-flex align-items-center">
                                    <i class=" fa-3x me-lg-4 mb-3 mb-lg-0"></i>
                                    <div>
                                        <p class="fw-bold mb-1">
                                            <?php echo "Order Delivered" ?>
                                            <?php echo $d[4] ?>
                                        </p>
                                    </div>
                                </div>


                            </div>





                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================ Body =================-->

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
                <h5>©
                    <script>
                        document.write(new Date().getFullYear());
                    </script> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </h5>
            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->









    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Rev slider js -->
    <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <!-- Extra plugin css -->
    <script src="vendors/counterup/jquery.waypoints.min.js"></script>
    <script src="vendors/counterup/jquery.counterup.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
    <script src="vendors/image-dropdown/jquery.dd.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendors/vertical-slider/js/jQuery.verticalCarousel.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.js"></script>

    <script src="js/theme.js"></script>
</body>

</html>