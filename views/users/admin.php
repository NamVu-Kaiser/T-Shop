<?php
require_once __DIR__ . '/../shares/header.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Trang quản trị Admin</title>
  <link rel="stylesheet" href="/T-Shop/media/css/admin.css">
</head>
<body>
  <div class="container">
    <h2>Quản lý sản phẩm</h2>

    <a href="#" class="btn">Thêm sản phẩm</a>

    <table>
      <thead>
        <tr>
          <th>Tên sản phẩm</th>
          <th>Giá</th>
          <th>Số lượng</th>
          <th>Hình ảnh</th>
          <th>Danh mục</th>
          <th>Hành động</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Sản phẩm A</td>
          <td>100.000</td>
          <td>10</td>
          <td><img src="/T-Shop/media/images/asusrogstrix.png" alt="Sản phẩm A"></td>
          <td>Danh mục A</td>
          <td>
            <a href="#" class="btn">Sửa</a>
            <a href="#" class="btn btn-danger">Xóa</a>
          </td>
        </tr>
        <tr>
          <td>Sản phẩm B</td>
          <td>200.000</td>
          <td>5</td>
          <td><img src="/T-Shop/media/images/banphimcorsairk95.png" alt="Sản phẩm B"></td>
          <td>Danh mục B</td>
          <td>
            <a href="#" class="btn">Sửa</a>
            <a href="#" class="btn btn-danger">Xóa</a>
          </td>
        </tr>
      </tbody>
    </table>

    <h2>Quản lý danh mục</h2>

    <a href="#" class="btn">Thêm danh mục</a>

    <table>
      <thead>
        <tr>
          <th>Tên danh mục</th>
          <th>Hành động</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Danh mục A</td>
          <td>
            <a href="#" class="btn">Sửa</a>
            <a href="#" class="btn btn-danger">Xóa</a>
          </td>
        </tr>
        <tr>
          <td>Danh mục B</td>
          <td>
            <a href="#" class="btn">Sửa</a>
            <a href="#" class="btn btn-danger">Xóa</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>