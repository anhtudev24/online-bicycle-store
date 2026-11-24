<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Chi tiết sản phẩm</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/><!--Link icon-->
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="CSS copy/reset.css" />
    <link rel="stylesheet" href="CSS copy/base.css" />
    <link rel="stylesheet" href="CSS copy/styles.css" />
    <script defer src="JS/script.js"></script>
</head>
<body>

    <?php 
        session_start();
        require_once __DIR__.'/config.php';
        require_once __DIR__ . '/nguoidung.php';
        $id = (int)$_GET['id'];
        $sql = "SELECT Tenxe AS `Tên xe`,Bike_id AS `Mã xe`, thuonghieu.Tenthuonghieu AS `Thương hiệu`, Giaban AS `Giá bán`, hinhanh AS `Hình ảnh` FROM quanlyxedap.xedap JOIN thuonghieu on thuonghieu.Brand_id = xedap.Brand_id where Bike_id = $id;";
        $result = $conn->query($sql);
        $cat = $result->fetch_assoc(); // $cat là mảng kết hợp
        $tenXe = $cat['Tên xe'];
        $thuongHieu= $cat['Thương hiệu'];
        $giaBan = $cat['Giá bán'];
        $maxe = $cat['Mã xe'];
        $hinhanh = $cat['Hình ảnh'];

        // echo $tenXe;
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

  <!-- BREADCRUMB (Thanh điều hướng vị trí hiện tại)-->
  <div class="breadcrumb-wrapper">
      <nav class="breadcrumb-top">
        <a href="index.php">Trang chủ</a> /<a href="bike.php">Xe đạp</a> / <span><?php echo $cat['Tên xe'] ?> </span>
      </nav>
  </div>
  <!-- THÔNG TIN SẢN PHẨM -->
  <div class="container-product">
    <!-- Bên trái: Ảnh sản phẩm -->
    <div class="left">
      <!-- hình ảnh thu nhỏ -->
      <div class="thumbnails">
        <img src="Video/ruby.webp" class="active" />
        <img src="Video/ruby1.webp" />
        <img src="Video/ruby2.jpg" />
      </div>
      <!-- hình ảnh chính -->
      <div class="main-image">
            <img src="img/<?php echo $hinhanh ?>" alt="Main Image"/>
      </div>
    </div>

  <!-- Bên phải: Thông tin chi tiết -->
  <div class="right"
      id="productInfo"
      data-id="orbe02001"
      data-title="Xe đạp Touring Escape 1"
      data-brand="EGA Bike"
      data-price="11990000"
      data-old-price="15500000"
      data-discount="25"
      data-image="Video/escape1.jpg">
      <h1 class="title"><?php echo $tenXe ?></h1>

    <!-- đánh giá sao -->
    <div class="stars">
      <i class="fas fa-star"></i> <!-- ngôi sao đầy -->
      <i class="fas fa-star"></i> 
      <i class="fas fa-star"></i> 
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
    </div>

    <div class="product-meta">
        <span>Thương hiệu: <?php echo $thuongHieu ?></span> | <span>Mã sản phẩm: Đang cập nhật</span>
      </div>
      <div class="price">
        <span class="current"><?php echo number_format($giaBan, 0, '', '.') . 'đ'; ?></span>
        <span class="old"><?php echo number_format($giaBan * (1+0.25), 0, '', '.') . 'đ'; ?></span>
        <span class="discount">-25%</span>
        <div class="savings">
          (Tiết kiệm: <span class="savings-amount"><?php echo number_format($giaBan * (1+0.25) - $giaBan, 0, '', '.') . 'đ'; ?>)</span>
        </div>
      </div>
     

    <!-- hộp khuyến mãi - ưu đãi -->
    <div class="promotion-box">
      <p><strong>🎁 KHUYẾN MÃI - ƯU ĐÃI</strong></p>
      <ul>
        <li>Miễn phí Ship cho đơn hàng từ 300.000₫</li>
        <li>Đổi trả trong 30 ngày nếu sản phẩm lỗi bất kì</li>
        <li>Chương trình tích điểm cho khách hàng thân thiết</li>
      </ul>
    </div>

    <!-- chọn số lượng - thêm vào giỏ hàng -->
