<?php
    session_start();
    ob_start();
    if(isset($_SESSION['lever']) && ($_SESSION['lever']==1)){
        include "../model/connectdb.php";
        include "../model/danhmuc.php";
        include "../model/sanpham.php";
        include "../model/user.php";
        include "../model/khuyenmai.php";
        //Connectdb();
        include "view/header.php";
        $kq=array();
        if(isset($_GET['act']))
        {
            switch($_GET['act'])
            {
                case 'danhmuc':
                    $kq=getAll_dm();
                    include "view/danhmuc.php";
                    break;

                case 'adddm':
                    if(isset($_POST['themmoi']) && ($_POST['themmoi']))
                    {
                        $tendm=$_POST['tendm'];
                        themdm($tendm);
                    }
                    $kq=getAll_dm();
                    include "view/danhmuc.php";
                    break;
                case 'deletedm':
                    if(isset($_GET['id']))
                    {
                        $id=$_GET['id'];
                        deletedm($id);
                    }
                    $kq=getAll_dm();
                    include "view/danhmuc.php";
                    break;
                case 'editform':
                    if(isset($_GET['id']))
                    {
                        $id=$_GET['id'];
                        $kq1=getonedm($id);
                        $kq=getAll_dm();
                        include "view/editform.php";
                    }
                    if(isset($_POST['id']))
                    {
                        $id=$_POST['id'];
                        $tendm=$_POST['tendm'];
                        updatedm($id,$tendm);
                        $kq=getAll_dm();
                        include "view/danhmuc.php";
                    }
                    
                    break;
                case 'sanpham':
                    //load dsdm
                    $dsdm=getAll_dm();
                    //load dssp
                    $kq=getAll_sp();
                    include "view/sanpham.php";
                    break;
                case 'sanpham_add':
                    if(isset($_POST['themmoi']) &&($_POST['themmoi'])){
                        
                        $iddm=$_POST['iddm'];
                        $tensp=$_POST['tensanpham'];
                        $gia=$_POST['gia'];
                        $soluong=$_POST['soluong'];
                        $target_dir = "../img/";
                        $target_file = $target_dir . basename($_FILES["img"]["name"]);
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                        $img=$target_file;
                        $uploadOk = 1;
                        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif" ) {
                            //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                            $uploadOk = 0;
                        }
                        if($uploadOk==1){
                            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                            themsp($iddm,$tensp,$gia,$img,$soluong);
                        }
                    }
                    //load dsdm
                    $dsdm=getAll_dm();
                    //load dssp
                    $kq=getAll_sp();
                    include "view/sanpham.php";
                    break;
                case 'deletesp':
                    if(isset($_GET['id']))
                    {
                        $id=$_GET['id'];
                        deletesp($id);
                    }
                    $kq=getAll_sp();
                    include "view/sanpham.php";
                    break;
                case 'editformsp':
                    $dsdm=getAll_dm();
                    if(isset($_GET['id']) && ($_GET['id']>0)){
                        $spct=getonesp($_GET['id']);     
                    }
                    $kq=getAll_sp();
                    include "view/editformsp.php";
                    break;
                case 'sanpham_update':
                    $dsdm=getAll_dm();
                    //cập nhật sp    
                    if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                        $iddm=$_POST['iddm'];
                        $tensp=$_POST['tensanpham'];
                        $gia=$_POST['gia'];
                        $soluong=$_POST['soluong'];
                        $id=$_POST['id'];
                        if($_FILES["img"]["name"]!="")
                        {
                            $target_dir = "../img/";
                            $target_file = $target_dir . basename($_FILES["img"]["name"]);
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                            $img=$target_file;
                             $uploadOk = 1;
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                && $imageFileType != "gif" ) {
                                //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                $uploadOk = 0;
                            }
                            if($uploadOk==1){
                                move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                            }
                        }
                        else $img="";

                        updatesp($id,$tensp,$img,$gia,$soluong,$iddm);
                    }

                    $kq=getAll_sp();
                    include "view/sanpham.php";
                    break;
                case 'taikhoan':
                    $kq=getAll_tk();
                    include "view/taikhoan.php";
                    break;
                case 'deletetk':
                    if(isset($_GET['id']))
                    {
                        $id=$_GET['id'];
                        deletetk($id);
                    }
                    $kq=getAll_tk();
                    include "view/taikhoan.php";
                    //include "view/sanpham.php";
                    break;
                
                case 'khuyenmai':
                    $kq=getAll_km();
                    include "view/khuyenmai.php";
                    break;
                case 'addkm':
                    if(isset($_POST['themmoi']) && ($_POST['themmoi']))
                    {
                        $tenkm=$_POST['tenkm'];
                        $muckm=$_POST['muckm'];
                        $mucad=$_POST['mucad'];
                        themkm($tenkm,$muckm,$mucad);                        
                    }
                    $kq=getAll_km();
                    include "view/khuyenmai.php";
                    break;

                case 'deletekm':
                    if(isset($_GET['id']))
                    {
                        $id=$_GET['id'];
                        deletekm($id);
                    }
                    $kq=getAll_km();
                    include "view/khuyenmai.php";
                    break;
                case 'editformkm':
                    if(isset($_GET['id']))
                    {
                        $id=$_GET['id'];
                        $kq1=getonekm($id);
                        $kq=getAll_km();
                        include "view/editformkm.php";
                    }
                    if(isset($_POST['id']))
                    {
                        $id=$_POST['id'];
                        $tenkm=$_POST['tenkm'];
                        $muckm=$_POST['muckm'];
                        $mucad=$_POST['mucad'];
                        updatekm($id,$tenkm,$muckm,$mucad);
                        $kq=getAll_km();
                        include "view/khuyenmai.php";
                    }           
                    break;
                case 'donhang':
                    include "view/donhang.php";
                    break;
        
                case 'thoat':
                    if(isset($_SESSION['lever'])) unset($_SESSION['lever']);
                    header('location: ../user/home.php');
                    
                default: 
                    include "view/home.php";
                    break;
            }
        }
        else{
            include "view/home.php";
        }
        
        include "view/footer.php";
    }
    else{
        header('location: ../user/login.php');
    }
?>