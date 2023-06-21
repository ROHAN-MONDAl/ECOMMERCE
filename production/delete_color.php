<?php
include("serverfile.php");
$id = $_GET['pid'];
$queryselect = "select * from addcolor WHERE id='$id'";
$res = mysqli_query($con, $queryselect);
$row = mysqli_fetch_assoc($res);
$pid = $row['pid'];

$query = "delete from addcolor where id='$id'";
$res = mysqli_query($con, $query);
if (mysqli_query($con, $query)) {
  echo "<script>alert('Deleted');window.location.href='add_color.php?pid=" . $pid . "'</script>";
} else {
  echo "not Deleted";
}
