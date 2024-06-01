<div>
    <h2>SỬA DANH MỤC</h2>
    
    <form action="index.php?act=editformkm" method="post" onsubmit="return xacnhansua()">
        Tên khuyến mại:<input type="text" name="tenkm" value="<?=$kq1[0]['tenkhuyenmai']?>">
        Mức khuyến mại:<input type="number" name="muckm" value="<?=$kq1[0]['muckhuyenmai']?>">
        Mức áp dụng:<input type="number" name="mucad" value="<?=$kq1[0]['mucapdung']?>">
        <input type="hidden" name="id" value="<?=$kq1[0]['id']?>">
        <input type="submit" name="capnhat" value="cập nhật">
    </form>
    <script>
        function xacnhansua()
        {
            return confirm("xác nhận sửa");
        }
    </script>
    <br>
    <table border="1" style="width: 70%; text-align: center;">
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