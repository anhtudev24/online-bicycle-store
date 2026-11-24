<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/><!--Link icon-->
  <title>BLUESOLIS BIKE</title>
  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/base.css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<?php 

            session_start();
        require_once __DIR__.'/config.php';
        require_once __DIR__ . '/nguoidung.php';


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
                <a href="bike.html">Xe đạp</a>
                <ul class="submenu">
                  <li><a href="mountain_bike.html">Xe đạp leo núi</a></li>
                  <li><a href="road_bike.html">Xe đạp đường trường</a></li>
                  <li><a href="city_bike.html">Xe đạp thành phố</a></li>
                  <li><a href="kids_bike.html">Xe đạp trẻ em</a></li>
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

  <body>
        <div class="breadcrumb-wrapper">
            <nav class="breadcrumb-top">
              <a href="index.php">Trang chủ </a>/ <a href="news.php">Tin tức </a> / <span>Top 5 xe đạp thể thao chính hãng không thể bỏ qua</span>
            </nav>
        </div>
    <div class="news-title1">
  <h4>Hướng dẫn chọn xe đạp đường trường</h4>
</div>
<img class="news-image" src="assets/images/news5.jpg" alt="Tin tức">
<div class="news-meta1">
  <span><i class="fa-regular fa-calendar-days"></i>📅  Thứ 3 25/06/2024</span>
  <span><i class="fa-regular fa-clock"></i>⏱ 4 phút đọc</span>
</div>

    <!-- Mục lục -->
    <div class="news-toc">
      <h2>Nội dung bài viết</h2>
      <ol>
        <li><a href="#loi-ich">Lợi ích khi sử dụng xe đạp đường trường (Road bike)</a></li>
        <li>
          <a href="#phu-hop">Bạn có phù hợp với xe đạp đường trường không?</a>
          <li><a href="#yeu-to">Yếu tố cần xem xét khi chọn xe đạp đường trường</a></li>
          <ol>
            <li><a href="#kich-thuoc">Kích thước khung và hình dạng xe </a></li>
            <li><a href="#chat-luong">Chất lượng các bộ phận xe</a></li>
          </ol>
        </li> 
      </ol>
    </div>

    <!-- Nội dung -->
    <div class="content">
      <h1 id="loi-ich">Lợi ích khi sử dụng xe đạp đường trường (Road bike)</h1>
      <div class="bike-reason">
        <p>Đạp xe đường trường mang lại nhiều lợi ích: </p>
       <ul>
        <li><strong>Tốc độ cao:</strong> Xe đạp đường trường thường có thiết kế nhẹ, bánh xe mỏng và cấu trúc khí động học giúp đạt tốc độ cao hơn so với các loại xe đạp khác.</li>
        <li><strong>Khám phá nhiều địa điểm:</strong> Với tốc độ cao và khả năng đi xa, bạn có thể khám phá những vùng đất mới, tham gia các chuyến đi dài và tận hưởng phong cảnh tuyệt đẹp.</li>
      </ul>
    </div>
    </div>

    <div class="content">
      <h1 id="phu-hop">Bạn có phù hợp với xe đạp đường trường không?</h1>
      <div class="bike-reason">
        <p>Trước khi quyết định mua xe đạp đường trường, bạn cần tự hỏi bản thân một số câu hỏi quan trọng để đảm bảo rằng đây là lựa chọn phù hợp với bạn. </p>
        <p>Đạp xe đường trường không chỉ là một hoạt động thể thao mà còn là một phong cách sống, thể hiện cá tính của người sử dụng. Đạp xe road cần sự kiên nhẫn và thười gian để luyện tập sử dụng thành thạo xe. </p>
         <img class="toc-img" src="assets/images/news5.1.webp">
        <p>Nếu muốn sử dụng xe đạp road bạn cần có kỹ năng lái xe tốt cùng sự cảnh giác cao để đảm bảo an toàn khi di chuyển. Xe đạp road chủ yếu dùng trên các đoạn đường nhựa bằng phẳng vì thế sẽ có nhiều phương tiện qua lại. Nếu bạn cảm thấy không thoải mái, hãy chọn một số loại hình xe đạp khác như: </p>
        <ul> 
          <li><strong> Xe đạp cho đường mòn: </strong> Thích hợp cho những ai yêu thích khám phá thiên nhiên và các con đường mòn ít người. Đây là sự kết hợp giữa đạp xe đường trường và đạp xe địa hình.</li>
          <li><strong>Xe đạp leo núi:</strong>Thử thách với những đoạn đường gồ ghề, đồi núi, và đòi hỏi kỹ năng lái xe tốt. Thích hợp cho những ai yêu thích mạo hiểm và thiên nhiên hoang dã.</li>
        </ul>
    </div>
    </div>

  <div class="content">
      <h1 id="yeu-to">Yếu tố cần xem xét khi chọn xe đạp đường trường</h1>
    <div class="bike-reason">
      <h3  class="reason-title" id="kich-thuoc"> Kích thước khung và hình dạng xe </h3>
      <p>Kích thước khung xe rất quan trọng:</p>
      <ul>
        <li>Kích thước khung <strong>xe thể thao</strong> phù hợp với cơ thể sẽ giúp bạn có một tư thế lái thoải mái và giảm thiểu nguy cơ chấn thương. Xe đạp với khung quá lớn hoặc quá nhỏ sẽ gây ra mỏi mệt nhanh chóng và giảm hiệu suất lái.</li>
        <li>Để xác định kích thước khung phù hợp, bạn có thể dựa vào chiều cao của mình và các thông số kỹ thuật của nhà sản xuất hoặc nhờ sự tư vấn từ cửa hàng xe đạp uy tín. </li>
      </ul>
      <img class="toc-img" src="assets/images/news5.2.webp">
      <p>Hình dạng xe phù hợp</p>
      <ul>
        <li>Hình dạng và thiết kế của khung xe cũng ảnh hưởng lớn đến cảm giác lái và hiệu suất. Có nhiều loại khung như khung cổ điển (diamond frame), khung nghiêng (sloping frame)  tùy thuộc vào mục đích sử dụng và sở thích cá nhân.</li>
        <li>Hãy thử nghiệm nhiều loại khung để tìm ra loại nào phù hợp nhất với phong cách lái và nhu cầu của bạn.</li>
      </ul>
      <h3 class="reason-title" id="chat-luong"> Chất lượng các bộ phận xe</h3>
      <p><strong>Hệ thống truyền động:</strong>Bao gồm bộ đề, xích, và bộ đĩa, ảnh hưởng trực tiếp đến hiệu suất và trải nghiệm lái xe. Chọn các bộ phận từ các thương hiệu uy tín như Shimano, SRAM, hoặc Campagnolo để đảm bảo chất lượng và độ bền</p>
      <p><strong>Hệ thống phanh:</strong>Phanh là yếu tố an toàn quan trọng. Hãy chọn giữa phanh vành (rim brakes) và phanh đĩa (disc brakes) dựa trên nhu cầu và điều kiện đường sá. Phanh đĩa thường cung cấp hiệu suất phanh tốt hơn trong điều kiện ướt hoặc bùn.</p>
      <img class="toc-img" src="assets/images/news5.3.webp">
      <p><strong>Bánh xe và lốp:</strong>Bánh xe và lốp xe ảnh hưởng đến tốc độ và sự mượt mà khi di chuyển. Lốp mỏng và nhẹ sẽ giúp bạn đạt tốc độ cao hơn nhưng cần chú ý đến độ bền và khả năng chống đâm thủng.</p>
      <p><strong>Khung và vật liệu chế tạo:</strong>Vật liệu khung phổ biến bao gồm nhôm, carbon, và thép. Khung carbon nhẹ và hấp thụ rung tốt, khung nhôm bền và giá cả phải chăng, trong khi khung thép chắc chắn và êm ái.</p>

    <section class="tag-section">
  <p><strong>Tags:</strong></p>
  <div id="tags">
    <span class="tag" data-tag="xe đạp">xe đạp</span>
    <span class="tag" data-tag="thể thao">thể thao</span>
    <span class="tag" data-tag="vận động">vận động</span>
    <span class="tag" data-tag="địa hình">địa hình</span>
    <span class="tag" data-tag="nhập khẩu">nhập khẩu</span>
  </div>
