let allValues = [];

// 대문자 추가
for(let i=65; i<65+26; i++) {
    allValues.push(String.fromCharCode(i) + '');
}

// 대문자 대문자
for(let i=97; i<97+26; i++) {
    allValues.push(String.fromCharCode(i) + '');
}

// 숫자 추가
// for(let i=0; i<10; i++) {
//     allValues.push(i + '');
// }

for(let i=48; i<48+10; i++) {
    allValues.push(String.fromCharCode(i) + '');
}


let captchaValue = '';
let captchaLength = 6;

for(let i=0; i<captchaLength; i++) {
    captchaValue += allValues[Math.floor(Math.random() * allValues.length)];
}

document.querySelector('#captchaValue').innerHTML = captchaValue;

let thisValue = '';
document.querySelector('#inputCaptcha').addEventListener('change', (evt) => {
    thisValue = evt.target.value;
});

document.querySelector('#submitBtn').addEventListener('click', () => {
    console.log('captchaValue: ', captchaValue);
    console.log('thisValue: ', thisValue);

    if(captchaValue === thisValue) {
       alert('Valid');
    } else if (thisValue === '') {
       alert('empty captcha value');
    } else {
       alert('Invalid');
    }

    return false;
});