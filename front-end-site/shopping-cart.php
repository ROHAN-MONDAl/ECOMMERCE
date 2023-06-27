<?php session_start();
include '../production/serverfile.php';
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
    </style>
    <section class=" gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Cart</h5>
                        </div>

                        <div class="card-body">
                            <!-- Single item -->
                            <div class="row">
                                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                    <!-- Image -->
                                    <!-- Image -->
                                </div>



                                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                    <!-- Quantity -->
                                    <!-- Quantity -->

                                    <!-- Price -->
                                    <!-- Price -->
                                </div>
                            </div>
                            <!-- Single item -->

                            <hr class="my-4" />

                            <!-- Single item -->
                            <div class="row">

                                <?php
$c = 1;
$tot = 0;
$querycart = "select * from cart where customerid='$euseremail'";
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
                                        <img src="../production/dataimage/<?php echo $rowimage['image']; ?>"
                                            class="w-100" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                        </a>
                                        <br>
                                    </div>
                                    <!-- Image -->
                                </div>

                                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                    <tr>
                                        <!-- Data -->
                                        <p><strong>Name : <?php echo $rows['name']; ?></strong></p>

                                        <?php
if ($rowcart['capacity'] == 'NA') {
        ?>
                                        <p>Color: <?php echo $rowcolor['color']; ?></strong></p>
                                        <p>Size: <?php echo $rowcart['productsize']; ?></p>
                                        <?php
} else {
        ?>
                                        <p>TON: <?php echo $rowcart['capacity']; ?></p>

                                        <?php
}
    ?>

                                        <button type="button" class="btn btn-primary btn-sm me-1 mb-2"
                                            data-mdb-toggle="tooltip" title="Remove item">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm mb-2"
                                            data-mdb-toggle="tooltip" title="Move to the wish list">
                                            <i class="fa fa-heart" style="color:white"></i>
                                        </button>
                                        <!-- Data -->
                                    </tr>


                                </div>

                                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">


                                    <!-- Quantity -->
                                    <script>
                                    function stepUp<?php echo $c ?>(str) {
                                        var xhttp = new XMLHttpRequest();
                                        xhttp.onreadystatechange = function() {
                                            if (this.readyState == 4 && this.status == 200) {
                                                document.getElementById("demo<?php echo $c ?>").innerHTML =
                                                    this.responseText;
                                            }
                                        };
                                        xhttp.open("GET", "cart_stepup.php?s=" + str, true);
                                        xhttp.send();
                                    }
                                    </script>

                                    <script>
                                    function stepDown<?php echo $c ?>(str) {
                                        var xhttp = new XMLHttpRequest();
                                        xhttp.onreadystatechange = function() {
                                            if (this.readyState == 4 && this.status == 200) {
                                                document.getElementById("demo<?php echo $c ?>").innerHTML =
                                                    this.responseText;
                                            }
                                        };
                                        xhttp.open("GET", "cart_stepdown.php?s=" + str, true);
                                        xhttp.send();
                                    }

                                    function calculate<?php echo $c; ?>(str) {
                                        var xhttp = new XMLHttpRequest();
                                        xhttp.onreadystatechange = function() {
                                            if (this.readyState == 4 && this.status == 200) {
                                                document.getElementById("total").innerHTML =
                                                    this.responseText;
                                            }
                                        };
                                        xhttp.open("GET", "totalcalculation.php?s=" + str, true);
                                        xhttp.send();
                                    }
                                    </script>


                                    <div class="d-flex mb-4" style="max-width: 300px">
                                        <button class="btn btn-primary h-50"
                                            onclick="stepDown<?php echo $c ?>(<?php echo $rowcart['slno'] ?>);calculate<?php echo $c ?>(<?php echo $rowcart['slno'] ?>)">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                        &nbsp;&nbsp;
                                        <div class="form-outline">
                                            <div id="demo<?php echo $c ?>">
                                                <input id="form1" min="0" name="quantity"
                                                    value="<?php echo $rowcart['quantity']; ?>" type="text"
                                                    class="form-control" />
                                                <label class="form-label" for="form1">Quantity</label>
                                            </div>
                                        </div>
                                        &nbsp;&nbsp;
                                        <button class="btn btn-primary h-50"
                                            onclick="stepUp<?php echo $c ?>(<?php echo $rowcart['slno'] ?>);calculate<?php echo $c ?>(<?php echo $rowcart['slno'] ?>)">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <!-- Quantity -->




                                    <!-- Price -->
                                    <p class="text-start text-md-center">
                                        <strong>Rs <?php echo $rows['productprice']; ?></strong>
                                    </p>
                                    <!-- Price -->



                                </div>
                                <?php
$c++;
}
?>
                            </div>
                            <!-- Single item -->
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <p><strong>Expected shipping delivery</strong></p>
                            <p class="mb-0">12.10.2020 - 14.10.2020</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Summary</h5>
                        </div>
                        <div class="card-body">
                            <div id="total">
                                <ul class="list-group list-group-flush">
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                        Products
                                        <span><?php echo $tot ?></span>
                                        <input type="hidden" value="<?php echo $tot; ?>" name="tot">
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        Shipping
                                        <span>Gratis</span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                        <div>
                                            <strong>Total amount</strong>
                                            <strong>
                                                <p class="mb-0">(including VAT)</p>
                                            </strong>
                                        </div>
                                        <span><strong><?php echo $tot; ?></strong></span>
                                    </li>
                                </ul>
                            </div>

                            <form method="post">
                                <button type="submit" name="Add_Order" class="btn btn-primary btn-lg btn-block">Place
                                    Order</button>
                            </form>
                            <?php
$n = 10;
function getName()
{
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < 3; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString . time();
}
?>


                            <?php
if (isset($_POST['Add_Order'])) {

    $billid = getname();
    date_default_timezone_set("Asia/kolkata");
    $date = date('Y-m-d h:i:s');

    $querycart = "select * from cart where customerid='$euseremail'";
    $querycart = mysqli_query($con, $querycart);
    while ($rowcart = mysqli_fetch_assoc($querycart)) {

        $trackid = $euseremail;
        $status = 'Order Placed';
        $orderdate = $date;
        $customerid = $rowcart['customerid'];
        $productid = $rowcart['productid'];
        $colorid = $rowcart['colorid'];
        $quantity = $rowcart['quantity'];
        $productsize = $rowcart['productsize'];
        $ton = $rowcart['capacity'];

        $rowcart = "insert into corder values('','$billid','$orderdate','$customerid','$productid','$colorid','$quantity','$productsize','$ton')";
        if (mysqli_query($con, $rowcart)) {
            $rowcart = "insert into track values('$trackid','$billid','$status','$orderdate')";
            mysqli_query($con, $rowcart);
            echo "<script>alert('inserted & Deleted');window.location.href='../front-end-site/empty-cart.php?>';
                            </script>";
                            $querydel = "delete from cart where customerid='$euseremail'";
                            $resdel = mysqli_query($con, $querydel);
                            mysqli_query($con, $querydel);
                            } else {
                            echo "<script>
                            alert('not inserted & not Deleted');
                            window.location.href = '../front-end-site/shopping-cart.php?>';
                            </script>";
                            }

                            }

                            }
                            ?>
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