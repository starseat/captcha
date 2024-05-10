<?php
// 캡챠 라이브러리로드
//include __DIR__."/config.php";
include './config.php';

extract($_POST);

$response = array('rst'=>'fail','msg'=>'서버오류');
try{
    if(empty($access_token)){ throw new Exception("엑세스토큰이 누락되었습니다.");}
    if( $access_token != $_SESSION['access_token']){ throw new Exception("엑세스토큰이 일치하지 않습니다."); }

    // 필수값 체크
    if(empty($txt)){ throw new Exception("질문을 입력해 주세요."); }
    if(empty($code)){ throw new Exception("보안코드를 입력해주세요."); }
    if(empty($secure)) { throw new Exception("보안키값이 누락되었습니다."); }

    // 보인키 검증
    $checkSecure= md5(RI_CAPTCHA_SECRET_KEY.$code);
    if($secure != $checkSecure){ throw new Exception("보안키값이 일치하지 않습니다."); }

    // 성공시 secure/captchaTxt 값을 내려준다.
    $response['rst'] = 'success';
    $response['msg'] = '질문이 제출되었습니다.';
}
catch(Exception $e){
    $response['rst'] = 'fail';
    $response['msg'] = $e->getMessage();
}

die(json_encode($response));
