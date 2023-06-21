<?php
include("serverfile.php");
$id = $_GET['cid'];
$queryselect = "select * from addimage WHERE id='$id'";
$res = mysqli_query($con, $queryselect);
$row = mysqli_fetch_assoc($res);
$cid = $row['cid'];

$query = "delete from addimage where id='$id'";
$res = mysqli_query($con, $query);
if (mysqli_query($con, $query)) {
  echo "<script>alert('Deleted');window.location.href='add_image.php?cid=" . $cid . "'</script>";
} else {
  echo "not Deleted";
}
