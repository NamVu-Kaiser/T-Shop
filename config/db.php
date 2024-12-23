<?php
     $host = 'localhost';
     $dbname = 'Ecommerce_Shop';
     $username = 'root';
     $password = '';

     try {
          $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     } catch (PDOException $ex) {
     die("Kết nối cơ sở dữ liệu thất bại: " . $ex->getMessage());
     }
?>
