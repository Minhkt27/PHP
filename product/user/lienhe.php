<?php
session_start();
ob_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

// Kiểm tra quyền của người dùng
if (isset($_SESSION['lever']) && ($_SESSION['lever'] != 0)) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Di Động</title>
    <link rel="stylesheet" href="css/lienhe.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="logo">
                    <a href="trangchu.php"><img src="img/logo.png" alt="Shop Di Động Logo"></a>
                    <h1>SHOP DI ĐỘNG</h1>
                </div>
                <form action="action.php?id=timkiem" method="get" class="search">
                    <input type="text" name="query" placeholder="Tìm kiếm...">
                    <input type="hidden" name="id" value="timkiem">
                    <input type="submit">Tìm kiếm</input>
                </form>
                <div class="user-options">
                    <a href="">Đơn hàng</a>
                    <a href="">Giỏ hàng</a>
                    <a href="">Tài khoản</a>
                    <a href="home.php">đăng xuất</a>
                </div>

            </div>
        </div>
    </header>
    
    <!-- Navigation -->
    <nav>
        <div class="container">
            <ul class="menu">
                <li><a href="trangchu.php">Trang chủ</a></li>
                <li><a href="dienthoai.php">Điện Thoại</a></li>
                <li><a href="maytinh.php">Máy Tính Bảng</a></li>
                <li><a href="phukien.php">Phụ Kiện</a></li>
                <li><a href="khuyenmai.php">Khuyến Mại</a></li>
                <li><a href="lienhe.php">Liên Hệ</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="categories">
        <div class="danhmuc">
            <h2>Danh mục sản phẩm</h2>
            <ul>
                <?php
                    include "../model/danhmuc.php";
                    include "../model/connectdb.php";
                    // Kết nối đến cơ sở dữ liệu và lấy danh mục
                    $categories = getAll_dm();
            
                    if (isset($categories) && count($categories) > 0) {
                        foreach ($categories as $category) {
                            echo '<li><a href="action.php?id=' . $category["id"] . '">' . $category["tendanhmuc"] . '</a></li>';
                        }
                    } else {
                        echo "<li>Không có danh mục nào</li>";
                    }
                ?>
            </ul>
        </div>
        <div class="text">
            <h1>LỜI NÓI ĐẦU</h1>
        <p>
            Không kể tới những đóng góp to lớn mà ngành công nghệ thông
            tin đã làm được cho lĩnh vực nghiên cứu khoa học kỹ thuật, mà chúng ta có
            thể nhìn thấy luôn những đóng góp thiết thực mà nó mang lại trong đời sống
            xã hội của con người. Với chiếc máy tính cá nhân của mình, chỉ với vài thao
            tác đơn giản, thậm chí là một cú click chuột, bạn có thể đọc báo, xem phim,
            nghe đài, hay mua sắm,…có thể nói cả thế giới thông tin gần như hiện ra
            trước mắt bạn. 
            Cùng với sự phát triển của nền kinh tế, con người ngày càng bộn bề với
            trăm nghìn công việc, chúng ta không có nhiều thời gian cho việc tìm kiếm,
            chọn lựa mua sắm những món quà cho mình và người thân, đơn giản
            chỉ là những bó hoa thôi nhưng cũng làm cho chúng ta cảm thấy cuộc sống
            nhẹ nhàng vui vẻ, cảm giác thanh thản, quên đi những mệt mỏi trông công
            việc hằng ngày. Mỗi con người đã không ít lần phải suy nghĩ, băn khoăn khi
            muốn tặng cho ai đó một món quà sao cho độc đáo mới lạ và quan trọng là
            phải mang nhiều ý nghĩa, các bạn sẽ nghĩ đến những bó hoa, đó là những bó
            hoa được bó khéo léo đẹp mắt, tuy không phải món quà có giá trị cao nhất
            nhưng hoa luôn là món quà thể hiện được sự quan tâm, tình cảm yêu quý của
            người tặng đến với người nhận.
            Hoa là sự tinh tế trang trọng trong các nhà hàng, khách sạn hay cơ quan
            công sở, hoa còn là niềm vui đôi lứa trong các lễ cưới, là sự cảm thông chia
            buồn trong đám tang, là sự trang trọng lich sự trong các lễ khai trương, các
            cuộc họp, hội nghị…Xuất phát từ những suy nghĩ đó, em muốn xây dựng một
            website chuyên cung cấp các sản phẩm về hoa phục vụ cho cuộc sông hằng
            ngày, quà tặng, cung cấp hoa định kỳ cho nhà hàng, khách sạn hay cơ quan
            doanh nghiệp. Mong rằng sẽ mang những sắc hoa tươi thắm nhất, những món
            quà ý nghĩa nhất đến với người thân yêu của bạn trên khắp mọi miền, khoảng
            cách về không gian và thời gian không còn là vấn đề nữa.
            Đó cũng là lý do chính nhóm em chọn đề tài “Xây dựng website shop di động”.
            <br>
            Thành viên nhóm:
            <br>
            - Nguyến Ngọc Hiếu.<br>
            - Nguyễn Tuấn Minh.<br>
            - Đinh Quang Nam.<br>
            - Hà Minh Nghĩa.<br>
            - Nguyễn Thế Việt.
        </p>
        </div>
        
    </div>
    <div>liên Hệ</div>
</body>
</html>
