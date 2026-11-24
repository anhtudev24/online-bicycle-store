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

  <?php
  $errors = [];
  session_start(); // BẮT BUỘC để dùng session

  require_once __DIR__ . '/config.php';
  require_once __DIR__ . '/nguoidung.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = $_POST['email'] ?? '';
      $password = $_POST['password'] ?? '';

      if ($email == '') {
          $errors['email'] = 'Email không được để trống';
      }

      if ($password == '') {
          $errors['password'] = 'Mật khẩu không được để trống';
      }

      if (!$errors) {
          
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
      
        $sql = "SELECT * FROM quanlyxedap.user WHERE Email = '$email' AND Matkhau = '$password' AND role = 0";
        $result = mysqli_query($conn, $sql);
      
        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result); // lấy dòng dữ liệu dạng mảng
            $_SESSION['cus_login'] = $user; // lưu thông tin người dùng vào session
      
            header('Location: index.php'); // chuyển hướng sau khi đăng nhập
            exit;
        } else {
            echo "<p style='color:red;'>Email hoặc mật khẩu không chính xác.</p>";
        }
      }
  }




  ?>





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
          <i class="ri-search-line"></i>
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


<!--= CART =-->



 <section class="shipping-info-section-address">
  <div class="container-address">
    <h2>Đăng nhập</h2>
    <!-- <p>Bạn đã có tài khoản? <a href="#">Đăng nhập</a></p> -->

    <?php if($errors) :  ?>

    <div
        class="alert alert-danger"
        role="alert"
        style="color: red; padding-bottom: 12px;"
        
    >
        <?php foreach($errors as $error) : ?>
        <li style=""><?php echo $error ?></li> 
        <?php endforeach ?>
    </div>
    <?php endif ?>

    <form class="shipping-form-address" method="post" enctype="multipart/form-data">

      <div class="form-row-address">
        <input type="email" name="email" placeholder="Email" >
      </div>
      <div class="form-row-address">
        <input type="password" name="password" placeholder="Mật khẩu" >
      </div>

      <!-- <div class="form-row-address row-2-address">
        <select id="province" required>
          <option value="">Chọn tỉnh/thành</option>
          <option value="hanoi">Hà Nội</option>
          <option value="hcm">TP. Hồ Chí Minh</option>
          <option value="danang">Đà Nẵng</option>
          <option value="cantho">Cần Thơ</option>
          <option value="haiphong">Hải Phòng</option>
          <option value="hue">Thừa Thiên Huế</option>
        </select>

        <select id="district" required>
          <option value="">Chọn quận/huyện</option>
        </select>
      </div> -->

      <!-- Nút điều hướng -->
      <div class="form-row buttons-vertical-address">
        <a href="register.php" class="back-to-cart-address">Đăng ký</a>
        <button id="btn-to-step-3" type="submit" class="continue-btn-address" style="    width: 118px;">Đăng nhập</button>
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

