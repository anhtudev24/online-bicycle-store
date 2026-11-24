<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>XE ĐẠP</title>
   <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/><!--Link icon-->
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="CSS copy/reset.css" />
    <link rel="stylesheet" href="CSS copy/base.css" />
    <link rel="stylesheet" href="CSS copy/styles.css" />
     <script defer src="JS/script.js"></script>
</head>
<body>
    <?php 
        session_start();
        require_once __DIR__ . '/nguoidung.php';
        require_once __DIR__.'/config.php';
        $sql = "SELECT Bike_id AS `Mã xe`, Mausac AS `Màu sắc`, Tenxe AS `Tên xe`, thuonghieu.Tenthuonghieu AS `Thương hiệu` ,Hinhanh AS `Hình ảnh`, Giaban AS `Giá bán` FROM xedap JOIN thuonghieu ON xedap.Brand_id = thuonghieu.Brand_id;";
      //thuc hien truy van
        $result = mysqli_query($conn, $sql);
        $cat = $result->fetch_assoc(); // $cat là mảng kết hợp
        // $hinhanh = $cat['Hình ảnh'];


    ?>



  <form action="" method="post">
    <!-- HEADER -->
  <header>
    <div class="container">
      <div class="row-flex">
        
        <!-- Logo -->
        <a href="index.php" class="header-logo">
          <img src="Video/logo.png" alt="logo">
        </a>
        
        <!-- Thanh điều hướng -->
        <div class="header-nav">
          <nav>
            <ul class="main-menu">
              <li><a href="index.php" class="homeLink">Trang chủ</a></li>
              <li>
                <a href="bike.php">Xe đạp</a>
                <ul class="submenu">
                  <li><a href="mountain_bike.php">Xe đạp leo núi</a></li>
                  <li><a href="road_bike.php">Xe đạp đường trường</a></li>
                  <li><a href="city_bike.php">Xe đạp thành phố</a></li>
                  <li><a href="kid_bike.php">Xe đạp trẻ em</a></li>
                </ul>
              </li>
              <li><a href="flashsale.php">Flash sale</a></li>
              <li><a href="news.php">Tin tức</a></li>
              <li><a href="contact.php">Cửa hàng</a></li>
            </ul>
          </nav>
        </div>

        <!-- Thanh tìm kiếm -->
        <div class="header-search" id="searchBar">
          <input type="text" id="searchInput" placeholder="Tìm kiếm...">
          <i class="ri-search-line" style="cursor: pointer;"></i>
        </div>

        <!-- Icon giỏ hàng và người dùng -->
        <div class="header-cart">
          <a href="<?php echo Nguoidung::loginInfo() ? 'cart.php' : '#' ?>">
            <i class="ri-shopping-cart-2-line"></i>
            <span class="cart-badge" id="cartCount">0</span>
          </a>
        </div>
        <div class="header-user">
          <a href="login.php">
            <i class="ri-user-line"></i>
          </a>
        </div>
      </div>
    </div>
  </header>
    <!-- NÚT LIÊN HỆ -->
  <div class="contact-buttons">
    <a href="#" id="open-form"><i class="ri-phone-line"></i></a>
    <a href="#" id="open-form-2"><i class="ri-chat-1-line"></i></a>
  </div>
  <!-- Form kết nối -->
  <div class="connect-form-wrapper hidden" id="connect-form">
    <div class="connect-form">
      <span class="close-btn" id="close-form">&times;</span>
      <div class="form-header">
        <h2>Kết nối ngay với tôi</h2>
        <p>"Mỗi con đường chinh phục được, mỗi giới hạn trong lòng được phá bỏ..."</p>
      </div>
      <form class="form_contact">
        <div class="form-row-contact">
          <input type="text" placeholder="Họ tên *" required />
          <input type="tel" placeholder="Số điện thoại *" required />
        </div>
        <input type="email" placeholder="Email *" required />
        <textarea class="textarea" placeholder="Địa chỉ *" rows="4" required></textarea>
        <button type="submit" class="submit-btn">Gửi</button>
      </form>
    </div>
  </div>
  <div class="breadcrumb-wrapper">
      <nav class="breadcrumb-top">
        <a href="index.php">Trang chủ</a> /<span>Xe đạp </span>
      </nav>
  </div>
  <!-- SLIDEBAR BỘ LỌC -->
  <div class="product-container">
    <aside class="filter-sidebar">
      <h2>XE ĐẠP</h2>

      <div class="filter-group" data-type="brand">
        <h4>THƯƠNG HIỆU</h4>
        <label><input type="checkbox" value="EGA Bike"> EGA Bike</label>
        <label><input type="checkbox" value="Thương hiệu: Khác"> Khác</label>
      </div>

      <div class="filter-group" data-type="color">
        <h4>MÀU SẮC</h4>
        <label><input type="checkbox" value="Màu: Đen"> Đen</label>
        <label><input type="checkbox" value="Màu: Trắng"> Trắng</label>
        <label><input type="checkbox" value="Màu: Khác"> Khác</label>
      </div>

      <div class="filter-group" data-type="price">
        <h4>MỨC GIÁ</h4>
        <label><input type="checkbox" value="Giá dưới 5,000,000₫"> Giá dưới 5,000,000₫</label>
        <label><input type="checkbox" value="10,000,000₫ - 15,000,000₫"> 10,000,000₫ - 15,000,000₫</label>
        <label><input type="checkbox" value="15,000,000₫ - 20,000,000₫"> 15,000,000₫ - 20,000,000₫</label>
        <label><input type="checkbox" value="Giá trên 20,000,000₫"> Giá trên 20,000,000₫</label>
      </div>

      <div class="filter-group" data-type="delivery">
        <h4>DỊCH VỤ GIAO HÀNG</h4>
        <label><input type="checkbox" value="Miễn phí giao hàng"> Miễn phí giao hàng</label>
        <label><input type="checkbox" value="Giao hàng nhanh 4h"> Giao hàng nhanh 4h</label>
        <label><input type="checkbox" value="Giao hàng tiết kiệm"> Giao hàng tiết kiệm</label>
      </div>
    </aside>

    <!-- SẢN PHẨM-->
    <section class="product-list-area">
      <!-- sắp xếp sp -->
      <div class="product-sort-bar">
        <div class="sort-dropdown">
          Sắp xếp theo:
          <select>
            <option value="Tên A - Z">Tên A - Z</option>
            <option value="Tên Z - A">Tên Z - A</option>
            <option value="Giá thấp - cao">Giá thấp - cao</option>
            <option value="Giá cao - thấp">Giá cao - thấp</option>
          </select>
        </div>
      </div>
      <!-- danh sách sản phẩm -->
      <div class="product-grid">
        <!-- Sản phẩm 1: Mỗi sản phẩm cần thêm data-color, data-price để lọc -->
        <?php foreach($result as $cat) : ?>
        <div class="product-card" data-brand="EGA Bike" data-color="Màu: <?php echo $cat['Màu sắc'] ?>" data-price=<?php echo $cat['Giá bán'] ?> data-delivery = "Miễn phí giao hàng, Giao hàng nhanh 4h" >
          <a href="city_bike_1.php?id=<?php echo $cat['Mã xe']; ?>" class="product-link">
            <div class="product-image">
              <img src="img/<?php echo $cat['Hình ảnh'] ?>" alt="Xe đạp leo núi MTB Talon 3"/>
            </div>
            <div class="product-brand"><?php echo $cat['Thương hiệu'] ?></div>
            <div class="product-title" ><?php echo $cat['Tên xe'] ?></div>
            <div class="product-rating">★★★★☆</div>
            <div class="product-price">
              <span class="current-price"><?php echo number_format($cat['Giá bán'], 0, ',', '.') . 'đ'; ?></span>
              <span class="old-price"><?php echo number_format($cat['Giá bán'] * (1 + 0.30), 0, ',', '.') . 'đ'; ?></span>
              <span class="discount">-30%</span>
            </div>
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </section>
  </div>
  </form>

  
