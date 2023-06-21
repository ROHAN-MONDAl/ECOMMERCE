<?php
session_start();
if (empty($_SESSION["aemailid"])) {
  echo "<script>alert('please login');window.location.href='../login_data/login_form.php';</script>";
}
include('../production/serverfile.php');
$email = $_SESSION["aemailid"];
$querytop = "select * from usersdata where emailid = '$email'";
$restop = mysqli_query($con, $querytop);
$rowtop = mysqli_fetch_assoc($restop);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Ecommerce</title>

  <!-- Bootstrap -->
  <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- Datatables -->

  <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="admindashboard.php" class="site_title"><i class="fa fa-paw"></i> <span>Ecommerce</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <?php
          include('menuprofileinfo.php');
          ?>
          <!-- /menu profile quick info -->

          <!-- sidebar menu -->
          <?php
          include('sidebarmenu.php');
          ?>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <?php
          include('menufooterbuttons.php');
          ?>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <?php
      include('topnavigation.php');
      ?>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Users <small>Some examples to get you started</small></h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Default Example <small>Users</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Settings 1</a>
                        <a class="dropdown-item" href="#">Settings 2</a>
                      </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="x_content">
                    <br />
                    <form name="categories" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Brand
                          <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="brand" id="first-name" required="required" class="form-control ">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Product Name
                          <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="name" id="first-name" required="required" class="form-control ">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Product Price
                          <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="productprice" id="first-name" value="Rs " required="required" class="form-control">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Product Description
                          <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <textarea class="form-control" name="pdes" rows="3"></textarea>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Product Highlights
                          <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <textarea class="form-control" name="phigh" rows="3"></textarea>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Product Specification
                          <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <textarea class="form-control" name="pspecs" rows="3"></textarea>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Product Dmension
                          <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <textarea class="form-control" name="pdimen" rows="3"></textarea>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Select a Category
                          <span class="required"></span>
                        </label>

                        <select class="form-select col-md-6 col-sm-6 border border-primary" name="catname" aria-label=".form-select-lg example">
                          <option selected>Open this select menu</option>
                          <?php
                          $queryselect = "select * from categories";
                          $res = mysqli_query($con, $queryselect);
                          while ($row = mysqli_fetch_assoc($res)) {
                          ?>
                            <option value="<?php echo $row['names']; ?>"><?php echo $row['names']; ?></option>
                          <?php
                          }
                          ?>
                        </select>

                      </div>


                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Select a SubCategory
                          <span class="required"></span>
                        </label>

                        <select class="form-select col-md-6 col-sm-6 border border-primary" name="subcategory" aria-label=".form-select-lg example">
                          <option selected>Open this select menu</option>
                          <?php
                          $queryselect = "select * from scategory";
                          $res = mysqli_query($con, $queryselect);
                          while ($row = mysqli_fetch_assoc($res)) {
                          ?>
                            <option value="<?php echo $row['subcategory']; ?>"><?php echo $row['subcategory']; ?></option>
                          <?php
                          }
                          ?>
                        </select>

                      </div>

                      <br>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <button type="submit" name="Add_Product" class="btn btn-success">Add Product</button>
                        </div>
                      </div>
                    </form>

                    <?php
                    if (isset($_POST['Add_Product'])) {

                      $brand = $_POST['brand'];
                      $name = $_POST['name'];
                      $productprice = $_POST['productprice'];
                      $catname = $_POST['catname'];
                      $subcategory = $_POST['subcategory'];
                      $pdes = $_POST['pdes'];
                      $phigh = $_POST['phigh'];
                      $pspecs = $_POST['pspecs'];
                      $pdimen = $_POST['pdimen'];

                      $query = "insert into product values('','$brand','$name','$productprice','$catname','$subcategory','$pdes','$phigh','$pspecs','$pdimen')";
                      if (mysqli_query($con, $query)) {
                        echo "<script>alert('inserted');</script>";
                      } else {
                        echo "<script>alert('not inserted');</script>";
                      }
                    }
                    ?>

                    <!-- category data -->
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                          <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                              <tr class="headings">
                                <th>
                                  <input type="checkbox" id="check-all" class="flat">
                                </th>
                                <th class="column-title">Id</th>
                                <th class="column-title">Brand</th>
                                <th class="column-title">Product Name</th>
                                <th class="column-title">Product Price</th>
                                <th class="column-title">Category</th>
                                <th class="column-title">Sub Category</th>
                                <th class="column-title">Product Size</th>
                                <th class="column-title">Capacity</th>
                                <th class="column-title">Star Ratings</th>
                                <th class="column-title">Add Color</th>
                                <th class="column-title">user operation</th>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $c = 1;
                              $queryselect = "select * from product";
                              $res = mysqli_query($con, $queryselect);
                              while ($row = mysqli_fetch_assoc($res)) {
                              ?>
                                <tr>
                                  <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                  </td>

                                  <td><?php echo $c; ?></td>
                                  <td><?php echo $row['brand']; ?></td>
                                  <td><?php echo $row['name']; ?></td>
                                  <td><?php echo $row['productprice']; ?></td>
                                  <td><?php echo $row['catname']; ?></td>
                                  <td><?php echo $row['subcategory']; ?></td>
                                  <td><a href="product_size.php?pid=<?php echo $row['id'] ?>">Show</a> </td>
                                  <td><a href="capacity.php?pid=<?php echo $row['id'] ?>">Show</a> </td>
                                  <td><a href="rating.php?pid=<?php echo $row['id'] ?>">Show</a> </td>
                                  <td><a href="add_color.php?pid=<?php echo $row['id'] ?>">Add color</a></td>
                                  <td>
                                    <a href="update_product.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm active " role="button" aria-pressed="true">Edit</a>
                                    <a href="delete_product.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">delete</a>
                                  </td>
                                </tr>
                              <?php
                                $c++;
                              }
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>

                    <!-- /category data -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

</body>

</html>