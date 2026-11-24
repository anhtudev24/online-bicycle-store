<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin - Quản lý sản phẩm</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
  </head>

  <body>
    <?php 
        require_once __DIR__ . '/../config/database.php';
        $sql = "SELECT 
    Xedap.Bike_id AS `Mã xe`,
    Xedap.Tenxe AS `Tên xe`,
    Thuonghieu.Tenthuonghieu AS `Thương hiệu`,
    Loaixe.Tenloaixe AS `Loại xe`,
    Xedap.Giaban AS `Giá bán`,
    Xedap.Soluong AS `Số lượng`,
    Xedap.Hinhanh AS `Hình ảnh`
FROM 
    Xedap
JOIN 
    Thuonghieu ON Xedap.Brand_id = Thuonghieu.Brand_id
JOIN 
    Loaixe ON Xedap.Loaixe_id = Loaixe.Loaixe_id;
";
      //thuc hien truy van
        $result = mysqli_query($conn, $sql);
    ?>

    <form action="" method="post">
      <div class="wrapper">
      <aside class="sidebar">
        <h2>🚲 BikeShop</h2>
        <nav>
          <a href="products.php"
            >🏠 Dashboard</a
          >
          <a
            href="sanpham.html"
            class="active"
            >🛒 Quản lý sản phẩm</a
          >
          <a href="donHang.html"
            >🧾 Đơn hàng</a
          >
          <a href="customer.php">👥 Khách hàng</a>
          <a href="#">📊 Thống kê</a>
        </nav>
      </aside>
      <main class="main-content">
        <header class="topbar">
          <input type="text" id="searchInput" placeholder="Tìm kiếm..." />
        </header>
        <section class="page-content">
          <h1>Quản Lý Sản Phẩm</h1>
          <!-- Form thêm sản phẩm -->
          <!-- <form id="addForm">
            <input type="text" id="name" placeholder="Tên sản phẩm" required />
            <input type="number" id="price" placeholder="Giá" required />
            <input type="text" id="image" placeholder="Link ảnh" required />
            <button type="submit">Thêm sản phẩm</button>
          </form> -->

          <!-- Bảng hiển thị sản phẩm -->
          <table
            border="1"
            cellpadding="10"
            cellspacing="0"
            style="margin-top: 20px; width: 100%"
          >
            <thead>
              <tr>
                <th>ID</th>
                <th>Tên xe</th>
                <th>Thương hiệu</th>
                <th>Loại xe</th>
                <th>Giá bán</th>
                <th>Số lượng</th>
                <th>Hình ảnh</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody id="orderTable">
              <?php foreach($result as $cat) : ?>
              <tr>
                <td><?php echo $cat['Mã xe'] ?></td>
                <td><?php echo $cat['Tên xe'] ?></td>
                <td><?php echo $cat['Thương hiệu'] ?></td>
                <td><?php echo $cat['Loại xe'] ?></td>
                <td><?php echo $cat['Giá bán'] ?></td>
                <td><?php echo $cat['Số lượng'] ?></td>
                <td>
                  <img style="width: 90px;" src="../assets/images/<?php echo $cat['Hình ảnh'] ?>">
                  
                </td>
                <td><div style="display: flex;"><a href="sua.php?id=<?php echo $cat['Mã xe']; ?>" style="text-decoration: none;">✏️</a>
                <a onclick="return Del('<?php echo $cat['Tên xe']; ?>')" href="xoa.php?id=<?php echo $cat['Mã xe']; ?>" style="text-decoration: none;">❌</a>
</div></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <button><a href="them.php">Them moi</a></button>
        </section>
      </main>
    </div>
    <script>
      function toggleDropdown() {
        document.getElementById("dropdown").classList.toggle("hidden");
      }
      document
        .getElementById("searchInput")
        .addEventListener("input", function () {
          const keyword = this.value.toLowerCase();
          const rows = document.querySelectorAll("#orderTable tr");
          rows.forEach((row) => {
            const text = row.innerText.toLowerCase();
            row.style.display = text.includes(keyword) ? "" : "none";
          });
        });
    </script>

    <script>
      function Del(name) {
        return confirm("Bạn có chắc chắn muốn xóa sản phẩm: " + name + " ?")
      }
    </script>
    </form>
  </body>
</html>
