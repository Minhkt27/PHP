<div>
    <h2>TÀI KHOẢN</h2>
    <!-- <form action="index.php?act=editformtk" method="post">
        <input type="text" name="tenkt">
        <input type="text" name="tenkt">
        <input type="text" name="tenkt">
        <input type="text" name="tenkt">
        <input type="text" name="tenkt">
        <input type="submit" name="themmoi" value="thêm mới">
    </form> -->

    <br>
    <table >
        <tr>
            <th>STT</th>
            <th>NAME</th>
            <th>ADDRESS</th>
            <th>EMAIL</th>
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
                        <td>'.$tk['lever'].'</td>
                        <td>
                            
                            <a href="index.php?act=deletetk&id='.$tk['id'].'">Xóa</a>
                        </td>
                </tr>';
                $i++;
            }
        }
        ?>
        
    </table>
</div>