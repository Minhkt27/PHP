<?php
    session_start();
    ob_start();
    include "../model/connectdb.php";
    include "../model/user.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['dangki'])) {
        // Lấy dữ liệu từ form
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $checkPassword = $_POST['checkpass'];
        $check_isnone=Checkuser_isnone($username);
        // Kiểm tra dữ liệu
        if (empty($name) || empty($address) || empty($email) || empty($username) || empty($password) || empty($checkPassword)) {
            echo "Vui lòng điền đầy đủ thông tin";
        } elseif ($password !== $checkPassword) {
            echo "Mật khẩu không khớp";
        }
        elseif(!empty($check_isnone)){
            echo "tài khoản đã tồn tại";
        }
        else {
            // Thêm mới người dùng
            themuser($name, $address, $email, $username, $password);
            echo "Đăng ký thành công";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="css/sigin.css">
</head>
<body>
    <div class="register-container">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="register-form">
            <h2>Register</h2>
            <div class="infor">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="infor">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" required>
            </div>
            <div class="infor">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="infor">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="infor">
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" required>
            </div>
            <div class="infor">
                <label for="checkpass">Confirm Password</label>
                <input type="password" name="checkpass" id="checkpass" required>
            </div>
            <button type="submit" name="dangki">Đăng ký</button>
            <a href="login.php" class="login-link">Đăng nhập</a>
        </form>
    </div>
</body>
</html>
