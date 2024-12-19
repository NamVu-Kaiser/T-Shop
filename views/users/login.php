
<?php
require_once __DIR__ . '/../shares/header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="/T-Shop/media/css/login.css">
</head>
<body>
    <div class="form-container">
        <h2 class="title">Đăng nhập với</h2>
        <div class="social-buttons">
            <button class="btn-google">
                <img src="/T-Shop/media/icons/google-icon.png" alt="Google Icon" class="logo-image">
                Google
            </button>
            <button class="btn-zalo">
                <img src="/T-Shop/media/icons/zalo-icon.png" alt="Zalo Icon" class="logo-image">
                Zalo
            </button>
        </div>
        <div class="separator">
            <span class="separator-text">hoặc</span>
        </div>
        <form action="#" method="post">
            <div class="input-group">                
                <input type="text" id="username" name="username" placeholder="TÊN ĐĂNG NHẬP" required style="width: 300px;">
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="MẬT KHẨU" required style="width: 300px;">
            </div>
            <a href="#" class="forgot-password" style="margin-bottom: 10px;">Quên mật khẩu?</a>
            <button type="submit" class="btn-login" style="margin-top: 10px;">Đăng nhập</button>
        </form>
        <p class="register-link">Bạn chưa có tài khoản? <a href="/T-Shop/views/users/register.php">Đăng ký ngay</a></p>
    </div>
</body>
</html>
