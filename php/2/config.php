<?php
session_save_path('./session');
session_start();

define('RI_CAPTCHA_SECRET_KEY', md5('CAPTCHA_TEST')); // 고정된 비밀키 입력

// 엑세스토큰 자동생성
$_SESSION['access_token'] = md5($_SERVER['REMOTE_ADDR']);

// 랜덤문자열추출
function createRandTxt($clen = 6){
    $txt = md5(time()).strtoupper(md5(time()));
    $atxt = str_split($txt);
    shuffle($atxt);
    $rtxt = implode("",$atxt);
    $mlen = strlen($rtxt)-$clen;
    $slen = mt_rand(0,$mlen);
    return mb_substr($rtxt, $slen,$clen);
}
