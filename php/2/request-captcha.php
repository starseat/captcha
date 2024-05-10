<?php
// 캡챠 라이브러리로드
//include __DIR__."/config.php";
include './config.php';

extract($_POST);

$response = array('rst'=>'fail','msg'=>'서버오류');
try{
    if(empty($access_token)){ throw new Exception("엑세스토큰이 누락되었습니다.");}
    if( $access_token != $_SESSION['access_token']){ throw new Exception("엑세스토큰이 일치하지 않습니다."); }

    // 성공시 secure/captchaTxt 값을 내려준다.
    $response['captchaTxt'] = createRandTxt();
    $response['secure'] = md5(RI_CAPTCHA_SECRET_KEY.$response['captchaTxt']);
    $response['rst'] = 'success';
}
catch(Exception $e){
    $response['rst'] = 'fail';
    $response['msg'] = $e->getMessage();
}

die(json_encode($response));
