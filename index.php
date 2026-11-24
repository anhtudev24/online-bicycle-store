<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/><!--Link icon-->
  <title>BLUESOLIS BIKE - Trang chủ</title>
  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/base.css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <?php
      session_start();
      require_once __DIR__ . '/models/User.php';
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
                <a href="pages/bike.php">Xe đạp</a>
                <ul class="submenu">
                  <li><a href="pages/mountain_bike.php">Xe đạp leo núi</a></li>
                  <li><a href="pages/road_bike.php">Xe đạp đường trường</a></li>
                  <li><a href="pages/city_bike.php">Xe đạp thành phố</a></li>
                  <li><a href="pages/kid_bike.php">Xe đạp trẻ em</a></li>
                </ul>
              </li>
              <li><a href="pages/flashsale.php">Flash sale</a></li>
              <li><a href="pages/news.php">Tin tức</a></li>
              <li><a href="pages/contact.php">Cửa hàng</a></li>
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
          <a href="<?php echo Nguoidung::loginInfo() ? 'pages/cart.php' : '#' ?>">
            <i class="ri-shopping-cart-2-line"></i>
            <span class="cart-badge" id="cartCount">0</span>
          </a>
        </div>





<div class="header-user" style="margin-left: 17px;">
  <?php if ($user = Nguoidung::loginInfo()) : ?>
    <a href="#">
      <i class="ri-user-line" style="font-size: 18px;"></i>
      <span style="    font-size: 14px;"><?php echo htmlspecialchars($user['Hoten']); ?></span>
    </a>
    <!-- Nút logout -->
    <a href="auth/logout.php" style="font-size: 14px;
    margin-left: 17px;
    color: #74bce2;">Đăng xuất</a>
  <?php else : ?>
    <a href="auth/login.php">
      <i class="ri-user-line"></i>
      <span>Đăng nhập</span>
    </a>
  <?php endif; ?>
