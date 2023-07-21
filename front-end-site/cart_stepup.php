<?php session_start();
include('../production/serverfile.php');
$euseremail = $_SESSION["uemailid"];
$querytop = "select * from euserdata where euseremail='$euseremail'";
$restop = mysqli_query($con, $querytop);
$rowtop = mysqli_fetch_assoc($restop);
$s = $_GET['s'];

$selectnum = "UPDATE cart SET quantity=quantity+1 WHERE slno='$s'";
mysqli_query($con, $selectnum);

$selectq = "select * from cart where slno='$s'";
$selectq = mysqli_query($con, $selectq);
$rowq = mysqli_fetch_assoc($selectq);

?>
<div>
    <input id="form1" min="0" name="quantity" value="<?php echo $rowq['quantity']; ?>" type="text" class="form-control" />
    <label class="form-label" for="form1">Quantity</label>
</div>