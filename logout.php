<?php
session_start();
unset($_SESSION['cus_login']); // Xoá thông tin đăng nhập
session_destroy(); // (tuỳ chọn) xoá toàn bộ session

// Chuyển hướng về trang đăng nhập hoặc trang chủ
header('Location: index.php'); // hoặc login.php
exit;
?>