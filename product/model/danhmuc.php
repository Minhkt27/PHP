<?php
    function getAll_dm()
    {
        $conn=Connectdb();
        $stmt = $conn ->prepare("SELECT * FROM tbl_danhmuc" );
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function deletedm($id)
    {
        $conn=Connectdb();
        $sql = "DELETE FROM tbl_danhmuc WHERE id=$id";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    function getonedm($id)
    {
        $conn=Connectdb();
        $stmt = $conn ->prepare("SELECT * FROM tbl_danhmuc WHERE id=$id" );
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function updatedm($id,$tendm)
    {
        $conn=Connectdb();
        $sql = "UPDATE tbl_danhmuc SET tendanhmuc='".$tendm."' WHERE id=$id";
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }

    function themdm($tendm)
    {
        $conn=Connectdb();
        $sql = "INSERT INTO tbl_danhmuc (tendanhmuc) VALUES ('$tendm')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
?>