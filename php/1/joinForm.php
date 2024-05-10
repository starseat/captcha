<form action="join.php" method="post">
    <table style="margin:auto;">
        <tr>
            <td>아이디</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>비밀번호</td>
            <td><input type="password" name="pw"></td>
        </tr>
        <tr>
            <td>비밀번호 확인</td>
            <td><input type="password" name="pw2"></td>
        </tr>
        <tr>
            <td rowspan="2"><img src="captcha.php?date=<?echo date('h:i:s')?>"></td>
            <td>왼쪽 이미지의 글자를 입력하세요.</td>
        </tr>
        <tr>
            <td><input type="text" name="captcha"></td>
        </tr>
    </table>
    <div style="text-align:center;">
        <button type="submit">가입하기</button>
    </div>
</form>
