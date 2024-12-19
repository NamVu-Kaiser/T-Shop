<?php
require_once __DIR__ . '/../../models/ProductModel.php';
require_once __DIR__ . '/../shares/header.php';

$productModel = new ProductModel($pdo);
$products = $productModel->getAllProducts();
?>
<?php
session_start();

// Khởi tạo giỏ hàng nếu chưa tồn tại
if (!isset($_SESSION['Cart'])) {
  $_SESSION['Cart'] = [];
}

// Hàm thêm sản phẩm vào giỏ hàng
function themSanPham($id, $ten, $gia, $soluong) {
  // Kiểm tra sản phẩm đã tồn tại trong giỏ hàng chưa
  if (isset($_SESSION['cart'][$id])) {
    $_SESSION['cart'][$id]['soluong'] += $soluong;
  } else {
    $_SESSION['cart'][$id] = [
      'ten' => $ten,
      'gia' => $gia,
      'soluong' => $soluong,
    ];
  }
}

// Hàm cập nhật số lượng sản phẩm trong giỏ hàng
function capNhatSoLuong($id, $soluong) {
  if (isset($_SESSION['cart'][$id])) {
    $_SESSION['cart'][$id]['soluong'] = $soluong;
  }
}

// Hàm xóa sản phẩm khỏi giỏ hàng
function xoaSanPham($id) {
  if (isset($_SESSION['cart'][$id])) {
    unset($_SESSION['cart'][$id]);
  }
}

// Xử lý các hành động từ form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['them'])) {
    themSanPham($_POST['id'], $_POST['ten'], $_POST['gia'], $_POST['soluong']);
  } elseif (isset($_POST['capnhat'])) {
    capNhatSoLuong($_POST['id'], $_POST['soluong']);
  } elseif (isset($_POST['xoa'])) {
    xoaSanPham($_POST['id']);
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Giỏ hàng</title>
  <style>
    h2,p {
      text-align: center;
      color: blue;
    }
  </style>
</head>
<body>

<h2>Giỏ hàng của bạn</h2>

<?php if (empty($_SESSION['cart'])): ?>
  <p>Giỏ hàng của bạn đang trống</p>
<?php else: ?>
  <table>
    <thead>
      <tr>
        <th>Sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Tổng</th>
        <th>Hành động</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($_SESSION['cart'] as $id => $sanpham): ?>
        <tr>
          <td><?php echo $sanpham['ten']; ?></td>
          <td>
            <form method="post">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <input type="number" name="soluong" value="<?php echo $sanpham['soluong']; ?>">
              <button type="submit" name="capnhat">Cập nhật</button>
            </form>
          </td>
          <td><?php echo number_format($sanpham['gia']); ?></td>
          <td><?php echo number_format($sanpham['gia'] * $sanpham['soluong']); ?></td>
          <td>
            <form method="post">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <button type="submit" name="xoa">Xóa</button>
            </form>
          </td>
        </tr>
      <?php endforeach; 
      ?>
    </tbody>
  </table>

  <?php
    $tongtien = 0;
    foreach ($_SESSION['cart'] as $sanpham) {
      $tongtien += $sanpham['gia'] * $sanpham['soluong'];
    }
  ?>

  <p>Tổng giá trị đơn hàng: <?php echo number_format($tongtien); ?></p>

  <a href="thanhtoan.php">Thanh toán</a>

<?php endif; ?>

</body>
</html>