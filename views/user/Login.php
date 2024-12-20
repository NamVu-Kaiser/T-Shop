<?php
require_once __DIR__ . '/../shares/header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .form-container {
    background-color: #fff;
    padding: 40px 50px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    max-width: 400px;
    width: 90%;
    border: 1px solid #ccc; /* Thêm viền xám */
}
.title {
    color: #D10024;
    margin-bottom: 30px;
    font-size: 20px;
    font-weight: bold;
}
.social-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-bottom: 25px;
}
.btn-google, .btn-zalo {
    padding: 12px 25px;
    border: none;
    border-radius: 8px;
    font-weight: bold;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    background-color: #fff;
    margin-top: 20px;
    border: 1px solid #ccc; /* Thêm viền xám */
}
.btn-google:hover, .btn-zalo:hover {
    transform: translateY(-2px);
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.15);
}
.btn-google {
    color: #757575;
}

.btn-zalo {
    color: #0569da;
}
.separator {
    display: flex;
    align-items: center;
    margin-bottom: 25px;
    width: 100%;
}
.separator-text {
    color: #999;
    padding: 0 15px;
    background-color: #fff;
    position: relative;
    z-index: 2;
    font-size: 14px;
}
.separator::before {
    content: "";
    flex: 1;
    height: 1px;
    background-color: #ddd;
    position: relative;
    top: 0;
    z-index: 1;
}
.input-group {
    margin-bottom: 15px;
    width: 100%;
    display: flex;
    flex-direction: column;
}
input[type="text"],
input[type="password"] {
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 14px;
    width: 88%;
}

.forgot-password {
    font-size: 13px;
    color: #777;
    text-align: right;
    margin-top: 5px;
    margin-bottom: 20px;
    text-decoration: none;
    width: 95%;
}

.forgot-password:hover {
    text-decoration: underline;
}

.btn-login {
    background-color: #D10024;
    color: #fff;
    padding: 12px 20px;
    border: none;
    border-radius: 8px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
    margin-bottom: 20px;
    width: 100%;
}

.btn-login:hover {
    background-color: #b8001e;
    transform: translateY(-2px);
}

.register-link {
    font-size: 14px;
    color: #555;
    text-decoration: none;
    text-align: center;
    margin-bottom: 10px;
}

.register-link a {
    color: #D10024;
    font-weight: bold;
    text-decoration: none;
}

.register-link a:hover {
    text-decoration: underline;
}

    </style>
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
                <input type="text" id="phone" name="phone" placeholder="SỐ ĐIỆN THOẠI" required>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="MẬT KHẨU" required>
            </div>
            <a href="#" class="forgot-password">Quên mật khẩu?</a>
            <button type="submit" class="btn-login">Đăng nhập</button>
        </form>
        <p class="register-link">Bạn chưa có tài khoản? <a href="/T-Shop/views/user/Register.php">Đăng ký ngay</a></p>
    </div>
</body>
</html>