<?php session_start();
include('../production/serverfile.php');
$euseremail = $_SESSION["uemailid"];
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
        <div class="carousel_top_header row m0">
            <div class="container">
                <div class="carousel_top_h_inner">
                    <div class="float-md-left">
                        <div class="top_header_left">
                            <div class="selector">
                                <select class="language_drop" name="countries" id="countries" style="width:300px;">
                                    <option value='yt' data-image="img/icon/flag-1.png" data-imagecss="flag yt" data-title="English">English</option>
                                    <option value='yu' data-image="img/icon/flag-1.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                                    <option value='yt' data-image="img/icon/flag-1.png" data-imagecss="flag yt" data-title="English">English</option>
                                    <option value='yu' data-image="img/icon/flag-1.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                                </select>
                            </div>
                            <select class="selectpicker usd_select">
                                <option>USD</option>
                                <option>$</option>
                                <option>$</option>
                            </select>
                        </div>
                    </div>
                    <div class="float-md-right">
                        <div class="top_header_middle">
                            <a href="#"><i class="fa fa-phone"></i> Call Us: <span>+84 987 654 321</span></a>
                            <a href="#"><i class="fa fa-envelope"></i> Email: <span>support@yourdomain.com</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                                    <li class="nav-item"><a class="nav-link" href="myorders.php">My Orders</a></li>
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


                            <?php
                            $queryaddress = "select * from location where customerid='$euseremail'";
                            $queryaddress = mysqli_query($con, $queryaddress);
                            $rowaddress = mysqli_fetch_assoc($queryaddress);
                            if ($rowaddress > 0) {
                            ?>
                                <?php
                                $querycart = "select * from cart where customerid='$euseremail'";
                                $querycart = mysqli_query($con, $querycart);
                                $rowcart = mysqli_fetch_assoc($querycart);
                                if ($rowcart > 0) {
                                ?>
                                    <li class="cart_cart"><a href="../front-end-site/shopping-cart.php"><i class="icon-handbag icons"></i></a></li>
                                <?php
                                } else {
                                ?>
                                    <li class="cart_cart"><a href="../front-end-site/empty-cart.php"><i class="icon-handbag icons"></i></a></li>
                                <?php
                                }
                                ?>
                            <?php
                            } else {
                            ?>
                                <li class="cart_cart"><a href="../front-end-site/usersaddress.php"><i class="icon-handbag icons"></i></a></li>
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

    <!--================Home Carousel Area =================-->
    <section class="home_carousel_area">
        <div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
            <div class="carousel-inner">
                <?php
                $c = 1;
                $queryselect = "select * from banner";
                $res = mysqli_query($con, $queryselect);
                while ($row = mysqli_fetch_assoc($res)) {
                    if ($c == 1) {
                ?>
                        <div class="carousel-item active">
                            <img src="../production/banner-images/<?php echo $row['bimage']; ?>" class="d-block h-75 w-100" alt="Wild Landscape" />
                        </div>

                    <?php
                    } else {
                    ?>
                        <div class="carousel-item">
                            <img src="../production/banner-images/<?php echo $row['bimage']; ?>" class="d-block h-75 w-100" alt="Camera" />
                        </div>

                <?php
                    }
                    $c++;
                }
                ?>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

    </section>
    <!--================End Home Carousel Area =================-->

    <!--================Special Offer Area =================-->
    .....
    <!--================End Special Offer Area =================-->

    <!--================Latest Product isotope Area =================-->
    <section class="fillter_latest_product">
        <div class="container">
            <div class="single_c_title">
                <h2>Our Latest Product</h2>
            </div>
            <div class="fillter_l_p_inner">

                <ul class="fillter_l_p">
                    <li class="active" data-filter="*"><a href="#">All</a></li>
                    <?php
                    $queryselect = "select * from categories";
                    $res = mysqli_query($con, $queryselect);
                    while ($row = mysqli_fetch_assoc($res)) {
                    ?>
                        <li data-filter=".<?php echo $row['names']; ?>"><a href="#"><?php echo $row['names']; ?></a></li>
                    <?php
                    }
                    ?>

                </ul>

                <div class="row isotope_l_p_inner">

                    <?php
                    $queryselects = "select * from product";
                    $ress = mysqli_query($con, $queryselects);
                    while ($rows = mysqli_fetch_assoc($ress)) {
                        $pid = $rows['id'];
                        $querycolor = "select * from addcolor where pid='$pid' limit 1";
                        $rescolor = mysqli_query($con, $querycolor);
                        $rc = mysqli_num_rows($rescolor);
                        if ($rc > 0) {
                            $rowcolor = mysqli_fetch_assoc($rescolor);
                            $cid = $rowcolor['id'];

                            $queryimage = "select * from addimage where cid='$cid' limit 1";
                            $resimage = mysqli_query($con, $queryimage);
                            $rowimage = mysqli_fetch_assoc($resimage);
                        }
                    ?>

                        <div class="col-lg-3 col-md-4 col-sm-6 <?php echo $rows['catname']; ?>">
                            <div class="l_product_item">

                                <div class="l_p_img">

                                    <a href="product-details.php?item=<?php echo $pid; ?>&cid=<?php echo $cid; ?>"><img class="img-fluid" src="../production/dataimage/<?php echo $rowimage['image']; ?>" alt=""></a>

                                </div>

                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="product-details.php?item=<?php echo $pid; ?>&cid=<?php echo $cid; ?>">Show Product</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>

                                    <h4><?php echo $rows['name']; ?></h4>

                                    <h5><?php echo $rows['productprice']; ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>
    <!--================End Latest Product isotope Area =================-->

    <!--================Product_listing Area =================-->
    <section class="product_listing_area">
        <div class="container">
            <div class="row p_listing_inner">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-6 col-sm-8">
                            <div class="p_list_text">
                                <h3>Men</h3>
                                <ul>
                                    <li><a href="#">Down Jackets</a></li>
                                    <li><a href="#">Hoodies</a></li>
                                    <li><a href="#">Suits</a></li>
                                    <li><a href="#">Jeans</a></li>
                                    <li><a href="#">Casual Pants</a></li>
                                    <li><a href="#">Sunglass</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-4">
                            <div class="p_list_img">
                                <img src="img/product/p-categories-list/product-l-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-6 col-sm-8">
                            <div class="p_list_text">
                                <h3>Women</h3>
                                <ul>
                                    <li><a href="#">Down Jackets</a></li>
                                    <li><a href="#">Hoodies</a></li>
                                    <li><a href="#">Suits</a></li>
                                    <li><a href="#">Jeans</a></li>
                                    <li><a href="#">Casual Pants</a></li>
                                    <li><a href="#">Sunglass</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-4">
                            <div class="p_list_img">
                                <img src="img/product/p-categories-list/product-l-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-6 col-sm-8">
                            <div class="p_list_text">
                                <h3>Accessories</h3>
                                <ul>
                                    <li><a href="#">Down Jackets</a></li>
                                    <li><a href="#">Hoodies</a></li>
                                    <li><a href="#">Suits</a></li>
                                    <li><a href="#">Jeans</a></li>
                                    <li><a href="#">Casual Pants</a></li>
                                    <li><a href="#">Sunglass</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-4">
                            <div class="p_list_img">
                                <img src="img/product/p-categories-list/product-l-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Product_listing Area =================-->

    <!--================Featured Product Area =================-->
    <section class="feature_product_area">
        <div class="container">
            <div class="f_p_inner">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="f_product_left">
                            <div class="s_m_title">
                                <h2>Featured Products</h2>
                            </div>
                            <div class="f_product_inner">
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="img/product/featured-product/f-p-1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Oxford Shirt</h4>
                                        <h5>$45.05</h5>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="img/product/featured-product/f-p-2.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Puffer Jacket</h4>
                                        <h5>$45.05</h5>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="img/product/featured-product/f-p-3.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Leather Bag</h4>
                                        <h5>$45.05</h5>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="img/product/featured-product/f-p-4.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Casual Shoes</h4>
                                        <h5>$45.05</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="fillter_slider_inner">
                            <ul class="portfolio_filter">
                                <li class="active" data-filter="*"><a href="#">men's</a></li>
                                <li data-filter=".woman"><a href="#">Woman</a></li>
                                <li data-filter=".shoes"><a href="#">Shoes</a></li>
                                <li data-filter=".bags"><a href="#">Bags</a></li>
                            </ul>
                            <div class="fillter_slider owl-carousel">
                                <div class="item shoes">
                                    <div class="fillter_product_item bags">
                                        <div class="f_p_img">
                                            <img src="img/product/fillter-product/f-product-1.jpg" alt="">
                                            <h5 class="sale">Sale</h5>
                                        </div>
                                        <div class="f_p_text">
                                            <h5>Nike Max Air Vapor Power</h5>
                                            <h4>$45.05</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item woman shoes bags">
                                    <div class="fillter_product_item">
                                        <div class="f_p_img">
                                            <img src="img/product/fillter-product/f-product-2.jpg" alt="">
                                            <h5 class="new">New</h5>
                                        </div>
                                        <div class="f_p_text">
                                            <h5>Fossil Watch</h5>
                                            <h4><del>$250</del> $110</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item woman shoes">
                                    <div class="fillter_product_item">
                                        <div class="f_p_img">
                                            <img src="img/product/fillter-product/f-product-3.jpg" alt="">
                                            <h5 class="discount">-10%</h5>
                                        </div>
                                        <div class="f_p_text">
                                            <h5>High Heel</h5>
                                            <h4>$45.05</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item shoes">
                                    <div class="fillter_product_item bags">
                                        <div class="f_p_img">
                                            <img src="img/product/fillter-product/f-product-1.jpg" alt="">
                                            <h5 class="sale">Sale</h5>
                                        </div>
                                        <div class="f_p_text">
                                            <h5>Nike Max Air Vapor Power</h5>
                                            <h4>$45.05</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item woman shoes bags">
                                    <div class="fillter_product_item">
                                        <div class="f_p_img">
                                            <img src="img/product/fillter-product/f-product-2.jpg" alt="">
                                            <h5 class="new">New</h5>
                                        </div>
                                        <div class="f_p_text">
                                            <h5>Fossil Watch</h5>
                                            <h4><del>$250</del> $110</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item woman shoes">
                                    <div class="fillter_product_item">
                                        <div class="f_p_img">
                                            <img src="img/product/fillter-product/f-product-3.jpg" alt="">
                                            <h5 class="discount">-10%</h5>
                                        </div>
                                        <div class="f_p_text">
                                            <h5>High Heel</h5>
                                            <h4>$45.05</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item shoes">
                                    <div class="fillter_product_item bags">
                                        <div class="f_p_img">
                                            <img src="img/product/fillter-product/f-product-1.jpg" alt="">
                                            <h5 class="sale">Sale</h5>
                                        </div>
                                        <div class="f_p_text">
                                            <h5>Nike Max Air Vapor Power</h5>
                                            <h4>$45.05</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item woman shoes bags">
                                    <div class="fillter_product_item">
                                        <div class="f_p_img">
                                            <img src="img/product/fillter-product/f-product-2.jpg" alt="">
                                            <h5 class="new">New</h5>
                                        </div>
                                        <div class="f_p_text">
                                            <h5>Fossil Watch</h5>
                                            <h4><del>$250</del> $110</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item woman shoes">
                                    <div class="fillter_product_item">
                                        <div class="f_p_img">
                                            <img src="img/product/fillter-product/f-product-3.jpg" alt="">
                                            <h5 class="discount">-10%</h5>
                                        </div>
                                        <div class="f_p_text">
                                            <h5>High Heel</h5>
                                            <h4>$45.05</h4>
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
    <!--================End Featured Product Area =================-->

    <!--================Form Blog Area =================-->
    <section class="from_blog_area">
        <div class="container">
            <div class="from_blog_inner">
                <div class="c_main_title">
                    <h2>From The Blog</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="from_blog_item">
                            <img class="img-fluid" src="img/blog/from-blog/f-blog-1.jpg" alt="">
                            <div class="f_blog_text">
                                <h5>fashion</h5>
                                <p>Neque porro quisquam est qui dolorem ipsum</p>
                                <h6>21.09.2017</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="from_blog_item">
                            <img class="img-fluid" src="img/blog/from-blog/f-blog-2.jpg" alt="">
                            <div class="f_blog_text">
                                <h5>fashion</h5>
                                <p>Neque porro quisquam est qui dolorem ipsum</p>
                                <h6>21.09.2017</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="from_blog_item">
                            <img class="img-fluid" src="img/blog/from-blog/f-blog-3.jpg" alt="">
                            <div class="f_blog_text">
                                <h5>fashion</h5>
                                <p>Neque porro quisquam est qui dolorem ipsum</p>
                                <h6>21.09.2017</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Form Blog Area =================-->

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