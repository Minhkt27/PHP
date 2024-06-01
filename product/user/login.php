<?php
session_start();
ob_start();
include "../model/connectdb.php";
include "../model/user.php";

if(isset($_POST['login']) && ($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $lever = Checkuser($user, $pass);

    if ($lever === false) {
        echo "Tên đăng nhập hoặc mật khẩu không đúng!";
    } else {
        $_SESSION['user'] = $user; // Lưu tên người dùng vào session
        $_SESSION['lever'] = $lever;
        if($lever == 0) {
            header('Location: trangchu.php');
            exit();
        } elseif($lever == 1) {
            header('Location: ../admin/index.php');
            exit();
        }
    }
}

if(isset($_POST['sigin']) && ($_POST['sigin'])) {
    header('Location: dangki.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login-container">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="login-form">
            <h2>Login</h2>
            <div class="input-group">
                <label for="user">User Name</label>
                <input type="text" name="user" id="user" required>
            </div>
            <div class="input-group">
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" required>
            </div>
            <input type="submit" name="login" value="đăng nhập">
            <a href="register.php" id="sigin">đăng kí</a>
        </form>
    </div>
</body>
</html>
