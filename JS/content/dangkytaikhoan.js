var contentLogin = document.querySelector('.content-session');
contentLogin.innerHTML = `
<div class="content-register">
    <div class="form-group">
        <form id="form-register">
            <div class="name-form">ĐĂNG KÝ THÀNH VIÊN MỚI</div>
            <label for="">
                <input class="form-control" id="" type="text" placeholder="Họ" required>
            </label> <br>
            <label for="">
                <input class="form-control" id="" type="text"  placeholder="Tên" required>
            </label> <br>
            <label for="">
                <input class="form-control" id="" type="email"  placeholder="Email" required>
            </label> <br>
            <label for="">
                <input class="form-control form-password" id="" type="password"  placeholder="Mật khẩu" required>
            </label> <br>
            <label for="">
                <input class="form-control form-password" id="" type="password"  placeholder="Nhập lại mật khẩu" required>
            </label> <br>
            <label for="">
                <input class="form-control" id="btn-register" type="submit" value="Đăng ký">
            </label>
        </form>
    </div>
</div>`

var confirmPassWord = document.querySelectorAll('.form-password');
var btnRegister = document.getElementById('btn-register');
var formRegister = document.getElementById('form-register');
console.log(confirmPassWord[2]);
btnRegister.onclick = function() {
    if(confirmPassWord[0].value == confirmPassWord[1].value && confirmPassWord[0].value != '' && confirmPassWord[1].value != '') {
        formRegister.submit();
    }
}