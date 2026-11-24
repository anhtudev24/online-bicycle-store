<?php
// cart-logic.php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/User.php';

session_start();
$User_id = Nguoidung::loginInfo()['User_id'];

$sql = "SELECT id, Bike_id, quantity, price FROM chitietdonhang WHERE User_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $User_id);
$stmt->execute();
$result = $stmt->get_result();


$tongtien = 0;
while ($row = $result->fetch_assoc()) {
    $tongtien += $row['quantity'] * $row['price'];
}
