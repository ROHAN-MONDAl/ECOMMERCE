phpCopy code<?php 
if(isset($_POST['redirect_url'])){ 
    $redirect_url = $_POST['redirect_url']; 
    header("Location: $redirect_url"); 
    exit; 
} 
?>