<?php if (Nguoidung::loginInfo()) : ?>
                <form id="add-to-cart-form" action="cart-add.php" method="post">
                    <div class="buy-box">
                        <div class="qty">
                            <button type="button" onclick="changeQty(-1)">-</button>
                            <input id="qty" name="Soluong" type="text" value="1" />
                            <button type="button" onclick="changeQty(1)">+</button>
                        </div>

                        <button type="button" id="addToCartBtn" class="add-cart">THÊM VÀO GIỎ</button>

                        <input type="hidden" name="price" value="<?php echo $giaBan ?>">
                        <input type="hidden" name="Bike_id" value="<?php echo $maxe ?>">
                    </div>

                    <button type="button" class="buy-now" onclick="location.href='cart.php'">MUA NGAY</button>
                </form>

                <script>
                // Xử lý thêm giỏ hàng bằng AJAX
                document.getElementById("addToCartBtn").addEventListener("click", function() {
                    const form = document.getElementById("add-to-cart-form");
                    const formData = new FormData(form);

                    fetch("cart-add.php", {
                            method: "POST",
                            body: formData
                        })
                        .then(response => response.text())
                        .then(data => {
                            // alert("✅ Đã thêm vào giỏ hàng!");
                            // Hoặc cập nhật giao diện số lượng giỏ, v.v.
                        })
                        .catch(error => {
                            console.error("Lỗi:", error);
                            alert("❌ Thêm vào giỏ hàng thất bại!");
                        });
                });
                </script>

                <?php else: ?>
                <a href="login.php"><button class="buy-now">Đăng nhập để mua hàng</button></a>
                <?php endif; ?>

    <div class="hotline">
      Gọi đặt mua
      <a href="tel:18000000" class="hotline-link"><strong>1800.0000</strong></a>
      (7:30 - 22:00)
    </div>

    <!-- lợi ích khi mua hàng -->
    <div class="benefits">
      <span><i class="fas fa-shipping-fast"></i> Giao hàng toàn quốc</span>
      <span><i class="fas fa-gift"></i> Tích điểm tất cả sản phẩm</span>
      <span><i class="fas fa-comments"></i> Tư vấn tận tình – Giải đáp mọi thắc mắc</span>
    </div>
  </div>
