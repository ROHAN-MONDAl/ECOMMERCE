<?php  
session_start();
include('google_setup.php');
$google->revokeToken($_SESSION['token']);
session_destroy();
unset($_SESSION['email']);
header('Location:signin.php');  ?>