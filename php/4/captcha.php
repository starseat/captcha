<?php
session_start();
$ranStr = rand(111111,999999);
$ranStr = substr($ranStr, 0, 6);
$_SESSION['cap_code'] = $ranStr;
$newImage = imagecreatefrompng("bg.png");
//이미지 색상 지정
$txtColor = imagecolorallocate($newImage, 0, 0, 0);
//이미지 위에 글자 넣기
imagestring($newImage, 5, 4, 5, $ranStr, $txtColor);
header("Content-type: image/jpeg");
imagejpeg($newImage);