</section>
    <h2 class="related-title">Tin liên quan</h2>

<section class="related-posts">
  <div class="post" data-tags="xe đạp, thể thao">
    <img src="assets/images/news5.jpg" alt="road bike" />
    <a href="news2.php"><h3>Hướng dẫn chọn xe đạp đường trường</h3></a>
    <p>📅 Thứ 3 25/06/2024 ⏱ 4 phút đọc</p>
    <p>Đạp xe đường trường (road bike) mang lại nhiều lợi ích...</p>
  </div>
  <div class="post" data-tags="xe đạp, nhập khẩu">
    <img src="assets/images/news4.jpg" alt="Merida" />
    <a href="news1.php"><h3>Xe đạp Merida của nước nào?</h3></a>
    <p>📅 Thứ 3 25/06/2024 ⏱ 4 phút đọc</p>
    <p>Merida là hãng xe đạp nổi tiếng được nhiều người biết đến...</p>
  </div>
  <div class="post" data-tags="xe đạp, thể thao, địa hình">
    <img src="assets/images/news3.jpg" alt="xe địa hình" />
    <a href="news1.php"><h3>Top 4 xe đạp thể thao giá rẻ đáng mua nhất</h3></a>
    <p>📅 Thứ 3 25/06/2024 ⏱ 7 phút đọc</p>
    <p>Việc mua một chiếc xe đạp thể thao giá rẻ...</p>
  </div>
  <div class="post" data-tags="xe đạp, vận động">
    <img src="assets/images/news1.jpg" alt="tay đề lắc" />
    <a href="news2.php"><h3>Cách sử dụng tay đề lắc đúng cách</h3></a>
    <p>📅 Thứ 3 25/06/2024 ⏱ 3 phút đọc</p>
    <p>Việc nắm vững kỹ thuật sử dụng tay đề lắc...</p>
  </div>
</section>

  <script src="assets/js/script1.js"></script>
    </div>
  </div>
   <!-- FOOTER -->
<footer class="footer">
  <div class="footer-container">
    <!-- Cột 1: Logo và thông tin liên hệ -->
    <div class="footer-column">
      <img src="assets/images/logo.png"  class="logo" >
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
  <script src="assets/js/index.js"></script>
<script src="assets/js/search.js"></script>
<script src="assets/js/cart.js"></script>
<script src="assets/js/add-to-cart.js"></script>
<script src="assets/js/active.js" defer></script>
<script src="assets/js/form.js"></script>
 </form>
</body>
</html>

