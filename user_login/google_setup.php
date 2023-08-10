<?php
    require_once('vendor/autoload.php');
    $google = new Google_Client();

    $google->setClientId('618770745664-gerrog08jf8mdnrp7ujsopgckqv9j9ju.apps.googleusercontent.com');

    $google->setClientSecret('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');

    $google->setRedirectUri('http://localhost/ecommerce/front-end-site/home-carousel.php');

    $google->addScope('email');

    $google->addScope('profile');


?>