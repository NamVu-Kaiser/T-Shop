<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>T SHOP</title>
  <link rel="stylesheet" href="/T-Shop/media/css/style.css">
</head>
<body>
  <header>
    <div class="container">
      <div class="top-bar">
        <div>
          <a class="logo" href="/T-Shop/views/index.php">
            <img src="/T-Shop/media/icons/logo.png" alt="t-Shop" class="logo-image">T SHOP
          </a>
        </div>
        <div class="actions">
          <?php if (isset($_SESSION['user'])): ?>
            <a href="/T-Shop/views/users/profile.php">
                <img src="/T-Shop/media/icons/user.jpg" alt="Login">
                <?php echo htmlspecialchars($_SESSION['user']['fullname']); ?>
            </a>
            <a href="/T-Shop/views/users/logout.php">Đăng xuất</a>
          <?php else: ?>
            <a href="/T-Shop/views/users/login.php">
                <img src="/T-Shop/media/icons/user.jpg" alt="Login">Đăng Nhập
            </a>
          <?php endif; ?>
          <a href="/T-Shop/views/cart/cart.php">
            <img src="/T-Shop/media/icons/cart.jpg" alt="Cart">Giỏ Hàng
          </a>
        </div>
      </div>
      <form action="#" method="get" class="search-form">
        <input type="text" placeholder="Nhập từ khóa tìm kiếm">
        <button type="submit">Tìm kiếm</button>
      </form>
    </div>
  </header>
</body>
</html>
