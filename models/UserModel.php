<?php
     require_once __DIR__ . '/../config/db.php';
     class UserModel{
          private $pdo;
          
          public function __construct($pdo){
               $this -> pdo = $pdo;
          }

            public function register($username, $password, $fullname) {
               try {
                    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
                    $stmt = $this->pdo->prepare("INSERT INTO users (username, password, fullname, role_id) VALUES (:username, :password, :fullname, 2)");
                    $stmt->bindParam(':username', $username);
                    $stmt->bindParam(':password', $hashedPassword);
                    $stmt->bindParam(':fullname', $fullname);
                    return $stmt->execute();
               } catch (PDOException $e) {
                    return false;
               }
          }
     }
?>