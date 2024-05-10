<?php
session_start();
$str = rand(100000, 999999);
$_SESSION['captcha'] = $str;

// step1 - create image
$width = 74;
$height = 36;
$image = imagecreatetruecolor($width, $height);

// step2 - create foreground and background color for image
$fg = imagecolorallocate($image, 15, 26, 30);
$bg = imagecolorallocate($image, 255, 255, 255);

// step3 - set image background color
imagefill($image, 0, 0, $bg);

// step4 - write string on image
imagestring($image, 15, 10, 10, $str, $fg);

// ** [Very Important] prevent any Browser Cache!
header("Cache-Control: no-store, no-cache, must-revalidate");

// The PHP file will be rendered as image
header('Content-type: image/png');

// step5 - create and free php memory
imagepng($image);
imagedestroy($image);

