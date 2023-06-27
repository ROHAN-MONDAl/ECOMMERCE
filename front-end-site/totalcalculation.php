<?php

use function PHPSTORM_META\elementType;

session_start();
include('../production/serverfile.php');

$s = $_GET['s'];

$quantity = 0;
$selectq1 = "select * from cart where slno='$s'";
$selectq1 = mysqli_query($con, $selectq1);
$rowq1 = mysqli_fetch_assoc($selectq1);

$cid= $rowq1['customerid'];

$tot=0;
$querycart = "select * from cart where customerid='$cid'";
$querycart = mysqli_query($con, $querycart);
while ($rowcart = mysqli_fetch_assoc($querycart)) {

    $id = $rowcart['productid'];
    $queryselects = "select * from product where id='$id'";
    $ress = mysqli_query($con, $queryselects);
    $rows = mysqli_fetch_assoc($ress);

    $cid = $rowcart['colorid'];
    $queryimage = "select * from addimage where cid='$cid'";
    $resimage = mysqli_query($con, $queryimage);
    $rowimage = mysqli_fetch_assoc($resimage);

    $querycolor = "select * from addcolor where id='$cid'";
    $rescolor = mysqli_query($con, $querycolor);
    $rowcolor = mysqli_fetch_assoc($rescolor);

    $tot=$tot+ (int)$rowcart['quantity'] * (int)$rows['productprice'];
}
?>



<div id="total">
    <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
            Products
            <span><?php echo $tot; ?></span>
            <input type="hidden" value="<?php echo $tot;?>" name="tot">
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
            Shipping
            <span>Gratis</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
            <div>
                <strong>Total amount</strong>
                <strong>
                    <p class="mb-0">(including VAT)</p>
                </strong>
            </div>
            <span><strong><?php echo $tot;?></strong></span>
        </li>
    </ul>
</div> 