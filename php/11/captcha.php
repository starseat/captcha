<?php

session_start();

// RANDOM DIGITS
$code = rand(111111,999999);

// ADD IN SESSION FOR VALIDATE SERVERSIDE
$_SESSION['CAPTCHA_CODE'] = $code;

// captcha IMAGE CREATE
$layer = imagecreatetruecolor(168, 37);
$captcha_bg = imagecolorallocate($layer, 000, 000, 000);
imagefill($layer, 0, 0, $captcha_bg);
$captcha_text_color = imagecolorallocate($layer, 255, 255, 255);
imagestring($layer, 5, 55, 10, $code, $captcha_text_color);
header("Content-type: image/jpeg");
imagejpeg($layer);