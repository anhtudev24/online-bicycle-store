<?php 
    require_once __DIR__ . '/../config/database.php';
    require_once __DIR__ . '/../models/User.php';
    session_start();
    echo '<pre>';
    // $User_id = $_POST['User_id'];
    $User_id = Nguoidung::loginInfo()['User_id'];
    $Bike_id = $_POST['Bike_id'];
    $soluong = $_POST['Soluong'];
    $sql = "SELECT id, quantity FROM chitietdonhang WHERE Bike_id = ? AND User_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $Bike_id, $User_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $cartItem = $result->fetch_assoc();
    // print_r($cartItem);

    if ($cartItem){
            $newQuantity = $cartItem['quantity'] + $soluong;
            $updateSql = "UPDATE chitietdonhang SET quantity = ? WHERE id = ?";
            $updateStmt = $conn->prepare($updateSql);
            $updateStmt->bind_param("ii", $newQuantity, $cartItem['id']);
            $updateStmt->execute();
            // echo "✅ Cập nhật số lượng thành công.";
    }else {
            // Nếu sản phẩm chưa có trong giỏ hàng => Thêm mới
            // Giả sử giá sản phẩm được truyền từ form, hoặc bạn cần truy vấn bảng `xedap` để lấy giá
            $price = $_POST['price']; // giả định giá
            $insertSql = "INSERT INTO chitietdonhang (User_id, Bike_id, quantity, price) VALUES (?, ?, ?, ?)";
            $insertStmt = $conn->prepare($insertSql);
            $insertStmt->bind_param("iiid", $User_id, $Bike_id, $soluong, $price);
            $insertStmt->execute();
            // echo "✅ Thêm sản phẩm vào giỏ hàng thành công.";
    }
    header("Location: ../pages/cart.php");
    exit;
    
?>