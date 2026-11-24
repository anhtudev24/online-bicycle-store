<?php
session_start();
require_once __DIR__ . '/../config/database.php';

function formatCurrency($num) {
    return number_format($num, 0, ',', '.') . '₫';
}

$customer_id = $_SESSION['user_id'] ?? 1; // Dùng session nếu có, không thì mặc định 1

// Xử lý thêm sản phẩm vào giỏ
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $product_id = (int)$_POST['product_id'];
    $qty = isset($_POST['qty']) ? (int)$_POST['qty'] : 1;

    $stmt = $conn->prepare("SELECT id, quantity FROM carts WHERE product_id = ? AND customer_id = ?");
    $stmt->bind_param("ii", $product_id, $customer_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($item = $result->fetch_assoc()) {
        $newQty = $item['quantity'] + $qty;
        $update = $conn->prepare("UPDATE carts SET quantity = ? WHERE id = ?");
        $update->bind_param("ii", $newQty, $item['id']);
        $update->execute();
    } else {
        $insert = $conn->prepare("INSERT INTO carts (customer_id, product_id, quantity) VALUES (?, ?, ?)");
        $insert->bind_param("iii", $customer_id, $product_id, $qty);
        $insert->execute();
    }

    header("Location: ../pages/cart.php"); // quay lại giỏ hàng sau khi thêm
    exit();
}

// Hiển thị giỏ hàng
$sql = "SELECT c.id, c.quantity, p.price, p.title, p.image
        FROM carts c
        JOIN products p ON c.product_id = p.id
        WHERE c.customer_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $customer_id);
$stmt->execute();
$result = $stmt->get_result();

$totalQuantity = 0;
$totalPrice = 0;

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Giỏ hàng</title>
</head>
<body>
    <h2>Giỏ hàng của bạn</h2>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Ảnh</th>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows === 0): ?>
                <tr><td colspan="4">Giỏ hàng đang trống</td></tr>
            <?php else: ?>
                <?php while ($row = $result->fetch_assoc()): 
                    $itemTotal = $row['quantity'] * $row['price'];
                    $totalQuantity += $row['quantity'];
                    $totalPrice += $itemTotal;
                ?>
                <tr>
                    <td><img src="<?= $row['image'] ?>" width="80"></td>
                    <td><?= htmlspecialchars($row['title']) ?></td>
                    <td><?= $row['quantity'] ?></td>
                    <td><?= formatCurrency($itemTotal) ?></td>
                </tr>
                <?php endwhile; ?>
            <?php endif; ?>
        </tbody>
    </table>

    <p><strong>Tổng số lượng:</strong> <?= $totalQuantity ?></p>
    <p><strong>Tổng tiền:</strong> <?= formatCurrency($totalPrice) ?></p>
</body>
</html>