</div>



      </div>
    </div>
  </header>

  <!-- BANNER -->
  <section class="banner">
    <div class="banner-images">
      <img src="assets/images/coverpage1.png" alt="Banner 1" class="active">
      <img src="assets/images/coverpage2.png" alt="Banner 2" class="active1">
    </div>
    <div class="arrow left" onclick="changeSlide(-1)">&#10094;</div>
    <div class="arrow right" onclick="changeSlide(1)">&#10095;</div>
  </section>

  <!-- THÔNG BÁO MUA HÀNG -->
  <div class="notify" id="notify">
    <img src="assets/images/xedap3.webp" alt="bike" class="notify-img">
    <div>
      <p class="notify-title">Xe đạp đường trường Orbea Vector Drop</p>
      <p class="notify-desc">Khách hàng Dương Tấn Trinh tại Phú Yên vừa mua sản phẩm cách đây 32 phút</p>
    </div>
    <button onclick="document.getElementById('notify').style.display='none'">×</button>
  </div>

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

  <!-- Danh mục sản phẩm-->
  <section class="product-category">
    <h2>DANH MỤC SẢN PHẨM</h2>
    <div class="categories">
      <a href="pages/mountain_bike.php" class="category-item">
        <div class="image-wrapper">
          <img src="assets/images/moun1.png" alt="Mountain bike">
        </div>
        <h3>Xe đạp leo núi</h3>
        <p>8 sản phẩm</p>
      </a>
      
      <a href="pages/road_bike.php" class="category-item">
        <div class="image-wrapper">
          <img src="assets/images/road1.png" alt="Road Bikes">
        </div>
        <h3>Xe đạp đường trường</h3>
        <p>8 sản phẩm</p>
      </a>
      
      <a href="pages/city_bike.php" class="category-item">
        <div class="image-wrapper">
          <img src="assets/images/city1.png" alt="Electric bikes">
        </div>
        <h3>Xe đạp thành phố</h3>
        <p>6 sản phẩm</p>
      </a>
      
      <a href="pages/kid_bike.php" class="category-item">
        <div class="image-wrapper">
          <img src="assets/images/kid1.png" alt="Urban bikes">
        </div>
        <h3>Xe đạp trẻ em</h3>
        <p>6 sản phẩm</p>
      </a>
    </div>
  </section>

  <!-- Flash sale -->
  <section class="flash-sale">
   <div class="flash-header">
      <h2>🎉 HAPPY SUMMER - GIẢM ĐẾN 50%</h2>
      <div class="countdown-box">
        <span>Kết thúc sau</span>
        <div class="countdown-timer">
          <div><span id="h">18</span><br>Giờ</div>
          <div><span id="m">52</span><br>Phút</div>
          <div><span id="s">35</span><br>Giây</div>
        </div>
      </div>
    </div>
   <div class="flash-sale-section">
    <div class="product-list-top">
      <!-- Mỗi sản phẩm -->

      <div class="product-card-top">
          <a href="pages/mountain_bike_2.php">
            <img src="assets/images/allez.webp" alt="Allez 2021" />
          </a>
        <div class="product-info">
          <p class="brand">EGA BIKE</p>
          <h4>Xe đạp đường trường Allez 2021</h4>
          <div class="product-rating">★★★★★</div>
          <div class="prices">
            <span class="sale">15,990,000₫</span>
            <span class="original">24,580,000₫</span>
            <span class="discount">-35%</span>
          </div>
          <div class="status">
            <span class="badge">Bán chạy</span>
          </div>
          <p class="sold">Đã bán <strong>271</strong> sản phẩm</p>
        </div>
      </div>

    
      <div class="product-card-top">
          <a href="pages/mountain_bike_1.php">
            <img src="assets/images/scott.webp" alt="Allez 2021" />
          </a>
        <div class="product-info">
          <p class="brand">EGA BIKE</p>
          <h4>Xe Đạp Đường Trường CF 1 Đĩa 2021</h4>
          <div class="product-rating">★★★★★</div>
          <div class="prices">
            <span class="sale">23,340,000₫</span>
            <span class="original">38,900,000₫</span>
            <span class="discount">-40%</span>
          </div>
          <div class="status">
            <span class="badge">Bán chạy</span>
          </div>
          <p class="sold">Đã bán <strong>92</strong> sản phẩm</p>
        </div>
      </div>

      <div class="product-card-top">
          <a href="pages/road_bike_3.php">
            <img src="assets/images/ruby.webp" alt="Ruby 2024" />
          </a>
        <div class="product-info">
          <p class="brand">EGA BIKE</p>
          <h4>Xe đạp đường trường dành cho nữ Ruby 2024</h4>
          <div class="product-rating">★★★★★</div>
          <div class="prices">
            <span class="sale">22,185,000₫</span>
            <span class="original">29,580,000₫</span>
            <span class="discount">-25%</span>
          </div>
          <div class="status">
            <span class="badge">Bán chạy</span>
          </div>
          <p class="sold">Đã bán <strong>281</strong> sản phẩm</p>
        </div>
      </div>
 

      <div class="product-card-top">
          <a href="pages/city_bike_3.php">
            <img src="assets/images/domane.webp" alt="Allez 2021" />
          </a>
        <div class="product-info">
          <p class="brand">EGA BIKE</p>
          <h4>Xe đạp đường trường Domane AL 5 đĩa</h4>
          <div class="product-rating">★★★★☆</div>
          <div class="prices">
            <span class="sale">32,590,000₫</span>
            <span class="original">44,990,000₫</span>
            <span class="discount">-28%</span>
          </div>
          <div class="status">
            <span class="badge">Bán chạy</span>
          </div>
          <p class="sold">Đã bán <strong>193</strong> sản phẩm</p>
        </div>
      </div>
    </div>


    </div>

  <a href="pages/flashsale.php" class="view-more-btn">
    <span>XEM TẤT CẢ</span>
  </a>



<!-- Thông tin chi tiết sản phẩm -->
  </section>

  <section class="bike-section">
  <div class="bike-container">
    <!-- Hình ảnh xe -->
    <div class="bike-image">
      <img src="assets/images/index1.png" alt="Xe đạp SCOTT SUB CROSS 2.0">
    </div>

    <!-- Nội dung thông tin -->
    <div class="bike-info">
      <h2>SCOTT SUB CROSS 2.0 –<br>Lựa chọn hoàn hảo cho hành trình phượt và di chuyển trong thành phố!</h2>
      <p><em>Chiếc xe đạp hybrid hoàn hảo cho những ai yêu thích khám phá và di chuyển linh hoạt. Với thiết kế hiện đại, cùng các tính năng vượt trội, SUB CROSS 2.0 mang đến trải nghiệm lái xe tuyệt vời trên mọi địa hình.</em></p>
      <h4>Ưu điểm nổi bật:</h4>
      <ul>
        <li>Khung xe hợp kim nhôm siêu nhẹ và bền bỉ</li>
        <li>Phuộc trước Suntour NEX HLO 63mm êm ái</li>
        <li>Hệ thống truyền động Shimano Deore T6000 30 tốc độ linh hoạt</li>
        <li>Phanh thủy lực an toàn, chính xác</li>
        <li>Lốp xe Kenda Booster bám đường tốt</li>
        <li>Ghi đông cong, yên Selle Italia thoải mái</li>
        <li>Trang bị đầy đủ phụ kiện</li>
      </ul>
      <a href="pages/road_bike_2.php" class="detail-btn">XEM CHI TIẾT</a>

    </div>
  </div>
