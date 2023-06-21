<?php
include("serverfile.php");
                        $id = $_GET['id'];
                        $query = "delete from product where id='$id'";
                        $res = mysqli_query($con, $query);
                        if (mysqli_query($con, $query)) {
                          echo "<script>alert('Deleted');window.location.href='add_product.php'</script>";
                        } else {
                          echo "not Deleted";
                        }