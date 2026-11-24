<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/><!--Link icon-->
  <title>BLUESOLIS BIKE</title>
  <link rel="stylesheet" href="../assets/css/reset.css">
  <link rel="stylesheet" href="../assets/css/base.css">
  <link rel="stylesheet" href="../assets/css/styles.css">
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


<!-- Liên kết JS -->
<script src="../assets/js/form.js"></script>
    
    <div class="breadcrumb-wrapper">
            <nav class="breadcrumb-top">
              <a href="../index.php">Trang chủ</a> / <span>Tin tức</span>
            </nav>
    </div>
    

        <div class="container_news">
            <h1 class="news-title">Tin tức</h1>
            <div class="news-content">
              <div class="news-left">
                <div class="news-item">
                  <img src="../assets/images/news1.jpg" alt="Tin 1" />
                  <div class="news-info">
                    <a href="news1.php"><h2 >Top 5 xe đạp thể thao chính hãng không thể bỏ qua</h2></a>
                    <div class="news-meta">
                      <span><i class="fa-regular fa-calendar-days"></i> 📅 Thứ 2 15/07/2024</span>
                      <span><i class="fa-regular fa-clock"></i> ⏱ 7 phút đọc</span>
                    </div>
                    <p>
                      Việc mua một chiếc xe đạp thể thao giá rẻ có thể là lựa chọn tối ưu nhưng cũng tiềm ẩn nhiều rủi ro nếu không...
                    </p>
                    <a href="news1.php" class="read-more"><u>Đọc tiếp</u></a>
                  </div>
                </div>

          <div class="news-item">
            <img class="image1" src="../assets/images/news5.jpg" alt="Tin 2" />
            <div class="news-info">
              <a href="news2.php"><h2>Hướng dẫn chọn xe đạp đường trường (road bike) cho người mới</h2></a>
              <div class="news-meta">
                <span><i class="fa-regular fa-calendar-days"></i>📅 Thứ 3 25/06/2024</span>
                <span><i class="fa-regular fa-clock"></i> ⏱ 4 phút đọc</span>
              </div>
              <p>
                Đạp xe đường trường (road bike) mang lại nhiều lợi ích cho sức khỏe, ngày càng nhiều người chọn dòng xe này làm phương tiện di...
              </p>
              <a href="news2.php" class="read-more"><u>Đọc tiếp</u></a>            </div>
          </div>

          <div class="news-item">
            <img src="../assets/images/news4.jpg" alt="Tin 3" />
            <div class="news-info">
              <a href="news1.php"><h2>Xe đạp Merida của nước nào? Chất lượng có tốt không?            </h2></a>
              <div class="news-meta">
                <span><i class="fa-regular fa-calendar-days"></i>📅 Thứ 3 25/06/2024</span>
                <span><i class="fa-regular fa-clock"></i> ⏱ 4 phút đọc</span>
              </div>
              <p>
                Merida là hãng xe đạp nổi tiếng được nhiều người biết đến bởi ưu điểm về thiết kế và cấu hình. Tuy nhiên tại thì trường...              </p>
              <a href="news1.php" class="read-more"><u>Đọc tiếp</u></a>            </div>
          </div>

          <div class="news-item">
            <img src="../assets/images/news3.jpg" alt="Tin 4" />
            <div class="news-info">
              <a href="news2.php"><h2>Top 4 xe đạp thể thao giá rẻ dưới 3 triệu chính hãng không thể bỏ qua</h2></a>
              <div class="news-meta">
                <span><i class="fa-regular fa-calendar-days"></i>📅 Thứ 3 25/06/2024</span>
                <span><i class="fa-regular fa-clock"></i> ⏱ 7 phút đọc</span>
              </div>
              <p>
                Việc mua một chiếc xe đạp thể thao giá rẻ có thể là lựa chọn tối ưu nhưng cũng tiềm ẩn nhiều rủi ro nếu không...              </p>
              <a href="news2.php" class="read-more"><u>Đọc tiếp</u></a>            </div>
          </div>

          <div class="news-item">
            <img src="../assets/images/news1.jpg" alt="Tin 5" />
            <div class="news-info">
              <a href="news1.php"><h2>Cách sử dụng tay đề lắc. Top 5 xe đạp đua tay đề lắc giá rẻ bán chạy</h2></a>
              <div class="news-meta">
                <span><i class="fa-regular fa-calendar-days"></i>📅 Thứ 3 25/06/2024</span>
                <span><i class="fa-regular fa-clock"></i> ⏱ 4 phút đọc</span>
              </div>
              <p>
                Việc nắm vững kỹ thuật sử dụng tay đề lắc không chỉ nâng cao trải nghiệm đạp xe mà còn mang lại nhiều lợi ích về...              </p>
              <a href="news1.php" class="read-more"><u>Đọc tiếp</u></a>            </div>
          </div>
        </div>
  

        <aside class="news-right">
            <div class="news-category">
              <h3>DANH MỤC TIN TỨC</h3>
              <ul>
                <li><a href="flashsale.php">Flash sale</a></li>
                <li><a href="rent_bike.html">Thuê xe đạp</a></li>
                <li><a href="news.php">Tin tức</a></li>
                <li><a href="contact.php">Liên hệ</a></li>
                <li><a href="#">Xe đạp</a></li>
                <li><a href="contact.php">Hệ thống cửa hàng</a></li>
              </ul>
            </div>

          <div class="news-featured">
            <h3>TIN NỔI BẬT</h3>
            <ul>
              <li>
                <img src="../assets/images/news1.jpg" alt="Nổi bật 1" />
                <span><a href ="news1.php">Top 5 xe đạp thể thao chính hãng không thể bỏ qua</span></a>
              </li>
              <li>
                <img src="../assets/images/news5.jpg" alt="Nổi bật 2" />
                <span><a href ="news2.php">Hướng dẫn chọn xe đạp đường trường (road bike) cho người mới bắt đầu</span></a>
              </li>
              <li>
                <img src="../assets/images/news4.jpg" alt="Nổi bật 3" />
                <span><a href ="news1.php">Xe đạp Merida của nước nào? Chất lượng có tốt không?</span></a>
              </li>
              <li>
                <img src="../assets/images/news3.jpg" alt="Nổi bật 4" />
                <span><a href ="news2.php">Top 4 xe đạp thể thao giá rẻ dưới 3 triệu chính hãng không thể bỏ qua</span></a>
              </li>
            </ul> 
          </div>
        <div class="new-tags">
  <h2>TAGS</h2>
</div>

<div id="tags">
  <span class="tag" data-tag="xe đạp">xe đạp</span>
  <span class="tag" data-tag="thể thao">thể thao</span>
  <span class="tag" data-tag="vận động">vận động</span>
  <span class="tag" data-tag="địa hình">địa hình</span>
  <span class="tag" data-tag="nhập khẩu">nhập khẩu</span>
</div>
</div>
</aside>
      </div>
    </div>


 <!-- FOOTER -->
<footer class="footer">
  <div class="footer-container">
    <!-- Cột 1: Logo và thông tin liên hệ -->
    <div class="footer-column">
      <img src="../assets/images/logo.png"  class="logo" >
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
        <li><a href="contact.php">Liên hệ</a></li>
        <li><a href="rent_bike.html">Câu hỏi thường gặp</a></li>
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
<script src="../assets/js/active.js" defer></script>
<script src="../assets/js/search.js"></script>
<script src="../assets/js/cart.js"></script>
<script src="../assets/js/add-to-cart.js"></script>
<script src="../assets/js/form.js"></script>
</form>
 
</body>
</html>
