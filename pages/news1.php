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

  <body>
        <div class="breadcrumb-wrapper">
            <nav class="breadcrumb-top">
              <a href="../index.php">Trang chủ </a>/ <a href="news.php">Tin tức </a> / <span>Top 5 xe đạp thể thao chính hãng không thể bỏ qua</span>
            </nav>
        </div>
    <div class="news-title1">
  <h4>Top 5 xe đạp thể thao chính hãng không thể bỏ qua</h4>
</div>
<img class="news-image" src="../assets/images/news1.jpg" alt="Tin tức">
<div class="news-meta1">
  <span><i class="fa-regular fa-calendar-days"></i>📅  Thứ 2 15/07/2024</span>
  <span><i class="fa-regular fa-clock"></i>⏱ 7 phút đọc</span>
</div>

    <!-- Mục lục -->
    <div class="news-toc">
      <h2>Nội dung bài viết</h2>
      <ol>
        <li><a href="#ly-do">Tại sao một số người chọn xe đạp thể thao giá rẻ</a></li>
        <li>
          <a href="#canh-bao">Dấu hiệu cảnh báo khi mua xe đạp thể thao giá rẻ</a>
          <ol>
            <li><a href="#khong-website">Không có website</a></li>
            <li><a href="#khong-thong-so">Không có bảng thông số kỹ thuật</a></li>
            <li><a href="#mau-sac">Màu sắc không phải là tất cả</a></li>
            <li><a href="#phu-kien">Phụ kiện không cần thiết</a></li>
            <li><a href="#banh-vien-sau">Bánh xe có viền sâu</a></li>
            <li><a href="#khong-thuong-hieu">Linh kiện không có thương hiệu</a></li>
          </ol>
        </li>
        <li><a href="#goi-y">Những mẫu xe đạp thể thao giá rẻ dưới 3 triệu không nên bỏ qua</a></li>
      </ol>
    </div>
      <img class="toc-img" src="../assets/images/news1.1.webp">

    <!-- Nội dung -->
    <div class="content">
      <h1 id="ly-do">Tại sao một số người chọn xe đạp thể thao giá rẻ</h1>
      <div class="bike-reason">
    <h3 class="reason-title">Ngân sách hạn chế</h3>
    <p>
      Một số người tiêu dùng, đặc biệt là học sinh, sinh viên có mức tài chính hạn chế nên sẽ chọn một chiếc 
      <span class="highlight">xe đạp thể thao</span> có giá cả hợp lý nhưng vẫn đảm bảo được chất lượng cơ bản. 
      Ngoài ra với nhiều người, xe đạp không phải là ưu tiên hàng đầu trong danh sách mua sắm. 
      Do không phải là nhu cầu thiết yếu hàng ngày nên ngân sách dành cho xe đạp thường bị giới hạn.
    </p>

    <h3 class="reason-title">Nhu cầu sử dụng cơ bản</h3>
    <p>
      Nhiều người mua xe đạp chỉ để sử dụng vào những dịp đặc biệt hoặc cuối tuần, khi họ có thời gian rảnh. 
      Họ không cần một chiếc xe đạp chuyên nghiệp với nhiều tính năng phức tạp.
    </p>
    <p>
      Xe đạp giá rẻ thường được sử dụng cho những chuyến đi ngắn trong thành phố, như đi chợ, đi dạo quanh khu vực sống hoặc 
      di chuyển từ nhà đến các địa điểm gần. Vì khoảng cách di chuyển không xa, họ không cần đầu tư vào một chiếc xe đạp cao cấp.
    </p>
    <p>
      Những người mới bắt đầu tập đi xe đạp hoặc muốn thử nghiệm trước khi đầu tư vào một chiếc xe đạp đắt tiền 
      có thể chọn xe đạp giá rẻ để bắt đầu.
    </p>
  </div>
  <div class="content">
      <h1 id="canh-bao">Dấu hiệu cảnh báo khi mua xe đạp thể thao giá rẻ</h1>
    <div class="bike-reason">
      <h3  class="reason-title" id="khong-website"> Không có website</h3>
      <p>Các thương hiệu hay những cửa hàng xe đạp không có website chính thức có thể không đáng tin cậy. Họ có thể bán những chiếc xe với khung rẻ tiền, không nhãn mác, không đảm bảo chất lượng hay chế độ bảo hành đáng tin cậy cho khách hàng. </p>
      <img class="toc-img" src="../assets/images/news1.2.webp">
      <h3 class="reason-title" id="khong-thong-so"> Không có bảng thông số kỹ thuật</h3>
      <p>Bảng thông số kỹ thuật cung cấp thông tin chi tiết về kích thước và hình dáng của khung xe, giúp người mua dễ dàng xác định liệu chiếc xe đó có phù hợp với cơ thể và phong cách lái của họ hay không.</p>
      <p>Nếu một chiếc xe đạp không có bảng thông số kỹ thuật, điều này cho thấy nhà sản xuất không chú trọng đến nhu cầu của người mua nghiêm túc. Các thương hiệu xe đạp uy tín luôn cung cấp thông số kỹ thuật rõ ràng để đảm bảo rằng người mua có thể đưa ra quyết định chính xác dựa trên thông tin kỹ thuật của sản phẩm.</p>
      <img class="toc-img" src="../assets/images/news1.3.webp">
      <h3 class="reason-title"id="mau-sac"> Màu sắc không phải là tất cả</h3>
      <p>Khi mua xe đạp, người mua thường bị thu hút bởi những chiếc xe có màu sắc nổi bật và bắt mắt. Nhà sản xuất xe đạp giá rẻ thường tận dụng điều này để lôi cuốn người mua.</p>
      <p>Mặc dù màu sắc của xe đạp có thể là một yếu tố hấp dẫn, nhưng điều quan trọng hơn là chất lượng và hiệu suất của chiếc xe. Các nhà sản xuất xe đạp uy tín tập trung vào việc cung cấp sản phẩm chất lượng cao với các thành phần và thiết kế tốt, thay vì chỉ chú trọng vào màu sắc. Hãy luôn ưu tiên chất lượng và tính năng của xe đạp hơn là vẻ bề ngoài.</p>
      <img class="toc-img" src="../assets/images/news1.4.webp">
      <h3 class="reason-title" id="phu-kien"> Phụ kiện không cần thiết</h3>
      <p>Một số xe đạp giá rẻ được trang bị các thiết kế khung xe hoặc tính năng kỳ lạ để thu hút người mua. Những tính năng này thường không thực sự cần thiết và có thể làm tăng giá thành mà không cải thiện hiệu suất của xe.</p>
      <p>Thay vì tập trung vào các phụ kiện hào nhoáng và không cần thiết, các nhà sản xuất xe đạp giá rẻ nên tập trung vào việc cung cấp chất lượng tốt nhất có thể trong phạm vi giá cả hợp lý. Điều này bao gồm việc sử dụng các vật liệu bền bỉ, thiết kế đơn giản và hiệu quả, và đảm bảo rằng các thành phần quan trọng như khung xe, bánh xe và hệ thống phanh đều đáng tin cậy và hoạt động tốt.</p>
      <img class="toc-img" src="../assets/images/news1.5.webp">
      <h3 class="reason-title"id="banh-vien-sau"> Bánh xe có viền sâu</h3>
      <p>Bánh xe có viền sâu được thiết kế để tăng cường tính khí động học và hiệu suất, thường chỉ được tìm thấy trên các mẫu xe đạp cao cấp và đắt tiền. Chúng được làm từ vật liệu nhẹ và bền như sợi carbon.</p>
      <p> Trên các xe đạp giá rẻ, bánh xe có viền sâu thường được làm từ nhôm, chất lượng thấp. Những bánh xe này không chỉ nặng hơn mà còn có thể không bền và không mang lại hiệu suất như mong đợi. Vì vậy, hãy cẩn trọng và tránh xa những chiếc xe đạp giá rẻ có bánh xe viền sâu làm từ nhôm, vì chúng thường không đáng tin cậy và không mang lại giá trị tốt cho người sử dụng.</p>
      <h3 class="reason-title" id="khong-thuong-hieu"> Linh kiện không có thương hiệu</h3>
      <p>Shimano là một trong những nhà sản xuất linh kiện xe đạp hàng đầu thế giới và cung cấp nhiều bộ phận cho các dòng xe đạp ở mọi mức giá, bao gồm cả xe đạp giá rẻ. Linh kiện Shimano thường đảm bảo chất lượng và độ bền cao.</p>
      <p>Nếu một chiếc xe đạp được trang bị các linh kiện không có thương hiệu, đó có thể là dấu hiệu của chất lượng kém. Những linh kiện này thường được sản xuất với chi phí thấp và có thể không qua quy trình kiểm tra chất lượng nghiêm ngặt, dẫn đến hiệu suất kém và tuổi thọ ngắn. Để đảm bảo mua được chiếc xe đạp chất lượng, hãy chọn những chiếc xe có linh kiện từ các thương hiệu uy tín như Shimano, vì chúng đảm bảo độ tin cậy và hiệu suất tốt hơn.</p>
      <h1 class="reason-title"id="goi-y">Những mẫu xe đạp thể thao giá rẻ dưới 3 triệu không nên bỏ qua</h1>
      
      <section class="bike-model">
        <h2>Xe đạp đua Califa CR6</h2>
        <h3>Thông số kỹ thuật</h3>
        <ul>
          <li><strong>Khung:</strong> Hợp kim thép</li>
          <li><strong>Bộ truyền động:</strong> Shimano TZ 3x7</li>
          <li><strong>Ghi đông/Pô tăng/Cọc yên:</strong> Hợp kim nhôm</li>
          <li><strong>Càng phuộc:</strong> Thép chịu lực</li>
          <li><strong>Phanh:</strong> Phanh đĩa cơ có tay phanh phụ</li>
          <li><strong>Vành:</strong> Nhôm 2 lớp Califa</li>
        </ul>
      </section>

      <section class="bike-model">
        <h2>Xe đạp địa hình Califa CK6</h2>
        <h3>Thông số kỹ thuật</h3>
        <ul>
          <li><strong>Lốp:</strong> 26*1.95</li>
          <li><strong>Khung/Sườn:</strong> Hợp kim thép</li>
          <li><strong>Phuộc/Càng:</strong> Giảm xóc lò xo</li>
          <li><strong>Tay đề:</strong> Shimano 3*7 21 tốc độ</li>
          <li><strong>Líp:</strong> 7 tầng</li>
          <li><strong>Vành:</strong> Nhôm</li>
          <li><strong>Gạt líp:</strong> 7 Shimano Tourney</li>
          <li><strong>Đùi đĩa:</strong> 3 tầng Califa</li>
          <li><strong>Gạt đĩa:</strong> 3 tầng nhôm Shimano Tourney TZ</li>
          <li><strong>Gạt đĩa:</strong> Phanh đĩa cơ</li>
        </ul>
      </section>
    </div>
    </div>

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
    <img src="../assets/images/news5.jpg" alt="road bike" />
    <a href="news2.php"><h3>Hướng dẫn chọn xe đạp đường trường</h3></a>
    <p>📅 Thứ 3 25/06/2024 ⏱ 4 phút đọc</p>
    <p>Đạp xe đường trường (road bike) mang lại nhiều lợi ích...</p>
  </div>
  <div class="post" data-tags="xe đạp, nhập khẩu">
    <img src="../assets/images/news4.jpg" alt="Merida" />
    <a href="news1.php"><h3>Xe đạp Merida của nước nào?</h3></a>
    <p>📅 Thứ 3 25/06/2024 ⏱ 4 phút đọc</p>
    <p>Merida là hãng xe đạp nổi tiếng được nhiều người biết đến...</p>
  </div>
  <div class="post" data-tags="xe đạp, thể thao, địa hình">
    <img src="../assets/images/news3.jpg" alt="xe địa hình" />
    <a href="news1.php"><h3>Top 4 xe đạp thể thao giá rẻ đáng mua nhất</h3></a>
    <p>📅 Thứ 3 25/06/2024 ⏱ 7 phút đọc</p>
    <p>Việc mua một chiếc xe đạp thể thao giá rẻ...</p>
  </div>
  <div class="post" data-tags="xe đạp, vận động">
    <img src="../assets/images/news1.jpg" alt="tay đề lắc" />
    <a href="news2.php"><h3>Cách sử dụng tay đề lắc đúng cách</h3></a>
    <p>📅 Thứ 3 25/06/2024 ⏱ 3 phút đọc</p>
    <p>Việc nắm vững kỹ thuật sử dụng tay đề lắc...</p>
  </div>
</section>

  <script src="../assets/js/script1.js"></script>
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
<script src="../assets/js/active.js" defer></script>
<script src="../assets/js/search.js"></script>
<script src="../assets/js/cart.js"></script>
<script src="../assets/js/add-to-cart.js"></script>
<script src="../assets/js/form.js"></script>
</form>
</body>
</html>