</section>

<!-- Video giới thiệu -->
 <section class="video-section">
  <div class="container-top">
    <h2>VIDEO ĐƯỢC XEM NHIỀU NHẤT</h2>
      <div class="video-grid">
        <div class="video-item">
          <video controls>
            <source src="assets/videos/video1.mp4" type="video/mp4">
            Trình duyệt không hỗ trợ video.
          </video>
        </div>

        <div class="video-item">
          <video controls>
            <source src="assets/videos/video2.mp4" type="video/mp4">
            Trình duyệt không hỗ trợ video.
          </video>
        </div>
      </div>
      </div>
  </section>


<!-- TIN TỨC TRANG CHỦ -->
  <section class="inspiration">
  <div class="inspiration-header">
    <h2>Tin tức mới nhất</h2>
    <a href="pages/news.php" class="see-all">XEM TẤT CẢ</a>
  </div>

  <div class="inspiration-list">
    <div class="inspiration-item">
      <img src="assets/images/news1.1.webp" alt="Inspiration 1">
      <h3>Top 5 xe đạp thể thao chính hãng không thể bỏ qua</h3>
      <div class="inspiration-meta">
        <span>📅 16/05/2025</span>
        <span>⏱ 7 phút đọc</span>
      </div>
      <p>Việc mua một chiếc xe đạp thể thao giá rẻ có thể là lựa chọn tối ưu nhưng cũng tiềm...</p>
      <a href="pages/news1.php" class="read-more">Đọc tiếp</a>
    </div>

    <div class="inspiration-item">
      <img src="assets/images/news2.jpg" alt="Inspiration 2">
      <h3>Hướng dẫn chọn xe đạp đường trường (road bike) cho người mới bắt đầu</h3>
      <div class="inspiration-meta">
        <span>📅 15/05/2025</span>
        <span>⏱ 4 phút đọc</span>
      </div>
      <p>Đạp xe đường trường (road bike) mang lại nhiều lợi ích cho sức khoẻ, ngày càng nhiều người chọn dòng...</p>
      <a href="pages/news2.php" class="read-more">Đọc tiếp</a>
    </div>

    <div class="inspiration-item">
      <img src="assets/images/news3.jpg" alt="Inspiration 3">
      <h3>Xe đạp Merida của nước nào? Chất lượng có tốt không?</h3>
      <div class="inspiration-meta">
        <span>📅 13/05/2025</span>
        <span>⏱ 4 phút đọc</span>
      </div>
      <p>Merida là hãng xe đạp nổi tiếng được nhiều người biết đến bởi ưu điểm về thiết kế và cấu...</p>
      <a href="pages/news1.php" class="read-more">Đọc tiếp</a>
    </div>

    <div class="inspiration-item">
      <img src="assets/images/news4.jpg" alt="Inspiration 4">
      <h3>Top 4 xe đạp thể thao giá rẻ dưới 3 triệu chính hãng không thể bỏ qua</h3>
      <div class="inspiration-meta">
        <span>📅 14/05/2025</span>
        <span>⏱ 7 phút đọc</span>
      </div>
      <p>Việc mua một chiếc xe đạp thể thao giá rẻ có thể là lựa chọn tối ưu nhưng cũng tiềm...</p>
      <a href="pages/news2.php" class="read-more">Đọc tiếp</a>
    </div>
  </div>
</section>


<!-- COMMENT -->
 <h2>ĐÁNH GIÁ TỪ KHÁCH HÀNG</h2>
<section class="comment">
  <div class="comment-wrapper">
    <div class="comment-images">
      <img src="assets/images/comment1.png" alt="Comment 1">
      <img src="assets/images/comment2.png" alt="Comment 2">
      <img src="assets/images/comment3.png" alt="Comment 3">
    </div>
    <div class="arrow left" onclick="changeCommentSlide(-1)">&#10094;</div>
    <div class="arrow right" onclick="changeCommentSlide(1)">&#10095;</div>
  </div>
</section>

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
<script src="assets/js/index.js"></script>
<script src="assets/js/search.js"></script>
<script src="assets/js/fl.js"></script>
<script src="assets/js/active.js" defer></script>
<script src="assets/js/cart.js"></script>
<script src="assets/js/add-to-cart.js"></script>
<script src="assets/js/form.js"></script>
</body>
</html>
