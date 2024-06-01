<?php
session_start();
ob_start();
    include "../model/connectdb.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/user.php";
    include "../model/khuyenmai.php";

    if(isset($_GET['id']))
    {
        switch($_GET['id'])
        {
            case '2': header("location: iphone.php");
                    break;
            case '3': header("location: samsung.php");
                    break;
            case '4': header("location: oppo.php");
                    break;
            case '5': header("location: maytinh.php");
                    break;
            case '17': header("location: lg.php");
                    break;
            case '18': header("location: sony.php");
                    break;
            case '20': header("location: xiaomi.php");
                    break;
            case 'timkiem': 
                if (isset($_GET['timkiem']) && ($_GET['timkiem'])) {
                        $query = isset($_GET['query']);
                        $sp = searchByName($query);
                        header("location: timkiem.php");
                    }
                
                    break;
        }
    }
?>