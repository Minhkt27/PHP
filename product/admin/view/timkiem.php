<div>
    <h2>SẢN PHẨM</h2>
    <form action="timkiem.php" method="get">
        <input type="text" name="thongtin" style="width: 300px;margin: 10px 10px 10px 300px;height: 25px;">
        <input type="submit" value="tìm" name="tim" style="width: 40px;height: 25px;">
    </form>
    
    <table>
        <tr>
            <th>STT</th>
            <th>Ten Sản Phẩm</th>
            <th>hình</th>
            <th>giá</th>
            <th>hành động</th>
        </tr>
        
        <?php
        if(isset($kq) && (count($kq)>0))
        {
            $i=1;
            foreach($kq as $item)
            {
                echo '<tr>
                        <td>'.$i.'</td>
                        <td>'.$item['tensanpham'].'</td>
                        <td><img src="'.$item['img'].'" width="50px"" ></td>
                        <td>'.$item['gia'].'</td>
                        <td>
                            <a href="index.php?act=editformsp&id='.$item['id'].'">Sửa</a>
                            <a href="index.php?act=deletesp&id='.$item['id'].'">Xóa</a>
                        </td>
                </tr>';
                $i++;
            }
        }
        ?>
        
    </table>
</div>