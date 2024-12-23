<?php
class UserModel {
    private $pdo;

    // Constructor nhận đối tượng PDO
    public function __construct($pdo) {
        if (!$pdo) {
            throw new Exception("PDO connection is not provided.");
        }
        $this->pdo = $pdo;
    }

    // Đăng ký tài khoản
    public function register($fullname, $user_name, $password) {
        // $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        
        // // In ra giá trị băm mật khẩu để kiểm tra
        // echo "Password (register): " . $password . "<br>";
        // echo "Hashed Password (register): " . $hashedPassword . "<br>";
        
        $stmt = $this->pdo->prepare("
            INSERT INTO users (fullname, user_name, password, role_id) 
            VALUES (:fullname, :user_name, :password, 2)
        ");
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':user_name', $user_name);
        $stmt->bindParam(':password', $password);
        
        return $stmt->execute();
    }

    // Đăng nhập tài khoản
    public function login($user_name, $password) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE user_name = :user_name AND password = :password");
        $stmt->bindParam(':user_name', $user_name);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            return $user; // Trả về thông tin người dùng nếu mật khẩu khớp
        }

        return false; // Sai tên đăng nhập hoặc mật khẩu
        }

    // Kiểm tra tất cả tên người dùng (để xác minh trùng tên)
    public function getAllUsernames() {
        $stmt = $this->pdo->prepare("SELECT user_name FROM users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }
}
?>
