<?php
    require_once __DIR__.'/config.php';
    require_once __DIR__.'/nguoidung.php';
    session_start();

    $User_id = Nguoidung::loginInfo()['User_id'];
    $Bike_id = $_POST['bike_id'];
    $quantity = $_POST['quantity'];

    // Cập nhật số lượng
    $sql = "DELETE FROM chitietdonhang WHERE Bike_id = ? AND User_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $Bike_id, $User_id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Đã xóa";
    } else {
        echo "Không tìm thấy sản phẩm";
    }
    echo "OK";
?>