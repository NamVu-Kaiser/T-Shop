<?php
require_once __DIR__ . '/../shares/header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>T Shop - Đăng Ký</title>
    <link rel="stylesheet" href="register.css">
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

        h2 {
            color: #D10024;
            margin-bottom: 20px;
            font-size: 24px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
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

    <main>
        <div class="form-container">
            <h2>Đăng ký tài khoản</h2>
            <form action="#" method="post">
                <div class="form-group">
                <input type="text" id="fullname" name="fullname" placeholder="HỌ VÀ TÊN" required style="width: 300px;">
                </div>
                <div class="form-group">
                <input type="text" id="username" name="username" placeholder="TÊN ĐĂNG NHẬP" required style="width: 300px;">
                </div>
                <div class="form-group">
                <input type="password" id="password" name="password" placeholder="MẬT KHẨU" required style="width: 300px;">
                </div>
                <button type="submit" class="register-button">Đăng Ký</button>
            </form>
        </div>
    </main>
</body>
</html>