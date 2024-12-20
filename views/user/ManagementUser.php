<?php
require_once __DIR__ . '/../../config/db.php'; // Đảm bảo kết nối cơ sở dữ liệu

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['them'])) {
        $ten = $_POST['ten'];
        $email = $_POST['email'];
        $matkhau = password_hash($_POST['matkhau'], PASSWORD_DEFAULT);
        $vaitro = $_POST['vaitro'];

        try {
            $sql = "INSERT INTO users (ten, email, matkhau, vaitro) VALUES (:ten, :email, :matkhau, :vaitro)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['ten' => $ten, 'email' => $email, 'matkhau' => $matkhau, 'vaitro' => $vaitro]);
            echo "Thêm người dùng thành công!";
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    } elseif (isset($_POST['sua'])) {
        $id = $_POST['id'];
        $ten = $_POST['ten'];
        $email = $_POST['email'];

        try {
            $sql = "UPDATE users SET ten=:ten, email=:email WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['ten' => $ten, 'email' => $email, 'id' => $id]);
            echo "Sửa người dùng thành công!";
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    } elseif (isset($_POST['xoa'])) {
        $id = $_POST['id'];

        try {
            $sql = "DELETE FROM users WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            echo "Xóa người dùng thành công!";
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    } elseif (isset($_POST['khoa'])) {
        $id = $_POST['id'];

        try {
            $sql = "UPDATE users SET trangthai='khoa' WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            echo "Khóa người dùng thành công!";
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    } elseif (isset($_POST['mo_khoa'])) {
        $id = $_POST['id'];

        try {
            $sql = "UPDATE users SET trangthai='hoatdong' WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            echo "Mở khóa người dùng thành công!";
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    } elseif (isset($_POST['datlai_matkhau'])) {
        $id = $_POST['id'];
        $matkhau_moi = password_hash("matkhau123", PASSWORD_DEFAULT);

        try {
            $sql = "UPDATE users SET matkhau=:matkhau WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['matkhau' => $matkhau_moi, 'id' => $id]);
            echo "Đặt lại mật khẩu thành công!";
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
}

try {
    $sql = "SELECT * FROM users";
    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý người dùng</title>
</head>
<body>
  <h2>Danh sách người dùng</h2>
  <table border="1">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>Email</th>
        <th>Vai trò</th>
        <th>Trạng thái</th>
        <th>Hành động</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if (!empty($users)) {
        foreach ($users as $user) {
          echo "<tr>";
          echo "<td>" . htmlspecialchars($user['id']) . "</td>";
          echo "<td>" . htmlspecialchars($user['ten']) . "</td>";
          echo "<td>" . htmlspecialchars($user['email']) . "</td>";
          echo "<td>" . htmlspecialchars($user['vaitro']) . "</td>";
          echo "<td>" . htmlspecialchars($user['trangthai']) . "</td>";
          echo "<td>";
          echo "<form method='post' action=''>";
          echo "<input type='hidden' name='id' value='" . htmlspecialchars($user['id']) . "'>";
          echo "<button type='submit' name='sua'>Sửa</button>";
          echo "<button type='submit' name='xoa'>Xóa</button>";
          if ($user['trangthai'] == 'hoatdong') {
            echo "<button type='submit' name='khoa'>Khóa</button>";
          } else {
            echo "<button type='submit' name='mo_khoa'>Mở khóa</button>";
          }
          echo "<button type='submit' name='datlai_matkhau'>Đặt lại mật khẩu</button>";
          echo "</form>";
          echo "</td>";
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='6'>Không có người dùng nào</td></tr>";
      }
      ?>
    </tbody>
  </table>

  <h2>Thêm người dùng</h2>
  <form method="post" action="">
    <label for="ten">Tên:</label>
    <input type="text" id="ten" name="ten" required><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="matkhau">Mật khẩu:</label>
    <input type="password" id="matkhau" name="matkhau" required><br><br>
    <label for="vaitro">Vai trò:</label>
    <select id="vaitro" name="vaitro">
      <option value="quantri">Quản trị</option>
      <option value="nguoidung">Người dùng</option>
    </select><br><br>
    <button type="submit" name="them">Thêm</button>
  </form>

  <?php $pdo = null; // Đóng kết nối cơ sở dữ liệu ?>
</body>
</html>