<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <!--Link icon-->
    <title>Cart</title>
    <link rel="stylesheet" href="assets/css/reset.css" />
    <link rel="stylesheet" href="assets/css/base.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
</head>

<body>
    <?php
    require_once __DIR__.'/config.php';
    require_once __DIR__ . '/nguoidung.php';
    session_start();
    $number = 0;
    $User_id = Nguoidung::loginInfo()['User_id'];
    $sql = "SELECT chitietdonhang.Bike_id, xedap.Tenxe as `Tên xe`, xedap.Hinhanh as `Hình ảnh`, quantity as `Số lượng`, price as `Giá bán` FROM quanlyxedap.chitietdonhang join xedap on chitietdonhang.Bike_id = xedap.Bike_id where User_id = '$User_id'";
    $result = mysqli_query($conn, $sql);
    $cat = $result->fetch_assoc(); // $cat là mảng kết hợp
    $sql1 = "SELECT SUM(quantity) as `Số hàng` from chitietdonhang where User_id = $User_id";
    $result1 = mysqli_query($conn, $sql1);
    $cat1 = $result1->fetch_assoc(); // $cat là mảng kết hợp
    $number = $cat1['Số hàng'];
    $sql2 = "SELECT SUM(quantity*price) as `Tổng tiền` from chitietdonhang where User_id = '$User_id' group by User_id ;";
    $result2 = mysqli_query($conn, $sql2);
    $cat2 = $result2->fetch_assoc(); // $cat là mảng kết hợp
    if (isset($cat2['Tổng tiền'])) {
    $tongtien = $cat2['Tổng tiền'];
    $tamtinh = $tongtien - 3000000;
    } else {
    // Nếu không có thì gán giá trị mặc định hoặc bỏ qua
    $tongtien = 0;
    $tamtinh = 0;


}

    // echo $number;
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
                        <i class="ri-search-line" style="cursor: pointer;"></i>
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
            <div class="container">
                <!-- Cart Top Steps -->
                <div class="cart-top step-1" id="cartTop">
                    <div class="cart-steps">
                        <div class="cart-step step-1 active">
                            <div class="circle"><i class="ri-shopping-cart-2-line"></i></div>
                            <p>Giỏ hàng</p>
                        </div>
                        <div class="line"></div>
                        <div class="cart-step step-2">
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


        <!-- Cart Content -->
        <section>
            <div class="container">
                <div class="cart-conten">
                    <div class="cart-conten-left">
                        <table>
                            <thead>
                                <tr>
                                    <th>Ảnh</th>
                                    <th>Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody id="cartBody">
                                <!-- Dữ liệu sản phẩm sẽ được JS thêm vào đây -->
                                <?php if ($result->num_rows === 0): ?>
                                <tr>
                                    <td colspan="4">Giỏ hàng đang trống</td>
                                </tr>
                                <?php else: ?>
                                <?php foreach($result as $cat) : ?>
                                <tr>
                                    <td><img src="assets/images/<?php echo $cat['Hình ảnh'] ?>" alt=""></td>
                                    <td><?php echo $cat['Tên xe'] ?></td>
                                    <td>
                                        <div class="quantity-control">
                                            <input type="number" class="quantity-input"
                                                data-id="<?php echo $cat['Bike_id']; ?>"
                                                value="<?php echo $cat['Số lượng']; ?>" min="0">
                                        </div>
                                    </td>
                                    <td><?php echo number_format($cat['Số lượng'] * $cat['Giá bán'], 0, ',', '.'); ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="cart-conten-right">
                        <table>
                            <tr>
                                <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                            </tr>
                            <tr>
                                <td>TỔNG SẢN PHẨM</td>
                                <td id="totalItems"><?php echo $number ?></td>
                            </tr>
                            <tr>
                                <td>TỔNG TIỀN HÀNG</td>
                                <td>
                                    <p id="cartSubtotal"><?php echo number_format($tongtien, 0, ',', '.') ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>TẠM TÍNH</td>
                                <td>
                                    <p id="cartTotal" style="color: brown;">
                                        <?php echo number_format($tamtinh, 0, ',', '.') ?></p>
                                </td>
                            </tr>
                        </table>

                        <div class="cart-conten-righ-text">
                            <p>Miễn phí Ship cho đơn hàng từ 3.000.000₫</p>
                        </div>

                        <div class="cart-conten-righ-text-button">
                            <a href="bike.php">
                                <button>TIẾP TỤC MUA SẮM</button>
                            </a>
                            <a href="address.php">
                                <button id="btn-to-step-2" type="button">THANH TOÁN</button>
                            </a>
                        </div>

                        <div class="cart-content-right-user">
                            <p>TÀI KHOẢN BLUESOLIS BIKE</p>
                            <p>Hãy <a href="#">đăng nhập</a> tài khoản của bạn để tích điểm thành viên</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>

    <script>
    //Chọn tất cả các thẻ <input> có class là quantity-input (tức là ô nhập số lượng trong giỏ hàng).
    document.querySelectorAll('.quantity-input').forEach(input => { //duyệt qua từng ô nhập
        input.addEventListener('change', function() { //lắng nghe sự kiện khi thay đổi giá trị số lượng
            const bikeId = this.dataset.id; //lấy giá trị từ thẻ input với data-id=bike_id
            const newQuantity = this.value; //Lấy số lượng hiện thời mà người dùng vừa nhập

            // Gửi AJAX để cập nhật
            fetch('update-quantity.php', { //gửi yêu cầu với file này bằng pt post 
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded', //khai báo kiểu dữ liệu gửi đi
                    },
                    body: `bike_id=${bikeId}&quantity=${newQuantity}` //dữ liệu mà post gửi đi là bike_id và quantity
                })
                .then(res => res.text()) // nhận phản hồi từ server dạng text
                .then(data => {
                    if (newQuantity == 0) {
                        if (confirm("Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng?")) {
                            // Nếu đồng ý, gửi tiếp request để xóa
                            fetch('xoasanpham.php', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/x-www-form-urlencoded',
                                    },
                                    body: `bike_id=${bikeId}`
                                })
                                .then(res => res.text())
                                .then(() => location.reload());
                        } else {
                            location.reload(); // Nếu hủy, reload để khôi phục số lượng cũ
                        }
                    } else {
                        location.reload();
                    }
                });
        });
    });
    </script>



    <script src="assets/js/cart.js"></script>
    <script src="assets/js/add-to-cart.js"></script>

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
    <script src="assets/js/index.js"></script>
    <script src="assets/js/search.js"></script>
    <script src="assets/js/active.js" defer></script>
    <script src="assets/js/form.js"></script>
    <script src="assets/js/cartTop.js"></script>
</body>

</html>