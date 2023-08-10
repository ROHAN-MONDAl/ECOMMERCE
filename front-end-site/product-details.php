<?php session_start();
include('../production/serverfile.php');
$euseremail = $_SESSION["uemailid"];
$querytop = "select * from euserdata where euseremail='$euseremail'";
$restop = mysqli_query($con, $querytop);
$rowtop = mysqli_fetch_assoc($restop);
$pid = $_GET['item'];
$cid = $_GET['cid'];
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
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</head>

<body>
    <!--================Menu Area =================-->
    <header class="shop_header_area carousel_menu_area">
        <div class="carousel_menu_inner">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>

                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Home <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="home-carousel.php">Home Carousel</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Shop <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="categories-grid-left-sidebar.php">Product Grid</a></li>
                                    <li class="nav-item"><a class="nav-link" href="shopping-cart.php">Shopping Cart</a></li>
                                    <li class="nav-item"><a class="nav-link" href="empty-cart.html">Empty Cart</a></li>
                                </ul>
                            </li>

                            <?php
                            $queryselect = "select * from euserdata where euseremail='$euseremail'";
                            $res = mysqli_query($con, $queryselect);
                            while ($row = mysqli_fetch_assoc($res)) {
                            ?>
                                <li class="nav-item"><a class="nav-link" href="contact.html"><?php echo $row['eusername']; ?></a></li>
                            <?php
                            }
                            ?>





                        </ul>
                        <ul class="navbar-nav justify-content-end">

                            <div>
                                <?php
                                if (empty($_SESSION['uemailid'])) {

                                ?>
                                    <button type="button" class="btn btn-primary"><a href="../user_login/signin.php" style="color:white;">Log in</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php
                                } else {
                                ?>
                                    <li class="user_icon"><a href="../user_login/index.php"><i class="icon-user icons"></i></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php
                                }
                                ?>
                            </div>
                            <li class="cart_cart"><a href="../front-end-site/shopping-cart.php"><i class="icon-handbag icons"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--================End Menu Area =================-->

    <!--================Categories Banner Area =================-->
    <section class="categories_banner_area">
        <div class="container">
            <div class="c_banner_inner">
                <h3>Fashion</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li class="current"><a href="product-details2.html">Clothing</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Categories Banner Area =================-->

    <!--================Product Details Area =================-->
    <section class="product_details_area">
        <div class="container">

            <div class="row">
                <div class="col-lg-5">
                    <div class="product_details_slider">
                        <div id="product_slider2" class="rev_slider" data-version="5.3.1.6">

                            <ul> <!-- SLIDE  -->
                                <?php
                                $c = 1;
                                $queryimage1 = "select * from addimage where cid='$cid'";
                                $resimage1 = mysqli_query($con, $queryimage1);
                                while ($row1 = mysqli_fetch_assoc($resimage1)) {

                                    if ($c == 1) {
                                ?>

                                        <li data-index="rs-<?php echo $c; ?>" data-transition="scaledownfromleft" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="../production/dataimage/<?php echo $row1['image']; ?>" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Umbrella" data-param1="September 7, 2015" data-param2="Alfon Much, The Precious Stones" data-description="">
                                            <!-- MAIN IMAGE -->
                                            <img src="../production/dataimage/<?php echo $row1['image']; ?>" alt="" width="1920" height="1080" data-lazyload="../production/dataimage/<?php echo $row1['image']; ?>" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                            <!-- LAYERS -->
                                        </li>
                                    <?php
                                    } else {
                                    ?>
                                        <li data-index="rs-<?php echo $c; ?>" data-transition="scaledownfromleft" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="../production/dataimage/<?php echo $row1['image']; ?>" data-rotate="0" data-saveperformance="off" data-title="The Dreaming Girl" data-param1="September 6, 2015" data-param2="Lol" data-description="">
                                            <!-- MAIN IMAGE -->
                                            <img src="../production/dataimage/<?php echo $row1['image']; ?>" alt="" width="1920" height="1080" data-lazyload="../production/dataimage/<?php echo $row1['image']; ?>" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                            <!-- LAYERS -->
                                        </li>

                                <?php
                                    }
                                    $c++;
                                }
                                ?>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="product_details_text">
                        <?php
                        $queryselect = "select * from product where id='$pid'";
                        $res = mysqli_query($con, $queryselect);
                        $row = mysqli_fetch_assoc($res);
                        ?>
                        <h3><?php echo $row['name']; ?></h3>
                        <?php

                        ?>
                        <ul class="p_rating">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                        </ul>
                        <div class="add_review">
                            <?php
                            $queryselect = "select * from ratings  where pid='$pid'";
                            $res = mysqli_query($con, $queryselect);
                            $row = mysqli_fetch_assoc($res);
                            ?>
                            <a><?php echo $row['ratings']; ?></a>
                            <a href="#">5 Reviews</a>
                            <!-- <a href="#">Add your review</a> -->
                        </div>
                        <h6>Available In <span>Stock</span></h6>





                        <?php
                        $queryselect = "select * from product where id='$pid'";
                        $res = mysqli_query($con, $queryselect);
                        $row = mysqli_fetch_assoc($res);
                        ?>
                        <h4><?php echo $row['productprice']; ?></h4>
                        <p><?php echo $row['pdes']; ?></p>
                        <div class="p_color">
                            <h4 class="p_d_title">color <span>*</span></h4>
                            <ul class="color_list">
                                <?php
                                $querycolor = "select * from addcolor where pid='$pid'";
                                $rescolor = mysqli_query($con, $querycolor);
                                while ($rowcolor = mysqli_fetch_assoc($rescolor)) {
                                    $cid1 = $rowcolor['id'];
                                    $queryimage = "select * from addimage where cid='$cid1' limit 1";
                                    $resimage = mysqli_query($con, $queryimage);
                                    $rowimage = mysqli_fetch_assoc($resimage);
                                ?>
                                    <a href="product-details.php?item=<?php echo $pid; ?>&cid=<?php echo $cid1; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $rowcolor['color']; ?>"><img src="../production/dataimage/<?php echo $rowimage['image']; ?>" alt="" width="50px" height="50px"></a>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>

                        <form method="POST">
                            <?php
                            $queryselect = "select * from psize where pid='$pid'";
                            $res = mysqli_query($con, $queryselect);
                            $rc1 = mysqli_num_rows($res);
                            if ($rc1 > 0) {
                            ?>
                                <div class="p_color">
                                    <h4 class="p_d_title">Size<span>*</span></h4>

                                    <select class="selectpicker" name="psize" required>
                                        <option value="">Select your size</option>
                                        <?php

                                        while ($row = mysqli_fetch_assoc($res)) {
                                        ?>
                                            <option value="<?php echo $row['productsize']; ?>"><?php echo $row['productsize']; ?></option>
                                        <?php

                                        }
                                        ?>
                                    </select>
                                </div>
                            <?php
                            }
                            ?>

                            <?php
                            $queryselect = "select * from capacity where pid='$pid'";
                            $res = mysqli_query($con, $queryselect);
                            $rc2 = mysqli_num_rows($res);
                            if ($rc2 > 0) {
                            ?>
                                <div class="p_color">
                                    <h4 class="p_d_title">capacity<span>*</span></h4>

                                    <select class="selectpicker" name="capacity" required>
                                        <option value="">Select capacity</option>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($res)) {
                                        ?>
                                            <option value="<?php echo $row['capacity']; ?>"><?php echo $row['capacity']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>

                                </div>
                            <?php
                            }
                            ?>

                            <br>
                            <input type="hidden" name="quantity" value="1">
                            <button type="submit" class="add_cart_btn" name="Add_Cart">Add to cart</button>

                            <?php
                            if (isset($_POST['Add_Cart'])) {

                                $customerid = $euseremail;
                                $productid = $pid;
                                $colorid = $cid;
                                $quantity = $_POST['quantity'];

                                if ($rc1 > 0) {

                                    $productsize = $_POST['psize'];
                                } else {
                                    $productsize = "NA";
                                }

                                if ($rc2 > 0) {
                                    $capacity = $_POST['capacity'];
                                } else {
                                    $capacity = "NA";
                                }

                                $query = "insert into cart values('','$customerid','$productid','$colorid','$quantity','$productsize','$capacity')";
                                if (mysqli_query($con, $query)) {
                                    echo "<script>alert('inserted');</script>";
                                } else {
                                    echo "<script>alert('not inserted');</script>";
                                }
                            }
                            ?>

                        </form>


                        <div class="shareing_icon">
                            <h5>share :</h5>
                            <ul>
                                <li><a href="#"><i class="social_facebook"></i></a></li>
                                <li><a href="#"><i class="social_twitter"></i></a></li>
                                <li><a href="#"><i class="social_pinterest"></i></a></li>
                                <li><a href="#"><i class="social_instagram"></i></a></li>
                                <li><a href="#"><i class="social_youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Product Details Area =================-->

    <!--================Product Description Area =================-->
    <section class="product_description_area">
        <div class="container">
            <nav class="tab_menu">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Product Specification</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Reviews</a>
                    <!-- <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Tags</a> -->
                    <a class="nav-item nav-link" id="nav-info-tab" data-toggle="tab" href="#nav-info" role="tab" aria-controls="nav-info" aria-selected="false">additional information</a>
                    <a class="nav-item nav-link" id="nav-gur-tab" data-toggle="tab" href="#nav-gur" role="tab" aria-controls="nav-gur" aria-selected="false">Product Dimension</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <?php
                $queryselect = "select * from product where id='$pid'";
                $res = mysqli_query($con, $queryselect);
                while ($row = mysqli_fetch_assoc($res)) {
                ?>
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <p><?php echo $row['pspecs']; ?></p>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <h4>Rocky Ahmed</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                        </ul>
                    </div>
                    <!-- <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <p><?php echo $row['pdes']; ?></p>
                </div> -->
                    <div class="tab-pane fade" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                        <p><?php echo $row['phigh']; ?></p>
                    </div>
                    <div class="tab-pane fade" id="nav-gur" role="tabpanel" aria-labelledby="nav-gur-tab">
                        <p><?php echo $row['pdimen']; ?></p>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!--================End Product Details Area =================-->

    <!--================End Related Product Area =================-->
    <section class="related_product_area">
        <div class="container">
            <div class="related_product_inner">
                <h2 class="single_c_title">Related Product</h2>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="l_product_item">
                            <div class="l_p_img">
                                <img class="img-fluid" src="img/product/related-product/r-product-1.jpg" alt="">
                            </div>
                            <div class="l_p_text">
                                <ul>
                                    <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                    <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                    <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                </ul>
                                <h4>Run Tracksuit</h4>
                                <h5>$85.50</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="l_product_item">
                            <div class="l_p_img">
                                <img class="img-fluid" src="img/product/related-product/r-product-2.jpg" alt="">
                                <h5 class="new">New</h5>
                            </div>
                            <div class="l_p_text">
                                <ul>
                                    <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                    <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                    <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                </ul>
                                <h4>Nike Men Trouser</h4>
                                <h5><del>$130.50</del> $110</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="l_product_item">
                            <div class="l_p_img">
                                <img class="img-fluid" src="img/product/related-product/r-product-3.jpg" alt="">
                            </div>
                            <div class="l_p_text">
                                <ul>
                                    <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                    <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                    <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                </ul>
                                <h4>Nike Track Pants</h4>
                                <h5>$250.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="l_product_item">
                            <div class="l_p_img">
                                <img class="img-fluid" src="img/product/related-product/r-product-4.jpg" alt="">
                                <h5 class="sale">Sale</h5>
                            </div>
                            <div class="l_p_text">
                                <ul>
                                    <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                    <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                    <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                </ul>
                                <h4>Therma Pants</h4>
                                <h5>$45.50</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example" class="pagination_area">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item next"><a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!--================End Related Product Area =================-->

    <!--================Footer Area =================-->
    <footer class="footer_area">
        <div class="container">
            <div class="footer_widgets">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-6">
                        <aside class="f_widget f_about_widget">
                            <img src="img/logo.png" alt="">
                            <p>Persuit is a Premium PSD Template. Best choice for your online store. Let purchase it to enjoy now</p>
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
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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