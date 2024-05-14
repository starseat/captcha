<?php
session_start();

if(isset($_POST)) {

    $email = $_POST["email"];
    $password = $_POST["password"];
    $address1 = $_POST["address_1"];
    $address2 = $_POST["address_2"];
    $captchaCode = $_POST["captcha_code"];

    $filterCaptchCode = filter_var($_POST["captcha_code"], FILTER_SANITIZE_STRING);

    $error = array();

    if(empty($filterCaptchCode)) {

        array_push($error,'Please enter the captcha.');
    }
    else if($_SESSION['CAPTCHA_CODE'] != $filterCaptchCode){

        array_push($error,'Captcha is invalid.');
    }

    if(! empty($error)){

        $_SESSION['captcha'] = $error;

        header('Location:index.php');
    }else{

        echo 'Hurray!, You captcha Successfully Validated';
        exit;
    }
}