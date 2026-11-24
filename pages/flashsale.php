<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Flash sale</title>
   <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/><!--Link icon-->
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="../assets/css/reset.css" />
    <link rel="stylesheet" href="../assets/css/base.css" />
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <script defer src="../assets/js/script.js"></script>
</head>
<body>

<?php 
          session_start();
        require_once __DIR__ . '/../config/database.php';
        require_once __DIR__ . '/../models/User.php';

?>

<form action="" method="post">
    <!-- HEADER -->
  <header>
    <div class="container">
      <div class="row-flex">
        
        <!-- Logo -->
        <a href="../index.php" class="header-logo">
          <img src="../assets/images/logo.png" alt="logo">
        </a>
        
        <!-- Thanh điều hướng -->
        <div class="header-nav">
          <nav>
            <ul class="main-menu">
              <li><a href="../index.php" class="homeLink">Trang chủ</a></li>
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
          <a href="../auth/login.php">
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

    <!-- BANNER -->
  <section class="banner-top">
    <div class="banner-top-images">
        <img src="../assets/images/fl1.png" alt="Banner 1" class="active">
    </div>
  </section>
      <div class="countdown-box-top">
        <span>Kết thúc sau</span>
        <div class="countdown-timer-top">
          <div><span id="h">18</span><br>Giờ</div>
          <div><span id="m">52</span><br>Phút</div>
          <div><span id="s">35</span><br>Giây</div>
        </div>
      </div>
      <div class="divider"></div> <!-- đường phân cách -->
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
        <div class="product-card" data-brand="EGA Bike" data-color="Màu: Khác" data-price="11990000" data-delivery="Miễn phí giao hàng, Giao hàng nhanh 4h">
          <a href="city_bike_2.php" class="product-link">
            <div class="product-image">
              <img src="../assets/images/alight.jpg" alt="Xe đạp Touring Alight 3 DD Disc"/>
            </div>
            <div class="product-brand">EGA BIKE</div>
            <div class="product-title">Xe đạp Touring Alight 3 DD Disc </div>
            <div class="product-rating">★★★★★</div>
            <div class="product-price">
              <span class="current-price">11.990.000₫</span>
              <span class="old-price">15.500.000₫</span>
              <span class="discount">-30%</span>
            </div>
          </a>
        </div>
        <!-- sản phẩm 2 -->
        <div class="product-card" data-brand="Thương hiệu: Khác" data-color="Màu: Khác" data-price="7990000" data-delivery="Miễn phí giao hàng, Giao hàng tiết kiệm">
          <a href="city_bike_3.php" class="product-link">
            <div class="product-image">
              <img src="../assets/images/escape1.jpg" alt="Xe đạp Touring Escape 1"/>
            </div>
            <div class="product-brand">KHÁC</div>
            <div class="product-title">Xe đạp Touring Escape 1</div>
            <div class="product-rating">★★★★☆</div>
            <div class="product-price">
              <span class="current-price">7.990.000₫</span>
              <span class="old-price">8.789.000₫</span>
              <span class="discount">-10%</span>
            </div>
          </a>
        </div>

        <!-- sản phẩm 3 -->
        <div class="product-card" data-brand="EGA Bike" data-color="Màu: Trắng" data-price="15790000" data-delivery="Miễn phí giao hàng, Giao hàng tiết kiệm">
          <a href="kids_bike_2.php" class="product-link">
            <div class="product-image">
              <img src="../assets/images/chubby.jpg" alt="Xe Đạp Trẻ Em Youth BIKE Chubby 2"/>
            </div>
            <div class="product-brand">EGA BIKE</div>
            <div class="product-title">Xe Đạp Trẻ Em Youth BIKE Chubby</div>
            <div class="product-rating">★★★★★</div>
            <div class="product-price">
              <span class="current-price">15.790.000₫</span>
              <span class="old-price">18.948.000₫</span>
              <span class="discount">-20%</span>
            </div>
          </a>
        </div>
        <!-- sản phẩm 4 -->
        <div class="product-card" data-brand="EGA Bike" data-color="Màu: Đen" data-price="11990000" data-delivery="Miễn phí giao hàng, Giao hàng nhanh 4h">
          <a href="kids_bike_1.php" class="product-link">
            <div class="product-image">
              <img src="../assets/images/bibo.jpg" alt="Xe Đạp Trẻ Em Youth BIKE Bibo"/>
            </div>
            <div class="product-brand">EGA BIKE</div>
            <div class="product-title">Xe Đạp Trẻ Em Youth BIKE Bibo</div>
            <div class="product-rating">★★★★★</div>
            <div class="product-price">
              <span class="current-price">11.990.000₫</span>
              <span class="old-price">15.500.000₫</span>
              <span class="discount">-30%</span>
            </div>
          </a>
        </div>
        <!-- sản phẩm 5 -->
        <div class="product-card" data-brand="Thương hiệu: Khác" data-color="Màu: Khác" data-price="7790000" data-delivery=" Giao hàng nhanh 4h, Giao hàng tiết kiệm">
          <a href="mountain_bike_2.php" class="product-link">
            <div class="product-image">
              <img src="../assets/images/atx610.jpg" alt="Xe đạp leo núi MTB ATX 610"/>
            </div>
            <div class="product-brand">KHÁC</div>
            <div class="product-title">Xe đạp leo núi MTB ATX 610</div>
            <div class="product-rating">★★★★☆</div>
            <div class="product-price">
              <span class="current-price">7.790.000₫</span>
              <span class="old-price">9.737.000₫</span>
              <span class="discount">-25%</span>
            </div>
          </a>
        </div>
        <!-- sản phẩm 6 -->
        <div class="product-card" data-brand="EGA Bike" data-color="Màu: Khác" data-price="28875000" data-delivery="Giao hàng nhanh 4h">
          <a href="mountain_bike_1.php" class="product-link">
            <div class="product-image">
              <img src="../assets/images/anthem.jpg" alt="Xe đạp leo núi MTB Anthem Pro"/>
            </div>
            <div class="product-brand">EGA BIKE</div>
            <div class="product-title">Xe đạp leo núi MTB Anthem Pro</div>
            <div class="product-rating">★★★☆☆</div>
            <div class="product-price">
              <span class="current-price">28.875.000₫</span> 
              <span class="old-price">38.500.000₫</span>
              <span class="discount">-25%</span>
            </div>
          </a>
        </div>
        <!-- sản phẩm 7 -->
       <div class="product-card" data-brand="EGA Bike" data-color="Màu: Khác" data-price="15990000" data-delivery = "Miễn phí giao hàng, Giao hàng nhanh 4h" >
          <a href="road_bike_2.php" class="product-link">
            <div class="product-image">
              <img src="../assets/images/allez.webp" alt="Xe đạp Allez"/>
            </div>
            <div class="product-brand">EGA BIKE</div>
            <div class="product-title">Xe đạp đường trường Allez 2021</div>
            <div class="product-rating">★★★★★</div>
            <div class="product-price">
              <span class="current-price">15.990.000₫</span>
              <span class="old-price">24.580.000₫</span>
              <span class="discount">-35%</span>
            </div>
          </a>
        </div>
        <!-- sản phẩm 8 -->
        <div class="product-card" data-brand="EGA Bike" data-color="Màu: Khác" data-price="19590000" data-delivery="Miễn phí giao hàng, Giao hàng nhanh 4h, Giao hàng tiết kiệm">
          <a href="road_bike_3.php" class="product-link">
            <div class="product-image">
              <img src="../assets/images/ruby.webp" alt="Xe đạp đường trường Ruby"/>
            </div>
            <div class="product-brand">EGA BIKE</div>
            <div class="product-title">Xe đạp đường trường Ruby</div>
            <div class="product-rating">★★★★☆</div>
            <div class="product-price">
              <span class="current-price">19.590.000₫</span>
              <span class="old-price">22.500.000₫</span>
              <span class="discount">-13%</span>
            </div>
          </a>
        </div>
      </div>
    </section>
  </div>
<script src="../assets/js/search.js"></script>
<script src="../assets/js/fl.js"></script>
<script src="../assets/js/active.js" defer></script>
<script src="../assets/js/cart.js"></script>
<script src="../assets/js/add-to-cart.js"></script>
<script src="../assets/js/form.js"></script>
</body>

  <!-- FOOTER -->
<footer class="footer">
  <div class="footer-container">
    <!-- Cột 1: Logo và thông tin liên hệ -->
    <div class="footer-column">
      <a href="../index.php">
        <img src="../assets/images/logo.png" alt="EGA BIKE Logo" class="logo" />
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
</html>