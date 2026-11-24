

<?php
require_once __DIR__.'/config.php';
require_once __DIR__.'/nguoidung.php';
session_start();

$User_id = Nguoidung::loginInfo()['User_id'];
$Bike_id = $_POST['bike_id'];
$quantity = $_POST['quantity'];

// Cập nhật số lượng
$sql = "UPDATE chitietdonhang SET quantity = ? WHERE User_id = ? AND Bike_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iii", $quantity, $User_id, $Bike_id);
$stmt->execute();

echo "OK";
?>
