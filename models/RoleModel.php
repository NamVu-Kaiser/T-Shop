<?php
     require_once __DIR__ . '/../config/db.php';
     class RoleModel{
          private $pdo;
          
          public function __construct($pdo){
               $this -> pdo = $pdo;
          }
     }
?>