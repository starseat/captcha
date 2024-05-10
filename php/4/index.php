<?php
function exact_time() {
    $t = explode(' ',microtime());
    return floor(($t[0] + $t[1])*1000);
}
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    function refresh(){
        $("#captchaImg").removeAttr('src').attr("src", "captcha.php?id=" + new Date().getTime());
    }
</script>

<strong style="color:#4e5a64;">Captcha Number :</strong>
<img id="captchaImg" src="captcha.php?id=<?=exact_time()?>" height="30px;" width="100px">
<a href="javascript:refresh();">
    <img src="refresh.svg" style="width:18px;" title="새로고침"/>
</a>