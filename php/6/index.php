<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<link rel="stylesheet" href="./style.css">

<div class="login-form">
    <div class="form-title">
        Member Login
    </div>
    <div class="form-input">
        <label for="username">Username</label>
        <input type="text" id="username">
    </div>
    <div class="form-input">
        <label for="password">Password</label>
        <input type="text" id="password">
    </div>
    <div class="captcha">
        <label for="captcha-input">Enter Captcha</label>
        <div class="preview"></div>
        <div class="captcha-form">
            <input type="text" id="captcha-input" placeholder="Enter captcha text">
            <button class="captcha-refresh">
                <i class="fa fa-refresh"></i>
            </button>
        </div>
    </div>
    <div class="form-input">
        <button id="login-btn">Login</button>
    </div>
</div>

<script src="./main.js"></script>