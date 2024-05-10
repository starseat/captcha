<?php
// 캡챠 라이브러리로드
//include __DIR__."/config.php";
include "./config.php";

?>
<!-- jquery 사용을 위한 라이브러리 로드 -->
<script src="//code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<!-- form -->
<form id="form" action="request-send.php" onsubmit="return false;">
    <input type="hidden" name="access_token" value="<?=$_SESSION['access_token']?>">
    <input type="hidden" name="secure" value="">
    <div class="box input">
        <input type="text" name="txt" value="" placeholder="질문을 입력해주세요.">
    </div>
    <div class="box">
        <span class="captcha-txt">보안코드: </span>
    </div>
    <div class="box">
        <input type="text" name="code" value="" placeholder="보안코드입력">
    </div>
    <input type="submit" value="제출" />
</form>

<script>
    var authSubmit = false;

    // 캡챠 사전 구성 프로그램 실행
    function createCaptch(){
        var $form = $('#form');
        var access_token = $form.find('[name="access_token"]').val();
        if(typeof access_token == 'undfined' || !access_token){ return false; }

        // 기본 입력폼 초기화
        $form.find('[name="secure"]').val('');
        $form.find('[name="code"]').val('');
        $form.find('[name="txt"]').val('');
        $('#secure-captcha-txt').html('');

        $.ajax({url:'request-captcha.php', data:{access_token:access_token} ,type:'post',dataType:'json'})
            .done(function(e){
                if(e.rst != 'success'){ alert(e.msg); return false; }
                authSubmit = true;
                $form.find('[name="secure"]').val(e.secure);
                $('#secure-captcha-txt').html('.captcha-txt:after{content:"'+e.captchaTxt+'"; color:red;}');
            })
            .fail(function(e){
                console.log(e.responseText);
                alert("문서를 제출할 수 없습니다.");
            });
    }

    // 서브밋
    $(document).on('submit','#form',function(){
        if(authSubmit !== true){ alert("문서를 제출할 수 없습니다."); return false; }
        var $form = $('#form');

        $.ajax({url:'request-send.php', data:$form.serialize() ,type:'post',dataType:'json'})
            .done(function(e){
                alert(e.msg);
                if(e.rst != 'success'){return false; }
                createCaptch();
            })
            .fail(function(e){
                console.log(e.responseText);
                alert("문서를 제출할 수 없습니다.");
            })
            .always(function(e){
                authSubmit = true;
            })
    });

    $(document).ready(function(e){
        createCaptch();
    });
</script>
<style>
    #form { width:100%; max-width:400px; margin:0 auto; }
    #form .box{ margin:5px 0; padding:5px 0; border-bottom:solid 1px #eee;}
</style>

<!-- 캡챠로 생성된 랜덤 문자를 출력하기 위한 용도 (css 특성상 jquery 로는 after 선택자를 사용할 수 없기때문에 이와 같이 처리) -->
<style type="text/css" id="secure-captcha-txt"></style>
