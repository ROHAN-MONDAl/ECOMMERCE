<?php

use function PHPSTORM_META\elementType;

session_start();
include('../production/serverfile.php');

$s = $_GET['s'];
$s1 = $_GET['s1'];

$quantity = 0;
$selectq1 = "select * from cart where slno='$s'";
$selectq1 = mysqli_query($con, $selectq1);
$rowq1 = mysqli_fetch_assoc($selectq1);

$quantity = $rowq1['quantity'];

?>


<div id="total">
    <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
            Products
            <span><?php echo $s; ?>-<?php echo $s1; ?></span>
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
            <span><strong>$53.98</strong></span>
        </li>
    </ul>
</div> 