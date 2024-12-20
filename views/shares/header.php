<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>T SHOP</title>
  <link rel="stylesheet" href="/T-Shop/media/css/style.css">
  <style>
    .search-button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #D10024;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }
        .search-button:hover{
            background-color: #b8001e;
        }
  </style>
</head>

<body>

  <header>
    <div class="container">
      <div class="top-bar">
      <div><a class="logo" href="/T-Shop/views/index.php"><img src="/T-Shop/media/icons/logo.png" alt="t-Shop" class="logo-image">T SHOP</a></div>
        <div class="actions">
          <a href="/T-Shop/views/user/Login.php"><img src="/T-Shop/media/icons/user.jpg" alt="Login">Đăng Nhập</a>
          <a href="/T-Shop/views/cart/cart.php"><img src="/T-Shop/media/icons/cart.jpg" alt="Cart">Giỏ Hàng</a>
        </div>
      </div>

      <form action="#" method="get" class="search-form">
        <input type="text" placeholder="Nhập từ khóa tìm kiếm">
        <button type="title">Tìm kiếm</button>
      </form>
    </div>
  </header>

</body>
</html>