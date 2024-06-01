<div>
    <h2>SẢN PHẨM</h2>
    <form action="timkiem.php" method="get">
        <input type="text" name="thongtin" style="width: 300px;margin: 10px 10px 10px 300px;height: 25px;">
        <input type="submit" value="tìm" name="tim" style="width: 40px;height: 25px;">
    </form>
    <form action="index.php?act=sanpham_add" method="post" enctype="multipart/form-data" onsubmit="return xacnhanthem()">
        <br>
        <select name="iddm" id="">
            <option value="0">chon danh mục</option>
            <?php
            if(isset($dsdm)){
                foreach($dsdm as $dm){
                    echo '<option value="'.$dm['id'].'">'.$dm['tendanhmuc'].'</option>';
                }
            }
            ?>
        </select>
        Tên sản phẩm:<input type="text" name="tensanpham">
        <input type="file" name="img">
        giá: <input type="text" name="gia">
        số lượng: <input type="number" name="soluong">
        <input type="submit" name="themmoi" value="thêm mới">
    </form>
            <script>
                function xacnhanthem()
                {
                    return confirm("xác nhận thêm");
                }
            </script>
    <br>
    <table style="width: 80%;">
        <tr>
            <th>STT</th>
            <th>Ten Sản Phẩm</th>
            <th>hình</th>
            <th>giá</th>
            <th>số lượng</th>
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
                        <td>'.$item['soluong'].'</td>
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