<?php
session_start();
require_once __DIR__ . '/../../config/db.php';
require_once __DIR__ . '/../../controllers/UserController.php';

// Initialize UserController
$userController = new UserController($pdo);

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_name = trim($_POST['user_name']);
    $password = trim($_POST['password']);

    // Attempt login using UserController
    $result = $userController->login($user_name, $password);

    if ($result['status']) {
        // Store user data in session
        $_SESSION['user'] = $result['user'];
        header('Location: ../index.php'); // Redirect to index page
        exit;
    } else {
        // Lấy thông báo lỗi chi tiết
        $error = $result['error'];
    }
}

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
        <h2 class="title">Đăng nhập</h2>
        <form action="#" method="post">
            <div class="input-group">
                <input type="text" id="user_name" name="user_name" placeholder="TÊN ĐĂNG NHẬP" required style="width: 300px;">
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="MẬT KHẨU" required style="width: 300px;">
            </div>
            <?php if ($error): ?>
                <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
            <?php endif; ?>
            <button type="submit" class="btn-login" style="margin-top: 10px;">Đăng nhập</button>
        </form>
        <p class="register-link">Bạn chưa có tài khoản? <a href="/T-Shop/views/users/register.php">Đăng ký ngay</a></p>
    </div>
</body>
</html>
