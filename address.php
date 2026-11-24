<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/><!--Link icon-->
  <title>Cart</title>
  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/base.css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<form action="" method="post">
  
  <!-- HEADER -->
  <header>
    <div class="container">
      <div class="row-flex">
        
        <!-- Logo -->
        <a href="index.php" class="header-logo">
          <img src="assets/images/logo.png" alt="logo">
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
                  <li><a href="kids_bike.php">Xe đạp trẻ em</a></li>
                </ul>
              </li>
              <li><a href="flashsale.html">Flash sale</a></li>
              <li><a href="news.html">Tin tức</a></li>
              <li><a href="contact.html">Cửa hàng</a></li>
            </ul>
          </nav>
        </div>

        <!-- Thanh tìm kiếm -->
        <div class="header-search" id="searchBar">
          <input type="text" id="searchInput" placeholder="Tìm kiếm...">
          <i class="ri-search-line"></i>
        </div>


        <!-- Icon giỏ hàng và người dùng -->
        <div class="header-cart">
          <a href="cart.php">
            <i class="ri-shopping-cart-2-line"></i>
            <span class="cart-badge" id="cartCount">0</span>
          </a>
        </div>
        <div class="header-user">
          <a href="#">
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


<!--= CART =-->
<section class="cart">
 <section class="cart">
  <div class="container">
    <!-- Cart Top Steps -->
    <div class="cart-top step-2"> <!-- Thêm class step-2 để CSS dễ nhận biết -->
      <div class="cart-steps">
        <div class="cart-step">
          <div class="circle"><i class="ri-shopping-cart-2-line"></i></div>
          <p>Giỏ hàng</p>
        </div>
        <div class="line"></div>
        <div class="cart-step active step-2"> <!-- Thêm active và step-2 -->
          <div class="circle"><i class="ri-map-pin-line"></i></div>
          <p>Địa chỉ</p>
        </div>
        <div class="line"></div>
        <div class="cart-step step-3">
          <div class="circle"><i class="ri-bank-card-line"></i></div>
          <p>Thanh toán</p>
        </div>
      </div>
    </div>
  </div>
</section>


 <section class="shipping-info-section-address">
  <div class="container-address">
    <h2>Thông tin giao hàng</h2>
    <!-- <p>Bạn đã có tài khoản? <a href="#">Đăng nhập</a></p> -->

    <form class="shipping-form-address" action="vnpay_php/index.php" method="post">
      <!-- Các trường form -->
      <div class="form-row-address row-2-address">
        <input type="text" name="full_name" placeholder="Họ và tên" required>
        <input type="tel" name="phone"  placeholder="Số điện thoại" required>
      </div>

      <div class="form-row-address">
        <input type="text" name="Emails" placeholder="Email" required>
      </div>

      <div class="form-row-address" >
        <input type="text" name="address" placeholder="Địa chỉ giao hàng" required>
      </div>

      <div class="form-row-address row-2-address">
        <select id="province" name="province" style="cursor: pointer;" required>
          <option value="">Chọn tỉnh/thành</option>
          <option value="hanoi">Hà Nội</option>
          <option value="hcm">TP. Hồ Chí Minh</option>
          <option value="danang">Đà Nẵng</option>
          <option value="cantho">Cần Thơ</option>
          <option value="haiphong">Hải Phòng</option>
          <option value="hue">Thừa Thiên Huế</option>
        </select>

        <select id="district" name="district" style="cursor: pointer;" required>
          <option value="">Chọn quận/huyện</option>
        </select>
      </div>

      <!-- Nút điều hướng -->
      <div class="form-row buttons-vertical-address">
        <a href="cart.php" class="back-to-cart-address">Giỏ hàng</a>
        <button id="btn-to-step-3" type="submit" style="width: 257px;" class="continue-btn-address">Tiếp tục đến phương thức thanh toán</button>
      </div>
    </form>
  </div>
</section>



<!--= END CART =-->
 
 <!-- FOOTER -->
<footer class="footer">
  <div class="footer-container">
    <!-- Cột 1: Logo và thông tin liên hệ -->
    <div class="footer-column">
      <a href="index.php">
        <img src="assets/images/logo.png" alt="EGA BIKE Logo" class="logo" />
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
</form>
<script src="assets/js/cart.js"></script>
<script src="assets/js/add-to-cart.js"></script>
  <script src="assets/js/index.js"></script>
  <script src="assets/js/search.js"></script>
  <script src="assets/js/active.js" defer></script>
  <script src="assets/js/form.js"></script>
  <script src="assets/js/cartTop.js"></script>
  <script src="assets/js/address.js"></script>
</body>
</html>

