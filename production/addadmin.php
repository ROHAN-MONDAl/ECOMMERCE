<?php 
session_start();
if (empty($_SESSION["aemailid"])) {
	echo "<script>alert('please login');window.location.href='../login_data/login_form.php';</script>";
}
include('../production/serverfile.php');
$email = $_SESSION["aemailid"];
$querytop = "select * from usersdata where emailid = '$email'";
$restop = mysqli_query($con, $querytop);
$rowtop=mysqli_fetch_assoc($restop);
?>
<!DOCTYPE html>
<html lang="en">

<script>
	function passwordConfirmation() {
		var password = document.getElementById("password").value;
		var repassword = document.getElementById("repassword").value;
		if (password != "" && repassword != "") {
			if (password != repassword) {
				alert("password and re-enter your password did not matched");
				return false;
			}
		}
	}
</script>

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
									<form name="usersdata" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">

										<!-- upload profile photo -->
										<div class="d-flex justify-content-center mb-4">
											<img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" class="rounded-circle" id="photo-preview" 
											alt="example placeholder" style="width: 100px; height: 100px;" />
										</div>
										<div class="d-flex justify-content-center">
											<div class="btn btn-primary btn-rounded">
												<label class="form-label text-white m-1" for="profile-photo"> Choose file</label>
												<input type="file" name="file" class="form-control d-none" id="profile-photo" onchange="displayPhoto()" />
											</div>
										</div>
										<!-- /upload profile photo -->

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="">Full Name
												<span class="required"></span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="fullname" id="first-name" required="required" class="form-control ">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="">Phone Number <span class="required"></span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="phonenumber" id="" required="required" class="form-control ">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="">Email id <span class="required"></span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="emailid" id="" required="required" class="form-control ">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="">gender<span class="required"></span>
											</label>
											<div class="form-check form-check-inline">
												<input class="form-check-input" name="gen" type="radio" id="Male" value="Male" checked />
												<label class="form-check-label" for="Male">Male</label>
											</div>

											<div class="form-check form-check-inline">
												<input class="form-check-input" name="gen" type="radio" id="female" value="female" />
												<label class="form-check-label" for="female">Female</label>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="">Date Of Birth<span class="required"></span>
											</label>
											<div class="col-md-6 col-sm-6">
												<input type="date" name="dob" id="dob" required="required" class="form-control">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="useraddress">Enter your address<span class="required"></span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="useraddress" id="address" required="required" class="form-control ">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Enter your password<span class="required"></span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="password" name="password" id="password" required="required" class="form-control" pattern=".{8,}" title="Eight or more characters">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="repassword">Please re-enter your password<span class="required"></span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="password" name="repassword" id="repassword" required="required" class="form-control" pattern=".{8,}" title="Eight or more characters">
											</div>
										</div>
										<br>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" name="submit" class="btn btn-success" onclick="return passwordConfirmation();">Submit</button>
											</div>
										</div>
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
										$image = $_FILES['file']['name'];

										if ($image) {

											$filename = stripslashes($_FILES['file']['name']);

											$extension = getExtension($filename);
											$extension = strtolower($extension);

											if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif") && ($extension != "bmp") && ($extension != "pdf")) {

												echo '<h1>Unknown extension!</h1>';
												$errors = 1;
											} else {
												$image_name = time() . '.' . $extension;

												$newname = "adminupload/" . $image_name;

												$copied = copy($_FILES['file']['tmp_name'], $newname);
												if (!$copied) {
													echo '<h1>Copy unsuccessfull!</h1>';
												}
											}
										}


										$fullname = $_POST['fullname'];
										$phonenumber = $_POST['phonenumber'];
										$emailid = $_POST['emailid'];
										$gen = $_POST['gen'];
										$dob = $_POST['dob'];
										$useraddress = $_POST['useraddress'];
										$password = $_POST['password'];

										$queryexist = "select * from usersdata where phonenumber='$phonenumber' or emailid= '$emailid'";
										$res = mysqli_query($con, $queryexist);
										$rc = mysqli_num_rows($res);
										if ($rc == 0) {
											$query = "insert into usersdata values('','$image_name','$fullname','$phonenumber','$emailid','$gen','$dob','$useraddress','$password')";
											if (mysqli_query($con, $query)) {
												echo "<script>alert('inserted');</script>";
											} else {
												echo "<script>alert('not inserted');</script>";
											}
										} else {
											echo "<script>alert('already exist');</script>";
										}
									}
									?>
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