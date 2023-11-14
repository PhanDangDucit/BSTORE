var contentLogin = document.querySelector('.content-session');
contentLogin.innerHTML = `<div class="content-register">
<div class="form-group">
    <form>
        <div class="name-form">ĐĂNG NHẬP</div>
            <input class="form-control" id="" type="email"  placeholder="Email" required>
        </label> <br>
        <label for="">
            <input class="form-control" id="" type="password"  placeholder="Mật khẩu" required>
        </label> <br>
        <button class="form-control btn-login" type="submit">Đăng nhập</button>
        <div class="form-subcontrol">
            <a href="#" class="form-subcontrol__active form-subcontrol__active--fp" id="">Quên mật khẩu</a>
        </div>
        <div class="form-subcontrol">
            <a href="./dangkytaikhoan.html" class="form-subcontrol__active form-subcontrol__active--register" id="">Đăng ký</a>
        </div>
            
    </form>
</div>
</div>`