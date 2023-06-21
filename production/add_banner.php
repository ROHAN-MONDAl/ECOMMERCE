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
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

  <title>gentelella Alela!</title>
  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
  <!-- bootstrap-daterangepicker -->
  <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="admindashboard.php" class="site_title"><i class="fa fa-paw"></i><span>Ecommerce</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <?php
          include('menuprofileinfo.php');
          ?>
          <!-- /menu profile quick info -->
          <br />
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
              <h3>Form Elements</h3>
            </div>

          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Form Design</h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form name="addimage" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">

                    <!-- upload profile photo -->
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Upload your image
                        <span class="required"></span>
                      </label>
                      <div class="col-md-6 col-sm-6">
                        <input type="file" name="bimage" style="height: 45px;" id="first-name" required="required" class="form-control ">
                      </div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <button type="submit" name="submit" class="btn btn-success">Upload</button>
                        </div>
                      </div>
                    </div>
                    <!-- /upload profile photo -->
                  </form>
                  <?php


                  function getExtension($str)
                  {
                    $i = strrpos($str, ".");
                    if (!$i) {
                      return "";
                    }
                    $l = strlen($str) - $i;
                    $ext = substr($str, $i + 1, $l);
                    return $ext;
                  }

                  if (isset($_POST['submit'])) {
                    $image = $_FILES['bimage']['name'];

                    if ($image) {

                      $filename = stripslashes($_FILES['bimage']['name']);

                      $extension = getExtension($filename);
                      $extension = strtolower($extension);

                      if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif") && ($extension != "bmp") && ($extension != "pdf")) {

                        echo '<h1>Unknown extension!</h1>';
                        $errors = 1;
                      } else {
                        $image_name = time() . '.' . $extension;

                        $newname = "banner-images/" . $image_name;

                        $copied = copy($_FILES['bimage']['tmp_name'], $newname);
                        if (!$copied) {
                          echo '<h1>Copy unsuccessfull!</h1>';
                        }
                      }
                    }

                    $queryexist = "select * from banner";
                    $res = mysqli_query($con, $queryexist);
                    $query = "insert into banner values('','$image_name')";
                    if (mysqli_query($con, $query)) {
                      echo "<script>alert('inserted');</script>";
                    } else {
                      echo "<script>alert('not inserted');</script>";
                    }
                  }
                  ?>
                </div>
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
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                  <tr>
                                    <th>Slno</th>
                                    <th>Image</th>
                                    <th>User Edit</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $c = 1;
                                  $queryselect = "select * from banner";
                                  $res = mysqli_query($con, $queryselect);
                                  while ($row = mysqli_fetch_assoc($res)) {
                                  ?>
                                    <tr>
                                      <td><?php echo $c; ?></td>
                                      <td><a href="upload/<?php echo $row['bimage']; ?>"><img src="banner-images/<?php echo $row['bimage']; ?>" width="100px" height="100px"></a></td>
                                      <td>
                                        <a href="delete-banner.php?slno=<?php echo $row['slno']; ?>" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">delete</a>
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
                      </div>
                    </div>
                  </div>
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
          gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>
  <!-- user profile js -->
  <script src="../production/js/uploaduserimage/profilephoto.js"></script>
  <!-- jQuery -->
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="../vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../vendors/nprogress/nprogress.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- iCheck -->
  <script src="../vendors/iCheck/icheck.min.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="../vendors/moment/min/moment.min.js"></script>
  <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap-wysiwyg -->
  <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
  <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
  <script src="../vendors/google-code-prettify/src/prettify.js"></script>
  <!-- jQuery Tags Input -->
  <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
  <!-- Switchery -->
  <script src="../vendors/switchery/dist/switchery.min.js"></script>
  <!-- Select2 -->
  <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
  <!-- Parsley -->
  <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
  <!-- Autosize -->
  <script src="../vendors/autosize/dist/autosize.min.js"></script>
  <!-- jQuery autocomplete -->
  <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
  <!-- starrr -->
  <script src="../vendors/starrr/dist/starrr.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>

</body>

</html>