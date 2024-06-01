<?php
    function getAll_sp()
    {
        $conn=Connectdb();
        $stmt = $conn ->prepare("SELECT * FROM tbl_sanpham" );
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function deletesp($id)
    {
        $conn=Connectdb();
        $sql = "DELETE FROM tbl_sanpham WHERE id=$id";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    function getonesp($id)
    {
        $conn=Connectdb();
        $stmt = $conn ->prepare("SELECT * FROM tbl_sanpham WHERE id=$id" );
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function getsp_byIDdm($id_dm)
    {
        $conn=Connectdb();
        $stmt = $conn ->prepare("SELECT * FROM tbl_sanpham WHERE id_danhmuc=$id_dm" );
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function getonesp_byname($name)
    {
        $conn=Connectdb();
        $stmt = $conn ->prepare("SELECT * FROM tbl_sanpham WHERE tensanpham=$name" );
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function updatesp($id,$tensp,$hinh,$gia,$soluong,$id_dm)
    {
        $conn=Connectdb();
        if($hinh==""){
            $sql = "UPDATE tbl_sanpham SET tensanpham='".$tensp."' , gia='".$gia."' ,soluong='".$soluong."', id_danhmuc='".$id_dm."' WHERE id=$id";
        }else
            $sql = "UPDATE tbl_sanpham SET tensanpham='".$tensp."' , gia='".$gia."' , id_danhmuc='".$id_dm."' , img='".$hinh."' WHERE id=$id";
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
        
    }

    function themsp($iddm,$tensp,$gia,$img,$soluong)
    {
        $conn=Connectdb();
        $sql = "INSERT INTO tbl_sanpham (id_danhmuc,tensanpham,gia,img,soluong) VALUES ('$iddm','$tensp','$gia','$img','$soluong')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }

    function searchByName($query) {
        $conn = Connectdb();
        $query = strtolower($query); // Chuyển đổi chuỗi đầu vào thành chữ thường
        $stmt = $conn->prepare("SELECT * FROM tbl_sanpham WHERE LOWER(tensanpham) LIKE :query");
        $stmt->bindValue(':query', "%$query%", PDO::PARAM_STR);
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
?>