<div>
    <h2>Sửa SẢN PHẨM</h2>
    <form action="index.php?act=sanpham_update" method="post" enctype="multipart/form-data" onsubmit=" return xacnhansua()">
        <select name="iddm" id="">
            <option value="0">chon danh mục</option>
            <?php
            $iddmcu=$spct[0]['id_danhmuc'];
            if(isset($dsdm)){
                foreach($dsdm as $dm){
                    if($dm['id']==$iddmcu)
                    {
                        echo '<option value="'.$dm['id'].'" selected>'.$dm['tendanhmuc'].'</option>';
                    }
                    else
                        echo '<option value="'.$dm['id'].'">'.$dm['tendanhmuc'].'</option>';
                }
            }
            ?>
        </select>
        <input type="text" name="tensanpham" value="<?=$spct[0]['tensanpham']?>">
        <input type="file" name="img">
        <!-- <img src="<?=$spct[0]['img']?>" width="50px" alt=""> -->
        <?php
        if(isset($uploadOk) && ($uploadOk==0))
        {
            echo "hãy nhập đúng hình ảnh";
        }
        ?>
        giá:<input type="text" name="gia" value="<?=$spct[0]['gia']?>">
        số lượng:<input type="number" name="soluong" value="<?=$spct[0]['soluong']?>">
        <input type="hidden" name="id" value="<?=$spct[0]['id']?>" >
        <input type="submit" name="capnhat" value="cập nhật">
    </form>
    <script>
        function xacnhansua()
        {
            return confirm("xác nhận sửa");
        }
    </script>   
    <br>
    <table border="1" style="width: 80%;">
        <tr>
            <th>STT</th>
            <th>Ten Sản Phẩm</th>
            <th>hình</th>
            <th>giá</th>
            <th>số lượng</th>
            <th>hành động</th>
        </tr>
        <?php
            //var_dump($kq);
        ?>
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