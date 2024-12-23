<?php
require_once __DIR__ . '../../models/UserModel.php';

class UserController {
    private $userModel;

    // Constructor nhận đối tượng PDO và khởi tạo UserModel
    public function __construct($pdo) {
        if (!$pdo) {
            throw new Exception("PDO connection is not provided.");
        }
        $this->userModel = new UserModel($pdo);
    }

    // Kiểm tra tên đăng nhập có tồn tại không
    private function usernameExists($user_name) {
        $usernames = $this->userModel->getAllUsernames();
        return in_array($user_name, $usernames);
    }

    // Đăng ký tài khoản (xử lý logic kiểm tra tên đăng nhập trước)
    public function register($fullname, $user_name, $password) {
        if ($this->usernameExists($user_name)) {
            return "Tên đăng nhập đã tồn tại.";
        }
        $result = $this->userModel->register($fullname, $user_name, $password);
        return $result ? "Đăng ký thành công!" : "Đăng ký thất bại!";
    }

    // Đăng nhập tài khoản
    public function login($user_name, $password) {
        $user = $this->userModel->login($user_name, $password);
        if (!$user) {
            if (!$this->usernameExists($user_name)) {
                return ['status' => false, 'error' => 'Tên đăng nhập không tồn tại.'];
            } else {
                return ['status' => false, 'error' => 'Mật khẩu không đúng.'];
            }
        }
        return ['status' => true, 'user' => $user];
    }
}
?>
