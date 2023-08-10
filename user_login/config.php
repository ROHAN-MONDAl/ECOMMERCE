<?php  

include('../user_login/vendor/autoload.php');

$client = new Google_Client();

$client -> setApplicationName('ECOMMERCE');

$client -> setClientId('618770745664-gerrog08jf8mdnrp7ujsopgckqv9j9ju.apps.googleusercontent.com');
$client -> setClientSecret('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');

$client -> setRedirectUri('http://localhost/ecommerce/front-end-site/home-carousel.php');

$client -> addScope('email');
$client -> addScope('profile');


?>