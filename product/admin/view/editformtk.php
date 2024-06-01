<div>
    <h2>TÀI KHOẢN</h2>
    <form action="index.php?act=adddm" method="post" >
        <input type="text" name="tendm">
        <input type="submit" name="themmoi" value="thêm mới">
    </form>
    
    <br>
    <table>
        <tr>
            <th>STT</th>
            <th>NAME</th>
            <th>ADĐRESS</th>
            <th>EMAIL</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>LEVER</th>
            <th>hành động</th>
        </tr>
        <?php
            //var_dump($kq);
        ?>
        <?php
        if(isset($kq) && (count($kq)>0))
        {
            $i=1;
            foreach($kq as $tk)
            {
                echo '<tr>
                        <td>'.$i.'</td>
                        <td>'.$tk['name'].'</td>
                        <td>'.$tk['address'].'</td>
                        <td>'.$tk['email'].'</td>
                        <td>'.$tk['username'].'</td>
                        <td>'.$tk['password'].'</td>
                        <td>'.$tk['lever'].'</td>
                        <td>
                            <a href="index.php?act=editformtk&id='.$tk['id'].'">Sửa</a>
                            <a href="index.php?act=deletetk&id='.$tk['id'].'">Xóa</a>
                        </td>
                </tr>';
                $i++;
            }
        }
        ?>
        
    </table>
</div>