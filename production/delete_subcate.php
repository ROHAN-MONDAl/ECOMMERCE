<?php
include("serverfile.php");
                        $catid = $_GET['catid'];
                        $query = "delete from scategory where catid='$catid'";
                        $res = mysqli_query($con, $query);
                        if (mysqli_query($con, $query)) {
                          echo "<script>alert('Deleted');window.location.href='add_subcat.php'</script>";
                        } else {
                          echo "not Deleted";
                        }