</div>

  <!-- ==TABS ==-->
  <div class="tabs">
    <div class="tab active" onclick="showTab(0)">Mô tả sản phẩm</div>
    <div class="tab" onclick="showTab(1)">Chính sách giao hàng</div>
    <div class="tab" onclick="showTab(2)">Chính sách đổi trả</div>
  </div>
  <!-- Tab 1: Mô tả sản phẩm -->
  <div class="tab-content active" id="tab0">
    <p>Trong nhịp sống hiện đại ngày nay, nhu cầu về một chiếc xe đạp không chỉ dừng lại ở khả năng di chuyển, mà còn phải đáp ứng được sự tiện lợi, tính thẩm mỹ và trải nghiệm thoải mái cho người sử dụng. Alight 3 DD Disc – một mẫu xe đạp đô thị cao cấp dành riêng cho phái đẹp, hội tụ đầy đủ những yếu tố đó.</p>
    <h3>Các đặc điểm nổi bật:</h3>
    <ul>
      <li><strong>Hệ thống truyền động Shimano 3x7 tốc độ</strong>  (21 cấp số) giúp người lái dễ dàng điều chỉnh tốc độ phù hợp với nhiều điều kiện địa hình, từ đường bằng phẳng đến những con dốc nhẹ trong thành phố.</li>
      <li><strong>Phanh đĩa cơ (disc brake)</strong> mang lại lực hãm mạnh, ổn định, đặc biệt an toàn khi đi trong điều kiện thời tiết mưa hoặc đường trơn trượt.</li>
      <li><strong>Bánh xe 700C với lốp mỏng và vân nhẹ,</strong> giúp tăng tốc nhanh, lăn êm và tiết kiệm sức hơn trên các cung đường đô thị.</li>
      <li><strong>Chân chống tích hợp sẵn,</strong> thuận tiện cho việc dừng xe bất kỳ lúc nào.</li>
    </ul>
    <h3>Phù hợp với:</h3>
    <ul>
        <li> Nữ giới muốn tìm một chiếc xe đạp đẹp, nhẹ, dễ điều khiển và đa dụng.</li>
        <li>Phù hợp với dân văn phòng, sinh viên, người dùng xe cho mục đích đi lại hàng ngày và rèn luyện sức khỏe.</li>
        <li>Người mới bắt đầu chơi xe đạp và muốn có trải nghiệm thoải mái, ổn định.</li>
    </ul>
  </div>
  <!-- tab 2: Chính sách giao hàng -->
  <div class="tab-content" id="tab1">
    <p>EGA Bike cam kết mang đến trải nghiệm mua sắm tiện lợi và nhanh chóng cho khách hàng thông qua chính sách giao hàng linh hoạt và chuyên nghiệp. 
      Dưới đây là các thông tin chi tiết về chính sách giao hàng của chúng tôi:</p>
    <h3>1. Phạm vi giao hàng</h3>
    <ul>
      <li> EGA Bike cung cấp dịch vụ giao hàng trên toàn quốc, bao gồm cả các khu vực thành thị và nông thôn.</li>
    </ul>
    <h3>2. Thời gian giao hàng</h3>
    <ul>
      <li><strong> Nội thành:</strong> Đối với các đơn hàng trong nội thành, thời gian giao hàng từ 1-2 ngày làm việc.</li>
      <li><strong> Ngoại thành và tỉnh khác:</strong> Thời gian giao hàng từ 3-5 ngày làm việc, tùy thuộc vào khoảng cách và điều kiện vận chuyển.</li>
    </ul>
    <h3>3. Phí giao hàng</h3>
    <ul>
      <li><strong> Nội thành:</strong> Miễn phí giao hàng cho các đơn hàng có giá trị từ 500.000 VND trở lên. Đối với các đơn hàng dưới 500.000 VND, phí giao hàng sẽ được tính dựa trên khoảng cách.</li>
      <li><strong> Ngoại thành và tỉnh khác:</strong> Phí giao hàng sẽ được tính dựa trên trọng lượng, kích thước của sản phẩm và khoảng cách giao hàng. Khách hàng sẽ được thông báo phí giao hàng cụ thể trước khi hoàn tất đơn hàng.</li>
    </ul>
    <h3>4. Đóng gói sản phẩm</h3>
    <ul>
      <li> Sản phẩm được đóng gói cẩn thận, đảm bảo an toàn trong quá trình vận chuyển. Đối với các sản phẩm dễ vỡ hoặc có giá trị cao, chúng tôi sẽ có biện pháp bảo vệ đặc biệt.</li>
    </ul>
    <h3>5. Theo dõi đơn hàng</h3>
    <ul>
      <li> Khách hàng có thể theo dõi tình trạng đơn hàng thông qua mã vận đơn được cung cấp sau khi đơn hàng được gửi đi. Chúng tôi sẽ gửi thông tin này qua email hoặc tin nhắn SMS.</li>
    </ul>
    <h3>6. Chính sách đổi trả</h3>
    <ul>
      <li> Trong trường hợp sản phẩm bị hư hỏng, sai sót hoặc không đúng với đơn đặt hàng, khách hàng có thể yêu cầu đổi trả trong vòng 7 ngày kể từ ngày nhận hàng. EGA Bike sẽ hỗ trợ chi phí vận chuyển cho các đơn hàng đổi trả do lỗi từ phía chúng tôi.</li>
    </ul>
    <h3>7. Liên hệ hỗ trợ</h3>
    <ul>
      <li> Nếu có bất kỳ thắc mắc hoặc yêu cầu hỗ trợ về vấn đề giao hàng, khách hàng có thể liên hệ với đội ngũ chăm sóc khách hàng của EGA Bike qua số điện thoại hoặc email. Chúng tôi luôn sẵn sàng hỗ trợ bạn.</li>
    </ul>
    <p>Chúng tôi mong muốn mang đến sự hài lòng tuyệt đối cho khách hàng qua từng đơn hàng. Hãy tin tưởng và lựa chọn EGA Bike cho những chuyến đạp xe của bạn!</p>
    </div>
    <!-- tab 3: chính sách đổi trả -->
  <div class="tab-content " id="tab2">
    <h3>1. Điều kiện đổi trả</h3>
    <p>Quý Khách hàng cần kiểm tra tình trạng hàng hóa và có thể đổi hàng/ trả lại hàng ngay tại thời điểm giao/nhận hàng trong những trường hợp sau:</p>
    <ul>
      <li>Hàng không đúng chủng loại, mẫu mã trong đơn hàng đã đặt hoặc như trên website tại thời điểm đặt hàng.</li>
      <li>Không đủ số lượng, không đủ bộ như trong đơn hàng.</li>
      <li>Tình trạng bên ngoài bị ảnh hưởng như rách bao bì, bong tróc, bể vỡ…</li>
    </ul>
    <p>Khách hàng có trách nhiệm trình giấy tờ liên quan chứng minh sự thiếu sót trên để hoàn thành việc hoàn trả/đổi trả hàng hóa.</p>

    <h3>2. Quy định về thời gian thông báo và gửi sản phẩm đổi trả</h3>
    <ul>
      <li><strong>Thời gian thông báo đổi trả:</strong> trong vòng 48h kể từ khi nhận sản phẩm đối với trường hợp sản phẩm thiếu phụ kiện, quà tặng hoặc bể vỡ.</li>
      <li><strong>Thời gian gửi chuyển trả sản phẩm:</strong> trong vòng 14 ngày kể từ khi nhận sản phẩm.</li>
      <li><strong>Địa điểm đổi trả sản phẩm:</strong> Khách hàng có thể mang trực tiếp đến văn phòng/ cửa hàng của chúng tôi hoặc chuyển qua đường bưu điện.</li>
    </ul>
    <p>Trong trường hợp Quý Khách hàng có ý kiến đóng góp/ khiếu nại liên quan đến chất lượng sản phẩm, Quý Khách hàng vui lòng liên hệ đường dây chăm sóc khách hàng của chúng tôi.</p>
  </div>

