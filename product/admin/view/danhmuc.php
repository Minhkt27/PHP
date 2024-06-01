<div>
    <h2>DANH MỤC</h2>
    <form action="index.php?act=adddm" method="post" onsubmit="return xacnhan()">
        <input type="text" name="tendm">
        <input type="submit" name="themmoi" value="thêm mới">
    </form>
    <script>
        function xacnhan()
        {
            return confirm("xác nhận thêm");
        }
    </script>
    <br>
    <table >
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