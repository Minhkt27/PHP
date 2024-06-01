
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Di Động</title>
    <link rel="stylesheet" href="css/styles.css">
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
                    <a href="login.php">Đăng nhập</a> |
                    <a href="register.php">Đăng ký</a>
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
        <h2>Danh mục sản phẩm</h2>
        <ul>
            <?php
                session_start();
                ob_start();
                include "../model/danhmuc.php";
                include "../model/connectdb.php";
                // Kết nối đến cơ sở dữ liệu và lấy danh mục
                $categories = getAll_dm();
        
                if (isset($categories) && count($categories) > 0) {
                    foreach ($categories as $category) {
                        echo '<li><a href="category.php?id=' . $category["id"] . '">' . $category["tendanhmuc"] . '</a></li>';
                    }
                } else {
                    echo "<li>Không có danh mục nào</li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>