<script src="JS/active.js" defer></script>
<script src="JS/search.js"></script>
<script src="JS/cart.js"></script>
<script src="JS/add-to-cart.js"></script>
<script src="JS/form.js"></script>
</body>

  <!-- FOOTER -->
<footer class="footer">
  <div class="footer-container">
    <!-- Cột 1: Logo và thông tin liên hệ -->
    <div class="footer-column">
      <a href="index.php">
        <img src="Video/logo.png" alt="EGA BIKE Logo" class="logo" />
      </a>
      <p><i class="fa fa-map-marker"></i>Đại học Kiến Trúc, Tp.HN</p>
      <p><i class="fa fa-phone"></i> 0333666888</p>
      <p><i class="fa fa-envelope"></i> group3@hau.com</p>
      <p>&copy; Bản quyền thuộc về <strong>GROUP3</strong> | Cung cấp bởi <strong>Group3</strong></p>
    </div>

    <!-- Cột 2: Hỗ trợ khách hàng -->
    <div class="footer-column">
      <h3>HỖ TRỢ KHÁCH HÀNG</h3>
      <ul>
        <li><a href="#">Cửa hàng</a></li>
        <li><a href="#">Giới thiệu</a></li>
        <li><a href="#">Liên hệ</a></li>
        <li><a href="#">Câu hỏi thường gặp</a></li>
      </ul>
    </div>

    <!-- Cột 3: Chính sách -->
    <div class="footer-column">
      <h3>CHÍNH SÁCH</h3>
      <ul>
        <li><a href="#">Chính sách đổi trả</a></li>
        <li><a href="#">Chính sách bảo mật</a></li>
        <li><a href="#">Điều khoản dịch vụ</a></li>
        <li><a href="#">Chính sách giao hàng</a></li>
      </ul>
    </div>

    <!-- Cột 4: Đăng ký nhận tin và mạng xã hội -->
    <div class="footer-column">
      <h3>ĐĂNG KÝ NHẬN TIN</h3>
      <div class="newsletter">
        <input type="email" placeholder="Nhập địa chỉ email">
        <button>Đăng ký</button>
      </div>
    </div>
  </div>
</footer>
</html>