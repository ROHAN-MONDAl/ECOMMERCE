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
    </style>
    <section class=" gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">My Orders</h5>
                        </div>




                        <?php
                        $queryselects = "select distinct(billid) from corder where customerid='$euseremail'";
                        $selectrack = mysqli_query($con, $queryselects);
                        while ($rowtrack = mysqli_fetch_assoc($selectrack)) {
                            ?>
                            <div>
                                <?php echo $rowtrack['billid']; ?>
                            </div>
                            <hr>
                            <br>
                            <!-- Single item -->
                            <div class="row d-flex justify-content-center my-4">

                                <?php
                                $c = 1;
                                $tot = 0;
                                $tid = $rowtrack['billid'];
                                $querycart = "select * from corder where billid='$tid'";
                                $querycart = mysqli_query($con, $querycart);
                                while ($rowcart = mysqli_fetch_assoc($querycart)) {
                                    $id = $rowcart['productid'];
                                    $queryselects = "select * from product where id='$id'";
                                    $ress = mysqli_query($con, $queryselects);
                                    $rows = mysqli_fetch_assoc($ress);
                                    $cid = $rowcart['colorid'];
                                    $queryimage = "select * from addimage where cid='$cid'";
                                    $resimage = mysqli_query($con, $queryimage);
                                    $rowimage = mysqli_fetch_assoc($resimage);

                                    $querycolor = "select * from addcolor where id='$cid'";
                                    $rescolor = mysqli_query($con, $querycolor);
                                    $rowcolor = mysqli_fetch_assoc($rescolor);



                                    $tot = $tot + (int) $rowcart['quantity'] * (int) $rows['productprice'];
                                    ?>

                                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                        <!-- Image -->
                                        <div class="bg-image hover-overlay hover-zoom ripple rounded"
                                            data-mdb-ripple-color="light">
                                            <img src="../production/dataimage/<?php echo $rowimage['image']; ?>" class="w-50" />
                                            <a href="#!">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                            </a>
                                            <br>
                                        </div>
                                        <!-- Image -->
                                    </div>


                                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                                        <tr>
                                            <!-- Data -->
                                            <p><strong>Name :
                                                    <?php echo $rows['name']; ?>
                                                </strong></p>

                                            <?php
                                            if ($rowcart['ton'] == 'NA') {
                                                ?>
                                                <p>Color:
                                                    <?php echo $rowcolor['color']; ?></strong>
                                                </p>
                                                <p>Size:
                                                    <?php echo $rowcart['productsize']; ?>
                                                </p>
                                                <?php
                                            } else {
                                                ?>
                                                <p>TON:
                                                    <?php echo $rowcart['ton']; ?>
                                                </p>

                                                <?php
                                            }
                                            ?>
                                            <!-- Data -->
                                        </tr>
                                    </div>

                                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 text-start text-md-center">
                                        <div>
                                            <div> <strong> Quantity =
                                                    <?php echo $rowcart['quantity']; ?>
                                                </strong>
                                            </div>
                                            <!-- Price -->
                                            <p class=" text-start text-md-center">
                                                <strong>Rs
                                                    <?php echo $rows['productprice']; ?>
                                                </strong>
                                            </p>
                                            <!-- Price -->
                                        </div>
                                    </div>
                                    <strong>
                                        <?php
                                        $print = $rows['productprice'] * $rowcart['quantity'];
                                        echo $print;
                                        ?>
                                    </strong>
                                    <?php
                                    $c++;

                                }
                                ?>
                            </div>
                            <div class="text-start text-md-center"><strong>Total Rs = <?php echo $tot ?></strong></div>
                            
                            <?php
                        }
                        ?>
                        <!-- Single item -->
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