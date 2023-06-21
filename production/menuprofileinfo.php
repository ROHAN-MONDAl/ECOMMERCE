<?php
$email = $_SESSION["aemailid"];
$querytop = "select * from usersdata where emailid = '$email'";
$restop = mysqli_query($con, $querytop);
$rowtop = mysqli_fetch_assoc($restop);
?>

<div class="profile clearfix">
  <div class="profile_pic">
    <img src="../production/adminupload/<?php echo $rowtop['profilephoto']; ?>" alt="..." class="img-circle profile_img" style="width:70px; height:70px;">
  </div>
  <div class="profile_info">
    <span>Welcome,</span>
    <h2> <a href="admindata.php"><?php echo $rowtop['fullname']; ?></a></h2>
  </div>
</div>