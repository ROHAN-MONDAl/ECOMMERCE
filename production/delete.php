<?php 
include("serverfile.php");
                          $slno = $_GET['slno'];
                          $query = "delete from usersdata where slno='$slno'";
                          $res = mysqli_query($con, $query);
                          if (mysqli_query($con, $query)) {
                            echo "<script>alert('Deleted');window.location.href='admindata.php'</script>";
                          } else {
                            echo "not Deleted";
                          }
?>

