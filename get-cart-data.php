<?php
require_once __DIR__.'/config.php';
require_once __DIR__ . '/nguoidung.php';
// session_start();

if (!Nguoidung::loginInfo()) {
    return; // hoặc http_response_code(401);
}

$User_id = Nguoidung::loginInfo()['User_id'];
$sql = "SELECT Bike_id, quantity, price FROM chitietdonhang WHERE User_id = '$User_id'";
$result = mysqli_query($conn, $sql);

$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Chỉ trả dữ liệu, không in ra nếu chưa cần:
return $data;
