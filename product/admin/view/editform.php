<div>
    <h2>SỬA DANH MỤC</h2>
    
    <form action="index.php?act=editform" method="post" onsubmit="return xacnhan()">
        <input type="text" name="tendm" value="<?=$kq1[0]['tendanhmuc']?>">
        <input type="hidden" name="id" value="<?=$kq1[0]['id']?>">
        <input type="submit" name="capnhat" value="cập nhật">
    </form>
    <script>
        function xacnhan()
        {
            return confirm("xác nhận sửa");
        }
        function xacnhanXoa()
        {
            return confirm("xác nhận xóa");
        }
    </script>
    <br>
    <table border="1" style="width: 50%;">
        <tr>
            <th>STT</th>
            <th>Ten danh muc</th>
            <th>hành động</th>
        </tr>
        <?php
            //var_dump($kq);
        ?>
        <?php
        if(isset($kq) && (count($kq)>0))
        {
            $i=1;
            foreach($kq as $dm)
            {
                echo '<tr>
                        <td>'.$i.'</td>
                        <td>'.$dm['tendanhmuc'].'</td>
                        <td>
                            <a href="index.php?act=editform&id='.$dm['id'].'">Sửa</a>
                            <a href="index.php?act=deletedm&id='.$dm['id'].'">Xóa</a>
                        </td>
                </tr>';
                $i++;
            }
        }
        ?>
        
    </table>
</div>