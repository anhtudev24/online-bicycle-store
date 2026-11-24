<?php
$conn = new mysqli("localhost","root","1234","quanlyxedap");

// Check connection
if ($conn -> connect_errno) {
  echo "Lỗi kết nối cơ sở dữ liệu!" . $conn -> connect_error;
  exit();
} 

?>