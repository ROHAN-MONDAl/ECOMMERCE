<?php
error_reporting(0);
include('../production/serverfile.php');
include('google_setup.php');
if (isset($_GET['code'])) {
    //token
    $token = $google->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['token'] = $token;
    if (!isset($token["error"])) {
        $google->setAccessToken($token['access_token']);
        $service = new Google\Service\Oauth2($google);

        $data = $service->userinfo->get();


        $_SESSION['oauth_uid'] = $data['id'];
        $_SESSION['picture'] = $data['picture'];
        $_SESSION['name'] = $data['name'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['locale'] = $data['locale'];

        $oauth_uid = $data['id'];
        $picture =  $data['picture'];
        $name =  $data['name'];
        $email =  $data['email'];
        $locale =  $data['locale'];

        if ($email == $email) {

            $gqueryexist = "select * from google_account where email = '$email'";
            $gres = mysqli_query($con, $gqueryexist);
            $grc = mysqli_num_rows($gres);

            if ($grc == 0) {
                $gquery = "INSERT INTO google_account values('','$oauth_uid','$picture','$name','$email','$locale')";
                if (mysqli_query($con, $gquery)) {
                    echo "<script>alert('inserted');</script>";
                } else {
                    echo "<script>alert('not inserted');</script>";
                }
            }
        } else {
            echo "<script>alert('already exist');</script>";
        }
    }
}
?>

<!-- 
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <title>Profile</title>
</head>
<body>

    <div class="container">
        <div class="card" style="width:400px;margin:80px auto;">
            <img class="card-img-top" src="<?php echo $_SESSION['picture'] ?>" style="width:100%">
            <div class="card-body">
                <h4 class="card-title"><?php echo $_SESSION['oauth_uid'] ?></h4>
                <h5 class="card-title"><?php echo $_SESSION['name'] ?></h5>
                <span><?php echo $_SESSION['email'] ?></span><br>
                <span><?php echo $_SESSION['locale'] ?></span><br>
                <a href="index.php" class="btn btn-primary">Logout</a>
            </div>
        </div>
    </div>

</body>
</html> -->