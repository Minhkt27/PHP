<?php
    function getAll_km()
    {
        $conn=Connectdb();
        $stmt = $conn ->prepare("SELECT * FROM tbl_khuyenmai" );
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function deletekm($id)
    {
        $conn=Connectdb();
        $sql = "DELETE FROM tbl_khuyenmai WHERE id=$id";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    function getonekm($id)
    {
        $conn=Connectdb();
        $stmt = $conn ->prepare("SELECT * FROM tbl_khuyenmai WHERE id=$id" );
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function updatekm($id,$tenkm,$muckm,$mucad)
    {
        $conn=Connectdb();
        $sql = "UPDATE tbl_khuyenmai SET tenkhuyenmai='".$tenkm."', muckhuyenmai='".$muckm."', mucapdung='".$mucad."' WHERE id=$id";
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }

    function themkm($tenkm,$muckm,$mucad)
    {
        $conn=Connectdb();
        $sql = "INSERT INTO tbl_khuyenmai (tenkhuyenmai, muckhuyenmai, mucapdung) VALUES ('$tenkm','$muckm','$mucad')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
?>