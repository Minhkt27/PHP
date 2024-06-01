<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
    }
    header{
        float: left;
        background-color: rgb(167, 200, 225);
        width: 100%;
        margin-bottom: 10px;
        padding: 20px;
    }
    a{
        text-decoration: none;
        margin-left: 30px;
        font-size: 24px;
    }
    a:hover{
        color: red;
    }
    footer{
        float: left;
        width: 100%;
        margin-top: 50px;
        padding: 20px;
        background-color: rgb(167, 200, 225);
        
    }
    table {
            width: 50%;
            border-collapse: collapse; /* Để gộp viền giữa các ô */
        }
    th, td {
        border: 1px solid black; /* Đặt viền cho các ô */
        padding: 8px; /* Khoảng cách giữa nội dung và viền */
        text-align: left; /* Căn trái cho nội dung */
    }
</style>
<body>
    <header>
    <h1>ADMIN-WEB</h1>
        <nav>
            <a href="index.php?act=danhmuc">Danh Mục</a>
            <a href="index.php?act=sanpham">Sản Phẩm</a>
            <a href="index.php?act=taikhoan">Tài Khoản</a>
            <a href="index.php?act=khuyenmai">Khuyến Mại</a>
            <a href="index.php?act=donhang">Đơn Hàng</a>
            <a href="index.php?act=thoat">Thoát</a>
        </nav>
    </header>
