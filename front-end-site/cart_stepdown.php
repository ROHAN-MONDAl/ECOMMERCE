<?php

use function PHPSTORM_META\elementType;

session_start();
include('../production/serverfile.php');
$euseremail = $_SESSION["uemailid"];
$querytop = "select * from euserdata where euseremail='$euseremail'";
$restop = mysqli_query($con, $querytop);
$rowtop = mysqli_fetch_assoc($restop);

$s = $_GET['s'];

$quantity = 0;
$selectq1 = "select * from cart where slno='$s'";
$selectq1 = mysqli_query($con, $selectq1);
$rowq1 = mysqli_fetch_assoc($selectq1);
if ($rowq1['quantity'] == 1) {
    $quantity = $rowq1['quantity'];
} else {
    $selectnum = "UPDATE cart SET quantity = quantity-1 WHERE slno='$s'";
    mysqli_query($con, $selectnum);

    $selectq = "select * from cart where slno='$s'";
    $selectq = mysqli_query($con, $selectq);
    $rowq = mysqli_fetch_assoc($selectq);
    $quantity = $rowq['quantity'];
}

?>
<div>
    <input id="form1" min="0" name="quantity" value="<?php echo $quantity; ?>" type="text" class="form-control" />
    <label class="form-label" for="form1">Quantity</label>
</div>