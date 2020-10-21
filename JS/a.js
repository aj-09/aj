/*
 * @Author: Your name
 * @Date:   2020-10-18 13:58:28
 * @Last Modified by: mikey.zhaopeng
 * @Last Modified time: yyyy-10-Mo 08:20:37
 */


//    账号
function YHMonblus() {
    var username = document.getElementById("username");
    // var reN =/^\d{6,18}$/;
    var re = /^[a-zA-Z_]{6,18}$/;
    if (username.value == "") {
        document.getElementById('YHMerror').innerText = "请输入账号";
    } else if (username.value.length < 6 || username.value.length > 18) {
        console.log(username.value);
        document.getElementById('YHMerror').innerText = "格式错误,长度应为6-18个字符";
    } else if (!re.test(username.value)) {

        document.getElementById('YHMerror').innerText = "格式错误,只能包含英文字母和下划线";
    } else {
        document.getElementById('YHMerror').innerText = "";
    }
}

function YHMonfocu() {
    document.getElementById('YHMerror').innerText = "";
}


//    密码...
function MMonblus() {
    var password = document.getElementById("password");
    var re = /^(?=.*\d)(?=.*[a-zA-Z])[\da-zA-Z]{6,}$/;
    // var reg=/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/;

    if (password.value == "") {
        document.getElementById('MMerror').innerText = "请输入密码";
    } else if (password.value.length < 6) {
        document.getElementById('MMerror').innerText = "格式错误,,密码长度至少为6位";
    } else if (!re.test(password.value)) {
        document.getElementById('MMerror').innerText = "格式错误,必须包含英文字母和数字";
    } else {
        document.getElementById('MMerror').innerText = "";
    }
}

function MMonfocu() {
    document.getElementById('MMerror').innerText = "";
}