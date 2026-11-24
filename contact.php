<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/><!--Link icon-->
  <title>Hệ thống cửa hàng</title>
  <link rel="stylesheet" href="CSS copy/reset.css">
  <link rel="stylesheet" href="CSS copy/base.css">
  <link rel="stylesheet" href="CSS copy/styles.css">
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>
<body>
<?php 
    session_start();
    require_once __DIR__ . '/nguoidung.php';
    require_once __DIR__.'/config.php';

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
        <div class="header-search">
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
  <a href="#" class="toggle-contact-form"><i class="ri-phone-line"></i></a>
  <a href="#" class="toggle-contact-form"><i class="ri-chat-1-line"></i></a>
</div>
        <div class="breadcrumb-wrapper">
            <nav class="breadcrumb-top">
              <a href="index.php">Trang chủ </a>/ <span>Hệ thống cửa hàng</span>
            </nav>
        </div>
    

<div class="store-system">
  <h2 class="title_contact">Hệ thống cửa hàng</h2>
  <div class="container_contact">
    <div class="store-search">
      <h3 class="search-title">Chi nhánh toàn quốc </h3>
      <label for="city">Chọn tỉnh thành</label>
      <select id="city" style="cursor: pointer;">
        <option value="hn">Hà Nội</option>
        <option value="hcm">Hồ Chí Minh</option>
      </select>

      <label for="branch">Chọn cửa hàng</label>
      <select id="branch" style="cursor: pointer;">
        <!-- Tùy chọn sẽ được JS tạo động -->
      </select>

      <div class="address-box">
        <p><i class="fa fa-map-marker"></i>Địa chỉ</p>
        <p id="branch-address">Vui lòng chọn cửa hàng</p>
      </div>
    </div>

    <div class="map-box">
      <iframe
        id="map-frame"
        src=""
        width="600"
        height="450"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>
  </div>
  <script src="JS/contact.js"></script>
</div>
  <!-- Form ẩn/hiện -->
<!-- Nút mở form -->
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



   <!-- FOOTER -->
<footer class="footer">
  <div class="footer-container">
    <!-- Cột 1: Logo và thông tin liên hệ -->
    <div class="footer-column">
      <img src="Video/logo.png"  class="logo" >
      <p><i class="fa fa-map-marker"></i>Đại học Kiến Trúc, Hà Nội</p>
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
<script src="JS/search.js"></script>
<script src="JS/active.js" defer></script>
<script src="JS/cart.js"></script>
<script src="JS/add-to-cart.js"></script>
<script src="JS/form.js"></script>
</form>
  </body>
</html>

