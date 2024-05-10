<?php
session_start();

if(!empty($_POST['user_captcha'])) {
    if($_POST['user_captcha'] == $_SESSION['captcha']) {
        echo 'Validated successfully';
    } else {
        echo 'Invalid captcha code';
    }
}
?>

<form method="post">
    <div>
        Captcha Code : <img src="./captcha.php"><a href="./index.php">Refresh</a>
    </div>
    <div>
        Enter captcha code
        <input type="text" name="user_captcha">
    </div>
    <div>
        <input type="submit" name="submit" value="Submit"
    </div>
</form>
