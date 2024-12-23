<?php
    require_once __DIR__ . '/../shares/header.php';
    require_once __DIR__ . '/../../config/db.php';
    require_once __DIR__ . '/../../controllers/UserController.php';
    $userController = new UserController($pdo);

    $errors = [];
    $successMessage = '';
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fullname = trim($_POST['fullname']);
        $user_name = trim($_POST['user_name']);
        $password = trim($_POST['password']);
    
        if (empty($fullname) || empty($user_name) || empty($password)) {
            $errors[] = "Vui lòng nhập đầy đủ thông tin.";
        } else {
            $result = $userController->register($fullname, $user_name, $password);
    
            if ($result === "Tên đăng nhập đã tồn tại") {
                $errors[] = "Tên đăng nhập đã tồn tại.";
            } elseif ($result) {
                $successMessage = "Đăng ký thành công. Chuyển hướng đến trang đăng nhập...";
                header("refresh:2; url=login.php");
                exit();
            } else {
                $errors[] = "Đăng ký thất bại. Vui lòng thử lại.";
            }
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>T Shop - Đăng Ký</title>
    <link rel="stylesheet" href="/T-Shop/media/css/register.css">
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
                <input type="text" id="user_name" name="user_name" placeholder="TÊN ĐĂNG NHẬP" required style="width: 300px;">
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