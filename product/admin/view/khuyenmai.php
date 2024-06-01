<div>
    <h2>KHUYẾN MẠI</h2>
    <form action="index.php?act=addkm" method="post" onsubmit="return xacnhanthem()">
        Tên khuyến mại:<input type="text" name="tenkm">
        Mức khuyến mại:<input type="number" name="muckm">
        Mức áp dụng:<input type="number" name="mucad">
        <input type="submit" name="themmoi" value="thêm mới">
    </form>
    <script>
        function xacnhanthem()
        {
            return confirm("xác nhân thêm");
        }
    </script>
    <br>
    <table >
        <tr>
            <th>STT</th>
            <th>Ten khuyến mại</th>
            <th>Mức khuyến mại</th></th>
            <th>Mức áp dụng</th>
            <th>hành động</th>
        </tr>
        <?php
            //var_dump($kq);
        ?>
        <?php
        if(isset($kq) && (count($kq)>0))
        {
            $i=1;
            foreach($kq as $km)
            {
                echo '<tr>
                        <td>'.$i.'</td>
                        <td>'.$km['tenkhuyenmai'].'</td>
                        <td>'.$km['muckhuyenmai'].'</td>
                        <td>'.$km['mucapdung'].'</td>
                        <td>
                            <a href="index.php?act=editformkm&id='.$km['id'].'">Sửa</a>
                            <a href="index.php?act=deletekm&id='.$km['id'].'">Xóa</a>
                        </td>
                </tr>';
                $i++;
            }
        }
        ?>
        
    </table>
</div>