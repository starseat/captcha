<?php
session_start();
if($_POST['captcha'] === $_SESSION['str']){
    echo '캡챠 성공';
    echo '<br/>';
    echo '가입을 진행하세요.';
}else{
    echo '<script>
    		alert(\'입력하신 글자가 다릅니다.\');
            history.go(-1);
         </script>';
}
?>