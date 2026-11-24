<?php
header('Content-Type: application/json');

// Kết nối CSDL
$conn = new mysqli("localhost", "root", "1234", "quanlyxedap");
if ($conn->connect_error) {
    die(json_encode(['error' => 'Kết nối CSDL thất bại']));
}

// Lấy dữ liệu JSON từ JS
$raw = file_get_contents("php://input");
$data = json_decode($raw, true); // [{id: 'sp001', qty: 2}, {...}]

$results = [];

foreach ($data as $item) {
    $id = $conn->real_escape_string($item['id']);
    $qty = intval($item['qty']);

    $sql = "SELECT * FROM products WHERE id = '$id'";
    $res = $conn->query($sql);

    if ($res && $row = $res->fetch_assoc()) {
        $row['qty'] = $qty;
        $results[] = $row;
    }
}

echo json_encode($results);
?>
