<?php 
    require_once __DIR__ . '/../config/database.php';
// nguoidung.php
class Nguoidung {
    public static function loginInfo() {
        return $_SESSION['cus_login'] ?? null;
    }
}


?>