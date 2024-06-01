<?php
    function Checkuser($user, $pass)
    {
        $conn = Connectdb();
        $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE username = '".$user."' AND password='".$pass."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq[0]['lever'];  
    }
    function Checkuser_isnone($user) {
        // Kết nối tới cơ sở dữ liệu
        $conn = Connectdb();
        
        // Chuẩn bị truy vấn SQL với tham số
        $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE username = :username");
    
        // Gán giá trị cho tham số trong truy vấn
        $stmt->bindParam(':username', $user);
    
        // Thực thi truy vấn
        $stmt->execute();
    
        // Lấy kết quả
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        // Trả về kết quả
        return $result;
    }
    


    function themuser($name, $address, $email, $username, $password)
    {
        $conn = Connectdb();

        try {
            $sql = "INSERT INTO tbl_user (name, address, email, username, password) VALUES (:name, :address, :email, :username, :password)";
            $stmt = $conn->prepare($sql);

            

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);

            $stmt->execute();

            echo "Đăng ký tài khoản thành công!";
        } catch(PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    function getAll_tk()
    {
        $conn=Connectdb();
        $stmt = $conn ->prepare("SELECT * FROM tbl_user WHERE lever=0" );
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function getonetk($id)
    {
        $conn=Connectdb();
        $stmt = $conn ->prepare("SELECT * FROM tbl_user WHERE id=$id" );
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function deletetk($id)
    {
        $conn=Connectdb();
        $sql = "DELETE FROM tbl_user WHERE id=$id";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    // function updatetk($id,$tensp,$hinh,$gia)
    // {
    //     $conn=Connectdb();
    //     $sql = "UPDATE btl_sanpham SET tensanpham='".$tensp."' WHERE id=$id";
    //     // Prepare statement
    //     $stmt = $conn->prepare($sql);
    //     // execute the query
    //     $stmt->execute();
    //     $sql = "UPDATE btl_sanpham SET img='".$hinh."' WHERE id=$id";
    //     // Prepare statement
    //     $stmt = $conn->prepare($sql);
    //     // execute the query
    //     $stmt->execute();
    //     $sql = "UPDATE btl_sanpham SET gia='".$gia."' WHERE id=$id";
    //     // Prepare statement
    //     $stmt = $conn->prepare($sql);
    //     // execute the query
    //     $stmt->execute();
    // }
?>