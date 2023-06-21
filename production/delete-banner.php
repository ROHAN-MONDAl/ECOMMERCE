<?php
include("serverfile.php");
$slno = $_GET['slno'];
$query = "delete from banner WHERE slno='$slno'";
$res = mysqli_query($con, $query);
if (mysqli_query($con, $query)) {
     echo "<script>alert('Deleted');window.location.href='add_banner.php'</script>";
} else {
    echo "not Deleted";
}
