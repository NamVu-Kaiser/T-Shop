<?php
require_once __DIR__ . '/../shares/header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>T Shop - Đăng Ký</title>
    <link rel="stylesheet" href="style.css">
    <style>
            .form-container {
          background-color: #fff;
          border-radius: 10px;
          box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
          padding: 30px 40px;
          text-align: center;
          max-width: 500px;
          margin: 0 auto;
      }
      .form-group {
          margin-bottom: 15px;
          text-align: left;
      }
      .logo {
    width: 150px;
}
nav ul li {
    margin-left: 20px;
}
nav ul li a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
}

.search-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 90%;
    margin: 10px auto;
}

.search-input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    flex-grow: 1;
    max-width: 600px;
    margin-right: 10px;
    background-color: #fff;
    color: #333;
}

.search-button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #D10024;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.search-button:hover {
    background-color: #b8001e;
}

main {
    width: 90%;
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    
}

.form-container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    padding: 30px 40px;
    text-align: center;
    max-width: 500px;
    margin: 0 auto;
}

h2 {
    color: #D10024;
    margin-bottom: 20px;
    font-size: 24px;
}

.form-group {
    margin-bottom: 15px;
    text-align: left;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 90%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    margin-bottom: 5px;
}

small {
    display: block;
    font-size: 12px;
    color: #777;
    margin-top: 5px;
}

.register-button {
    background-color: #D10024;
    color: #fff;
    border: none;
    padding: 12px 25px;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
    font-size: 16px;
    margin-top: 10px;
}

.register-button:hover {
    background-color: #b8001e;
    transform: translateY(-2px);
}
    </style>
</head>
<body>
    <!-- <header>
        <div class="container">
            <img src="logo.png" alt="T Shop Logo" class="logo">
            <nav>
                <ul>
                    <li><a href="#">Đăng Nhập</a></li>
                    <li><a href="#">Giỏ Hàng</a></li>
                </ul>
            </nav>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Nhập từ khóa tìm kiếm" class="search-input">
            <button class="search-button">Tìm kiếm</button>
        </div>
    </header> -->
    <main>
        <div class="form-container">
            <h2>Đăng ký tài khoản</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="fullname">Nhập họ và tên:</label>
                    <input type="text" id="fullname" name="fullname" required>
                </div>
                <div class="form-group">
                    <label for="phone">Nhập số điện thoại:</label>
                    <input type="text" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="email">Nhập email (Không bắt buộc):</label>
                    <input type="email" id="email" name="email">
                    <small>Hóa đơn VAT khi mua hàng sẽ được gửi qua email này</small>
                </div>
                <div class="form-group">
                    <label for="dob">Ngày sinh:</label>
                    <input type="text" id="dob" name="dob" placeholder="dd/mm/yyyy">
                </div>
                <div class="form-group">
                    <label for="password">Nhập mật khẩu:</label>
                    <input type="password" id="password" name="password" required>
                    <small>(*) Mật khẩu tối thiểu 6 ký tự, có ít nhất 1 chữ và 1 số (VD: 123456)</small>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Nhập lại mật khẩu:</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                </div>
                <button type="submit" class="register-button">Đăng Ký</button>
            </form>
        </div>
    </main>
</body>
</html>