<!-- SẢN PHẨM CÙNG PHÂN KHÚC -->
<div class="related-products">
  <h2 class="section-title">Sản phẩm cùng phân khúc</h2>
  <div class="product-grid">
    
    <!-- sản phẩm 1 -->
    <div class="product-card">
      <a href="road_bike_3.php" class="product-link">
        <div class="product-image">
          <img src="Video/xedapnaughty.webp" alt="Xe đẹp Naughty">
        </div>
        <div class="product-brand">EGA BIKE</div>
        <div class="product-title">Xe đạp Naughty</div>
        <div class="product-rating">
          ★★★★★
        </div>
        <div class="product-price">
          <span class="current-price">17.838.000₫</span>
          <span class="old-price">24.580.000₫</span>
          <span class="discount">-28%</span>
        </div>
      </a>
    </div>

    <!-- sản phẩm 2 -->
    <div class="product-card">
      <a href="road_bike_2.php" class="product-link">
        <div class="product-image">
          <img src="Video/allez.webp" alt="Xe đạp đường trường Allez 2021">
        </div>
        <div class="product-brand">EGA BIKE</div>
        <div class="product-title">Xe đạp đường trường Allez 2021</div>
        <div class="product-rating">
          ★★★★☆
        </div>
        <div class="product-price">
          <span class="current-price">15.990.000₫</span>
          <span class="old-price">24.580.000₫</span>
          <span class="discount">-35%</span>
        </div>
      </a>
    </div>

    <!-- sản phẩm 3 -->
    <div class="product-card">
      <a href="mountain_bike_1.php" class="product-link">
        <div class="product-image">
          <img src="Video/orbea.webp" alt="Xe đạp đường trường Orbea Vector Drop">
        </div>
        <div class="product-brand">EGA BIKE</div>
        <div class="product-title">Xe đạp đường trường Orbea Vector Drop</div>
        <div class="product-rating">
          ★★★★☆
        </div>
        <div class="product-price">
          <span class="current-price">17.838.000₫</span>
          <span class="old-price">24.580.000₫</span>
          <span class="discount">-28%</span>
        </div>
      </a>
    </div> 
  </div>
</div>
<script src="JS/add-to-cart.js"></script>
<script src="JS/search.js"></script>
<script src="JS/cart.js"></script>
<script src="JS/active.js" defer></script>
<script src="JS/form.js"></script>

  </form>
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
